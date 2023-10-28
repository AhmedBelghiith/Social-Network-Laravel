<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/sass/app.scss'])
    @vite(['resources/js/app.js'])
    @vite(['resources/assets/css/main.min.css'])
    @vite(['resources/assets/css/style.css'])
    @vite(['resources/assets/css/color.css'])
    @vite(['resources/assets/css/responsive.css'])
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <div class="theme-layout">

        <div class="topbar stick">
            <div class="logo">
                <a title="" href="{{ route('home') }}"><img
                        src="{{ Vite::asset('resources/assets/images/logo.png') }}" alt=""></a>
            </div>

            <div class="top-area">
                <ul class="">
                    @if (auth()->check() && auth()->user()->role === 'admin')
                        <li>
                            <a href="{{ route('dashboard') }}" title="">Dashboard</a>
                        </li>
                    @endif

                    <li>
                        <a href="{{ route('editProfile') }}" title=""> Settings</a>
                    </li>
                </ul>

                <ul class="setting-area">

                    <li><a href="{{ route('home') }}" title="Home" data-ripple=""><i class="ti-home"></i></a></li>

                    <li>
                        <a href="#" title="Notification" data-ripple="">
                            <i class="ti-bell"></i><span>20</span>
                        </a>
                        <div class="dropdowns">
                            <span>4 New Notifications</span>
                            <ul class="drops-menu">
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-1.jpg') }}"
                                            alt="">
                                        <div class="mesg-meta">
                                            <h6>sarah Loren</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag green">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-2.jpg') }}"
                                            alt="">
                                        <div class="mesg-meta">
                                            <h6>Jhon doe</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag red">Reply</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-3.jpg') }}"
                                            alt="">
                                        <div class="mesg-meta">
                                            <h6>Andrew</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag blue">Unseen</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-4.jpg') }}"
                                            alt="">
                                        <div class="mesg-meta">
                                            <h6>Tom cruse</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-5.jpg') }}"
                                            alt="">
                                        <div class="mesg-meta">
                                            <h6>Amy</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                            </ul>
                            <a href="notifications.html" title="" class="more-mesg">view more</a>
                        </div>
                    </li>
                    <li>
                        <a href="#" title="Messages" data-ripple=""><i
                                class="ti-comment"></i><span>12</span></a>
                        <div class="dropdowns">
                            <span>5 New Messages</span>
                            <ul class="drops-menu">
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-1.jpg') }}"
                                            alt="">
                                        <div class="mesg-meta">
                                            <h6>sarah Loren</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag green">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-2.jpg') }}"
                                            alt="">
                                        <div class="mesg-meta">
                                            <h6>Jhon doe</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag red">Reply</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-3.jpg') }}"
                                            alt="">
                                        <div class="mesg-meta">
                                            <h6>Andrew</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag blue">Unseen</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-4.jpg') }}"
                                            alt="">
                                        <div class="mesg-meta">
                                            <h6>Tom cruse</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-5.jpg') }}"
                                            alt="">
                                        <div class="mesg-meta">
                                            <h6>Amy</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                            </ul>
                            <a href="messages.html" title="" class="more-mesg">view more</a>
                        </div>
                    </li>
                    <li><a href="{{ route('editProfile') }}" title="Languages" data-ripple=""><i
                                class="fa fa-globe"></i></a>

                    </li>
                </ul>
                <div class="user-img">
                    <img width="50px" height="60px"
                        src="{{ Vite::asset('resources/assets/images/profile.png') }}" alt="">
                    <span class="status f-online"></span>
                    <div class="user-setting">
                        <a href="#" title=""><span class="status f-online"></span>online</a>
                        {{-- <a href="#" title=""><span class="status f-away"></span>away</a>
					<a href="#" title=""><span class="status f-off"></span>offline</a> --}}
                        @if (Auth::check())
                            <a href="{{ route('profile') }}" title=""><i class="ti-user"></i>
                                {{ Auth::user()->name }}</a>
                        @endif
                        <a href="{{ route('editProfile') }}" title=""><i class="ti-pencil-alt"></i>edit
                            profile</a>
                        <a href="" title=""><i class="ti-target"></i>activity log</a>
                        <a href="{{ route('editProfile') }}" title=""><i class="ti-settings"></i>account
                            setting</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
								  document.getElementById('logout-form').submit();">
                            <i class="ti-power-off"></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                <span class="ti-menu main-menu" data-ripple=""></span>

            </div>
        </div>
        <section>
            <div class="gap gray-bg">
                <div class="container-fluid">
                    <div class="row" id="page-contents">
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                <div class="widget">
                                    <h4 class="widget-title">Socials</h4>
                                    <ul class="socials">
                                        <li class="facebook">
                                            <a title="" href="#"><i class="fa fa-facebook"></i>
                                                <span>facebook</span> <ins>45 likes</ins></a>
                                        </li>
                                        <li class="twitter">
                                            <a title="" href="#"><i class="fa fa-twitter"></i>
                                                <span>twitter</span><ins>25 likes</ins></a>
                                        </li>
                                        <li class="google">
                                            <a title="" href="#"><i class="fa fa-google"></i>
                                                <span>google</span><ins>35 likes</ins></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget stick-widget">
                                    <h4 class="widget-title">Shortcuts</h4>
                                    <ul class="naves">
                                        <li>
                                            <i class="fa fa-plus"></i> <a data-toggle="modal" data-target="#myModal"
                                                href="" title="">Create
                                                event</a>
                                        </li>
                                        <li>
                                            <i class="ti-files"></i>
                                            <a href="" data-toggle="modal" data-target="#myEventsModal"
                                                title="">My events</a>
                                        </li>

                                        <li>
                                            <i class="ti-image"></i>
                                            <a href="#" title="" data-toggle="modal"
                                                data-target="#imagesModal">Images</a>
                                        </li>
                                        <li>
                                            <i class="ti-files"></i>
                                            <a href="{{ route('pages') }}" title="">Pages</a>
                                        </li>


                                    </ul>
                                </div>
                            </aside>


                            <div class="modal fade" id="imagesModal" tabindex="-1" role="dialog"
                                aria-labelledby="imagesModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" style="max-width: 40%; max-height: 30%;"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imagesModalLabel">Images</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="carouselExampleControls" class="carousel slide"
                                                data-ride="carousel">
                                                <div class="carousel-inner">
                                                    @foreach ($allevents as $event)
                                                        <div
                                                            class="carousel-item @if ($loop->first) active @endif">
                                                            <img class="d-block w-100"
                                                                src="{{ Vite::asset('storage/app/public/' . $event->image) }}"
                                                                alt="Image">
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls"
                                                    role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon"
                                                        aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls"
                                                    role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" ariahidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="myEventsModal" tabindex="-1" role="dialog"
                                aria-labelledby="myEventsModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myEventsModalLabel">My Events</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <ul class="list-group">
                                                @if (!is_null($myevents))
                                                    @foreach ($myevents as $event)
                                                        <li class="list-group-item position-relative">


                                                            <h5 class="mb-1">{{ $event->title }}</h5>
                                                            <p class="mb-1"><strong>Location:</strong>
                                                                {{ $event->location->name }}
                                                            </p>
                                                            <p><strong>Participants:</strong>
                                                                {{ $event->participants->count() }}
                                                            </p>

                                                            @php
                                                                $startDate = \Carbon\Carbon::parse($event->start_time);
                                                                $endDate = \Carbon\Carbon::parse($event->end_time);
                                                                $currentDate = \Carbon\Carbon::now();
                                                            @endphp

                                                            @if ($currentDate->between($startDate, $endDate))
                                                                <p class="mb-1"><strong>State:</strong> Current</p>
                                                            @elseif ($currentDate->greaterThan($endDate))
                                                                <p class="mb-1"><strong>State:</strong> Finished</p>
                                                            @else
                                                                <p class="mb-1"><strong>State:</strong> Soon</p>
                                                            @endif
                                                        </li>
                                                        <button type="button"
                                                            class="btn btn-sm btn-danger delete-button"
                                                            data-toggle="modal"
                                                            data-target="#deleteEventModal{{ $event->id }}">
                                                            Delete
                                                        </button>

                                                        <div class="modal fade"
                                                            id="deleteEventModal{{ $event->id }}" tabindex="-1"
                                                            role="dialog"
                                                            aria-labelledby="deleteEventModalLabel{{ $event->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="deleteEventModalLabel{{ $event->id }}">
                                                                            Delete Event</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Are you sure you want to delete this event?
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-dismiss="modal">Cancel</button>
                                                                        <form
                                                                            action="{{ route('events.destroy', $event) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                class="btn btn-danger">Delete</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <p>No events found.</p>
                                                @endif

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="blog-sec right-pading">
                                <div class="post-filter-sec">
                                    <form method="get" class="filter-form">
                                        <input type="text" name="search" placeholder="Search event"
                                            value="{{ request('search') }}">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </form>
                                    <div class="purify mt-1">
                                        <form method="get" action="{{ route('events') }}">
                                            <select name="category">
                                                <option value="">All</option>
                                                <option value="art">Art</option>
                                                <option value="cultural">Cultural</option>
                                                <option value="music">Music</option>
                                                <option value="sports">Sports</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <button type="submit" class="py-2 px-3"> Purify
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Create Event</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('addEventPost') }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="text" name="title" required="required"
                                                            placeholder="Event Title" />
                                                        @error('title')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="location_id" id="location_id"
                                                            class="form-control" required>

                                                            @foreach ($locations as $location)
                                                                <option value="{{ $location->id }}">
                                                                    {{ $location->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="end_time">Starting Time:</label>

                                                        <input type="datetime-local" name="start_time"
                                                            required="required" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="end_time">End Time:</label>
                                                        <input type="datetime-local" name="end_time"
                                                            required="required" />
                                                    </div>

                                                    <div class="form-group">
                                                        <textarea name="description" rows="4" required="required" placeholder="Event Description"></textarea>
                                                        @error('description')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="category">Category :</label>
                                                        <div class="input-group">
                                                            <select class="custom-select" name="category"
                                                                id="category" required>
                                                                <option value="art">Art</option>
                                                                <option value="cultural">Cultural</option>
                                                                <option value="music">Music</option>
                                                                <option value="sports">Sports</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="customFile" name="image" accept="image/*">
                                                        <label class="custom-file-label" for="customFile">Choose
                                                            image...</label>
                                                        @error('image')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="submit-btns">
                                                        <button type="button" class="mtr-btn"
                                                            data-dismiss="modal"><span>Cancel</span></button>
                                                        <button type="submit"
                                                            class="mtr-btn"><span>Create</span></button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                @foreach ($events as $event)
                                    <div class="l-post">
                                        <figure>
                                            @if ($event->image)
                                                <img class="mx-3 my-4"
                                                    src="{{ Vite::asset('storage/app/public/' . $event->image) }}"
                                                    alt="Image">
                                            @else
                                                <img src="{{ Vite::asset('resources/assets/images/resources/404.jpg') }}"
                                                    alt="">
                                            @endif
                                            <ul class="blg-socials">
                                                <li><a href="#" title="" class="youtube"><i
                                                            class="fa fa-youtube"></i></a></li>
                                            </ul>
                                        </figure>
                                        <div class="l-post-meta">
                                            <h4 class="my-3"><a href="#"
                                                    title="">{{ $event->title }}</a></h4>
                                            <div class="l-post-ranking">
                                                <a class="admin" href="#"
                                                    title="">{{ $event->creator->name }}</a>
                                                <a class="time-post" href="#" title=""> -
                                                    {{ $event->created_at->format('l F jS') }} </a>
                                            </div>
                                            <p>
                                                {{ $event->description }}
                                            </p>
                                            <div class="g-post-ranking">
                                                <a class="likes" href="#" title="" data-toggle="modal"
                                                    data-target="#participantsModal{{ $event->id }}">
                                                    <i class="fa fa-heart-o"></i>
                                                    {{ $event->participants->count() }} Participants
                                                </a>
                                                @if (\Carbon\Carbon::parse($event->end_time)->isPast())
                                                    <a class="coments" href="#" title=""
                                                        data-toggle="modal"
                                                        data-target="#reviewsModal{{ $event->id }}"><i
                                                            class="fa fa-comment-o"></i>{{ $event->reviews->count() }}
                                                        Review</a>
                                                @endif
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <form action="{{ route('eventParticipate', $event->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @if ($event->participants->contains(auth()->user()))
                                                                <button class="btn btn-block my-3"
                                                                    style="background-color: #3B5138; color:white"
                                                                    type="submit">Participated</button>
                                                            @else
                                                                <button style="background-color: #088DCD; color:white"
                                                                    class="btn btn-block my-3"
                                                                    type="submit">Participate</button>
                                                            @endif
                                                        </form>
                                                    </div>

                                                    @if (\Carbon\Carbon::parse($event->end_time)->isPast())
                                                        <div class="col-md-4 ">
                                                            <form action="">
                                                                <a data-toggle="modal"
                                                                    data-target="#addReviewModal{{ $event->id }}"
                                                                    href=""> <button
                                                                        style="background-color: #088DCD; color:white"
                                                                        class="btn btn-block my-3" type="submit">Add
                                                                        Review</button></a>

                                                            </form>
                                                        </div>
                                                    @endif
                                                    <div class="modal fade" id="addReviewModal{{ $event->id }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="reviewInputModalLabel{{ $event->id }}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="reviewInputModalLabel{{ $event->id }}">
                                                                        Add Review for {{ $event->title }}</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST"
                                                                        action="{{ route('addReview', $event->id) }}">
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <label for="rating">Rating:</label>
                                                                            <select name="rating" id="rating"
                                                                                class="form-control" required>
                                                                                <option value="1">1 (Poor)
                                                                                </option>
                                                                                <option value="2">2 (Fair)
                                                                                </option>
                                                                                <option value="3">3 (Good)
                                                                                </option>
                                                                                <option value="4">4 (Very Good)
                                                                                </option>
                                                                                <option value="5">5 (Excellent)
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="comment">Comment:</label>
                                                                            <textarea name="comment" rows="4" required="required" placeholder="Enter your review"></textarea>
                                                                        </div>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Submit
                                                                            Review</button>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="participantsModal{{ $event->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="participantsModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="participantsModalLabel">Participants
                                                        for
                                                        {{ $event->title }}
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <ul class="list-group">
                                                        @foreach ($event->participants as $participant)
                                                            <li class="list-group-item">
                                                                {{ $participant->name }}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="reviewsModal{{ $event->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="reviewsModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="reviewsModalLabel">Reviews for
                                                        {{ $event->title }}
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <ul class="list-group">
                                                        @foreach ($event->reviews as $review)
                                                            <div class="review">
                                                                <p class="comment">{{ $review->comment }}</p>
                                                                <div class="rating">
                                                                    <p class="rating-value">Rating:
                                                                        {{ $review->rating }}
                                                                    </p>
                                                                    <p class="user-name">
                                                                        @foreach ($users as $user)
                                                                            @if ($user->id == $review->user_id)
                                                                                User: {{ $user->name }}
                                                                            @endif
                                                                        @endforeach
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        @if ($event->reviews->isEmpty())
                                                            <p>No reviews yet</p>
                                                        @endif
                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <ul class="pagination justify-content-center">
                                            @if ($events->onFirstPage())
                                                <li class="page-item disabled"><span class="page-link">Previous</span>
                                                </li>
                                            @else
                                                <li class="page-item"><a href="{{ $events->previousPageUrl() }}"
                                                        class="page-link">Previous</a></li>
                                            @endif

                                            @for ($i = 1; $i <= $events->lastPage(); $i++)
                                                <li
                                                    class="page-item{{ $i === $events->currentPage() ? ' active' : '' }}">
                                                    <a href="{{ $events->url($i) }}"
                                                        class="page-link">{{ $i }}</a>
                                                </li>
                                            @endfor

                                            @if ($events->hasMorePages())
                                                <li class="page-item"><a href="{{ $events->nextPageUrl() }}"
                                                        class="page-link">Next</a></li>
                                            @else
                                                <li class="page-item disabled"><span class="page-link">Next</span>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="widget">
                            <div class="foot-logo">
                                <div class="logo">
                                    <a href="index.html" title=""><img src="images/logo.png"
                                            alt=""></a>
                                </div>
                                <p>
                                    The trio took this simple idea and built it into the world’s leading carpooling
                                    platform.
                                </p>
                            </div>
                            <ul class="location">
                                <li>
                                    <i class="ti-map-alt"></i>
                                    <p>33 new montgomery st.750 san francisco, CA USA 94105.</p>
                                </li>
                                <li>
                                    <i class="ti-mobile"></i>
                                    <p>+1-56-346 345</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>follow</h4>
                            </div>
                            <ul class="list-style">
                                <li><i class="fa fa-facebook-square"></i> <a
                                        href="https://web.facebook.com/shopcircut/" title="">facebook</a></li>
                                <li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=en"
                                        title="">twitter</a></li>
                                <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/?hl=en"
                                        title="">instagram</a></li>
                                <li><i class="fa fa-google-plus-square"></i> <a
                                        href="https://plus.google.com/discover" title="">Google+</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Navigate</h4>
                            </div>
                            <ul class="list-style">
                                <li><a href="about.html" title="">about us</a></li>
                                <li><a href="contact.html" title="">contact us</a></li>
                                <li><a href="terms.html" title="">terms & Conditions</a></li>
                                <li><a href="#" title="">RSS syndication</a></li>
                                <li><a href="sitemap.html" title="">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>useful links</h4>
                            </div>
                            <ul class="list-style">
                                <li><a href="#" title="">leasing</a></li>
                                <li><a href="#" title="">submit route</a></li>
                                <li><a href="#" title="">how does it work?</a></li>
                                <li><a href="#" title="">agent listings</a></li>
                                <li><a href="#" title="">view All</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>download apps</h4>
                            </div>
                            <ul class="colla-apps">
                                <li><a href="https://play.google.com/store?hl=en" title=""><i
                                            class="fa fa-android"></i>android</a></li>
                                <li><a href="https://www.apple.com/lae/ios/app-store/" title=""><i
                                            class="ti-apple"></i>iPhone</a></li>
                                <li><a href="https://www.microsoft.com/store/apps" title=""><i
                                            class="fa fa-windows"></i>Windows</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- footer -->
        <div class="bottombar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="copyright">© Winku 2018. All rights reserved.</span>
                        <i><img src="images/credit-cards.png" alt=""></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="side-panel">
        <h4 class="panel-title">General Setting</h4>
        <form method="post">
            <div class="setting-row">
                <span>use night mode</span>
                <input type="checkbox" id="nightmode1" />
                <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Notifications</span>
                <input type="checkbox" id="switch22" />
                <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Notification sound</span>
                <input type="checkbox" id="switch33" />
                <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>My profile</span>
                <input type="checkbox" id="switch44" />
                <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Show profile</span>
                <input type="checkbox" id="switch55" />
                <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
            </div>
        </form>
        <h4 class="panel-title">Account Setting</h4>
        <form method="post">
            <div class="setting-row">
                <span>Sub users</span>
                <input type="checkbox" id="switch66" />
                <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>personal account</span>
                <input type="checkbox" id="switch77" />
                <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Business account</span>
                <input type="checkbox" id="switch88" />
                <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Show me online</span>
                <input type="checkbox" id="switch99" />
                <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Delete history</span>
                <input type="checkbox" id="switch101" />
                <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Expose author name</span>
                <input type="checkbox" id="switch111" />
                <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
            </div>
        </form>
    </div><!-- side panel --> --}}

        <script src="resources/assets/js/script.js"></script>

        @vite(['resources/assets/js/script.js'])
        @vite(['resources/assets/js/map-init.js'])
        @vite(['https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI'])
        @vite(['/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js'])
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

</body>

</html>
