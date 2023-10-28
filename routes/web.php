<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\landingController;

use App\Http\Controllers\PostController;

use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\EventController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\BlogController;

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/inbox', function () {
    return view('inbox');
});
Route::get('/profile/edit', function () {
    return view('profile');
})->name('editProfile');

Route::get('/', function () {
    return view('login');
})->name('signin');
Route::get('/home', function () {
    return view('home')->name('home');
})->name('home');
Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
//edit profile 
Route::put('/profile/update',  [EventController::class, 'updateProfile'])->name('profile.update');



//Events ==>
//add event routes
Route::get('/dashboard/events/add', [EventController::class, 'create'])->name('addEvent');
Route::post('/events', [EventController::class, 'store'])->name('addEventPost');
//edit event routes
Route::get('events/{event}/edit', [EventController::class, 'edit'])->name('editEvent');
Route::put('/events/{id}',  [EventController::class, 'update'])->name('editEventPut');
//display event 
Route::get('/dashboard/events', [EventController::class, 'index'])->name('showEvent');
//delete event
Route::delete('dashboard/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');
//display event frontOffice
Route::get('/home/events', [EventController::class, 'displayEvents'])->name('events');
//participate
Route::post('/home/events/{event}/participate', [EventController::class, 'participateInEvent'])->name('eventParticipate');
//event reviews 
Route::post('/home/events/{event}/reviews', [EventController::class, 'addReview'])->name('addReview');




//Groups ==>
//add group routes
Route::get('/dashboard/groups/add', [GroupController::class, 'create'])->name('addGroup');
Route::post('/groups', [GroupController::class, 'store'])->name('addGroupPost');
//edit group routes
Route::get('groups/{group}/edit', [GroupController::class, 'edit'])->name('editGroup');
Route::put('groups/{group}', [GroupController::class, 'update'])->name('editGroupPut');
//display group 
Route::get('/dashboard/groups', [GroupController::class, 'index'])->name('showGroup');
//delete group
Route::delete('dashboard/groups/{group}', [GroupController::class, 'destroy'])->name('groups.destroy');
Route::get('/home/groups', [GroupController::class, 'displayGroups'])->name('groups');
Route::get('/home/groups/add', [GroupController::class, 'addGroupFront'])->name('addGroupFront');
Route::post('/groupsfront', [GroupController::class, 'storeFront'])->name('addGroupPostFront');
Route::get('/groups/{group}/join', [GroupController::class, 'join'])->name('joinGroup');
Route::post('/groups/{group}/leave', [GroupController::class, 'leave'])->name('leaveGroup');
Route::delete('home/groups/{group}', [GroupController::class, 'destroyFront'])->name('groups.destroyfront');
Route::get('home/{group}/edit', [GroupController::class, 'editFront'])->name('editGroupFront');
Route::put('home/{group}', [GroupController::class, 'updateFront'])->name('editGroupPutFront');
Route::get('/group/{group}', [GroupController::class, 'groupPageFront'])->name('groupPageFront');
//blogs ==>
//add blog
Route::post('/blogs', [BlogController::class, 'storeBlog'])->name('addBlog');
Route::delete('/delete-blog/{blog}', [BlogController::class, 'destroy'])->name('deleteBlog');

//Comment ==>
// Route to display the comment creation form
Route::get('/dashboard/comments/create', [CommentController::class, 'create'])->name('comments.create');
Route::post('/dashboard/comments', [CommentController::class, 'store'])->name('comments.store');
Route::post('/home', [CommentController::class, 'store'])->name('comments.store');
Route::get('/dashboard/comments', [CommentController::class, 'index'])->name('comments.index');
Route::delete('/dashboard/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');
Route::get('/dashboard/comments/{id}/edit', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('/dashboard/comments/{id}', [CommentController::class, 'update'])->name('comments.update');

//Category ==>
// Route to display the category creation form
Route::get('/dashboard/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/dashboard/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/dashboard/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::delete('/dashboard/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/dashboard/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/dashboard/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');


//Product ==>
// Route to display the product creation form
Route::get('/dashboard/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/dashboard/products', [ProductController::class, 'store'])->name('products.store');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/dashboard/products', [ProductController::class, 'index'])->name('products.index');
Route::delete('/dashboard/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/dashboard/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/dashboard/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/home/products', [ProductController::class, 'displayProducts'])->name('products');
Route::match(['post', 'delete'], 'products/like/{product}', [ProductController::class, 'like'])->name('products.like');
Route::post('/products/{product_id}/contact', [ProductController::class, 'contactOwner'])->name('products.contact');
Route::delete('/products/{product_id}/messages/{message_id}', [ProductController::class, 'deleteMessage'])->middleware('auth')->name('products.deleteMessage');



//Pages ==>
// Route to display the page creation form
Route::get('/dashboard/pages/create', [PageController::class, 'create'])->name('pages.create');
Route::post('/dashboard/pages', [PageController::class, 'store'])->name('pages.store');
Route::get('/dashboard/pages', [PageController::class, 'index'])->name('pages.index');
Route::delete('/dashboard/pages/{id}', [PageController::class, 'destroy'])->name('pages.destroy');
Route::get('/dashboard/pages/{id}/edit', [PageController::class, 'edit'])->name('pages.edit');
Route::put('/dashboard/pages/{id}', [PageController::class, 'update'])->name('pages.update');
//frontoffice
Route::get('/home/pages/', [PageController::class, 'displayPages'])->name('pages');
Route::post('/home/pages/{page}/join', [PageController::class, 'joinPage'])->name('page.join');
Route::get('/home/pages/{page}', [PageController::class, 'display'])->name('page.show');








Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/posts', PostController::class);


Route::get('/home', [HomeController::class, 'index'])->name('home');
