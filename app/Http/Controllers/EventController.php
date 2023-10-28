<?php

namespace App\Http\Controllers;


use App\Models\Event;
use App\Models\Comment;
use App\Models\Location;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    // Display events backOffice
    public function index()
    {

        $commentCount = Comment::count();
        $events = Event::with('creator')->get();
        
        return view('events.event', compact('events', 'commentCount'));
    }
    // Display event frontOffice
    public function displayEvents(Request $request)
    {
        $locations = Location::all();
        $allevents = Event::all();
        $search = $request->input('search');
        $category = $request->input('category');
        $user = auth()->user();
        $users = User::all();
        $myevents = $user->events;
        $events = Event::join('users', 'events.user_id', '=', 'users.id')
            ->select('events.*', 'users.name as username')
            ->when($search, function ($query) use ($search) {
                return $query->where('events.title', 'like', "%$search%")
                    ->orWhere('events.description', 'like', "%$search%")
                    ->orWhere('users.name', 'like', "%$search%");
            })
            ->when($category, function ($query) use ($category) {
                return $query->where('events.category', $category);
            })
            ->paginate(3);
        return view('events.frontOffice.eventFrontOffice', compact('events', 'myevents', 'locations', 'allevents', 'users'));
    }


    // Display the event creation form
    public function create()
    {
        $commentCount = Comment::count();
        $users = User::all();
        $locations = Location::all();
        return view('events.add', compact('users', 'commentCount','locations'));
    }

    // Create event
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
            'description' => 'required|string',
            'start_time' => 'required',
            'end_time' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'category' => 'required',
            'location_id' => 'required|exists:locations,id',
        ]);
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $validatedData['image'] = $imagePath;
        }
        $user = Auth::user();
        $event = new Event($validatedData);
        $event->user_id = $user->id;
        $event->save();
        return back()->with('success', 'Event added successfully.');;
    }



    //delete event
    public function destroy(Event $event)
    {
        $event->delete();
        return back()->with('success', 'page deleted successfully.');;
    }



    //edit events interface
    public function edit(Event $event)
    {
        $commentCount = Comment::count();
        $locations = Location::all();

        return view('events.edit', compact('event', 'commentCount', 'locations'));
    }

    // Update event 
    public function update(Request $request, $id)
    {
        // Valider les données du formulaire de modification
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'location_id' => 'required|exists:locations,id',
        ]);

        // Vérifier si l'événement avec l'ID spécifié existe
        $event = Event::findOrFail($id);

        // Mettre à jour les données de l'événement avec les nouvelles données validées
        $event->update($validatedData);

        // Rediriger l'utilisateur vers la page de détails de l'événement mis à jour
        return redirect()->route('showEvent', ['id' => $event->id])->with('success', 'Événement mis à jour avec succès.');
    }


    //participate
    public function participateInEvent(Event $event)
    {
        $user = auth()->user();

        if (!$event->participants->contains($user)) {
            $event->participants()->attach($user);
        } else {
            $event->participants()->detach($user);
        }

        return back(); // Redirect back to the same page or to wherever you need
    }


    // my events
    public function myEvents()
    {
        $user = auth()->user();

        $events = $user->events;

        return view('events.frontOffice.myEvents', compact('events'));
    }

    public function addReview(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'comment' => 'required',
            'rating' => 'required',
        ]);

        $user = auth()->user();

        $review = new Review([
            'user_id' => $user->id,
            'event_id' => $event->id,
            'comment' => $validatedData['comment'],
            'rating' => $validatedData['rating'],
        ]);
        $review->save();

        return redirect()->route('events')->with('success', 'Review added successfully');
    }


    public function updateProfile(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'new_password' => 'nullable|string|min:6',  // Allow empty new_password
        ]);
        
        $user = auth()->user();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        
        if (!empty($validatedData['new_password'])) {
            $user->password = bcrypt($validatedData['new_password']);
        }
        
        $user->save();
        
        return back()->with('success', 'Profile updated successfully');
        
    }
}
