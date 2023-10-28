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
                <a title="" href="{{ route('home') }}"><img src="{{ Vite::asset('resources/assets/images/logo.png') }}" alt=""></a>
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
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-1.jpg') }}" alt="">
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
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-2.jpg') }}" alt="">
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
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-3.jpg') }}" alt="">
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
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-4.jpg') }}" alt="">
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
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-5.jpg') }}" alt="">
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
                        <a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
                        <div class="dropdowns">
                            <span>5 New Messages</span>
                            <ul class="drops-menu">
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-1.jpg') }}" alt="">
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
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-2.jpg') }}" alt="">
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
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-3.jpg') }}" alt="">
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
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-4.jpg') }}" alt="">
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
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-5.jpg') }}" alt="">
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
                    <li><a href="{{ route('editProfile') }}" title="Languages" data-ripple=""><i class="fa fa-globe"></i></a>

                    </li>
                </ul>
                <div class="user-img">
                    <img width="50px" height="60px" src="{{ Vite::asset('resources/assets/images/profile.png') }}" alt="">
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
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
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
                                            <i class="fa fa-plus"></i> <a data-toggle="modal" data-target="#myModal" href="" title="">Add
                                                product</a>
                                        </li>

                                        <li>
                                            <i class="ti-image"></i>
                                            <a href="#" title="" data-toggle="modal" data-target="#imagesModal">Images</a>
                                        </li>



                                    </ul>
                                </div>
                            </aside>
                            <!-- modal -->

                            <div class="modal fade" id="myProductsModal" tabindex="-1" role="dialog" aria-labelledby="myProductsModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myProductsModalLabel">My products</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" class="styled-form">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name">Name:</label>
                                                    <input type="text" name="name" id="name" placeholder="name" class="form-control" class="styled-input" style="background-color: #e9f5f9;"></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">description:</label>
                                                    <textarea name="description" id="description" placeholder="description" class="form-control" rows="4" style="background-color: #e9f5f9;"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="prix">Prix:</label>
                                                    <input type="number" name="prix" id="prix" class="form-control" min="1" placeholder="price" style="background-color: #e9f5f9;" />
                                                </div>

                                                <div class="form-group">
                                                    <label for="location_id">Location:</label>
                                                    <select name="location_id" id="location_id" class="form-control" style="background-color: #e9f5f9;">
                                                        <!-- Populate with posts -->
                                                        @foreach ($locations as $location)
                                                        <option value="{{ $location->id }}">{{ $location->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="category_id">Category:</label>
                                                    <select name="category_id" id="category_id" class="form-control" style="background-color: #e9f5f9;">
                                                        <!-- Populate with posts -->
                                                        @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>




                                                <div class="form-group custom-file">
                                                    <input type="file" class="custom-file-input" id="file" name="file" accept="image/*">
                                                    <label class="custom-file-label" for="file">Choose
                                                        image...</label>
                                                </div>
                                                <button type="submit" class="mtr-btn"><span>Create
                                                        product</span></button>
                                                <a href="{{ route('home') }}" class="mtr-btn" title=""><span>Cancel</span></a>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>



                            <div class="modal fade" id="imagesModal" tabindex="-1" role="dialog" aria-labelledby="imagesModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" style="max-width: 40%; max-height: 30%;" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imagesModalLabel">Images</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    @foreach ($allProducts as $product)
                                                    <div class="carousel-item @if ($loop->first) active @endif">
                                                        <img class="d-block w-100" src="{{ Vite::asset('storage/app/public/' . $product->file) }}" alt="Image">
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" ariahidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="blog-sec right-pading">
                                <div class="post-filter-sec">
                                    <form method="get" class="filter-form">
                                        <input type="text" name="search" placeholder="Search products" value="{{ request('search') }}">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </form>
                                    <div class="purify mt-1">
                                        <form method="get" action="{{ route('products') }}">
                                            <label for="search" style="margin-right: 10px;">Category:</label>

                                            <select name="category">

                                                <option value="">All</option>
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            <!-- Price Filter -->
                                            <label for="min_price" style="margin-right: 10px;">Min Price:</label>
                                            <input type="number" name="min_price" id="min_price" placeholder="Min Price" min="0" style="width: 80px; padding: 5px; border: 1px solid #ccc; border-radius: 5px;">

                                            <label for="max_price" style="margin-left: 10px; margin-right: 10px;">Max
                                                Price:</label>
                                            <input type="number" name="max_price" id="max_price" placeholder="Max Price" min="0" style="width: 80px; padding: 5px; border: 1px solid #ccc; border-radius: 5px;">
                                            <button type="submit" class="py-2 px-3">
                                                <i class="ti-search"></i></button>
                                        </form>
                                    </div>
                                </div>

                                @foreach ($products as $product)
                                <div class="l-post row my-4">
                                    <div class="col-md-6">
                                        <!-- Product Card -->
                                        <div class="card product-card mb-3">
                                            <div class="card-body">
                                                <!-- Product Information -->
                                                <figure>
                                                    @if ($product->file)
                                                    <img src="{{ asset('storage/' . $product->file) }}" alt="Product Image" class="img-fluid">
                                                    @else
                                                    <img src="{{ asset('storage/images.png') }}" alt="Default Image" class="img-fluid">
                                                    @endif
                                                </figure>
                                                <h4 class="my-3">{{ $product->name }}</h4>
                                                <!-- Product Information -->
                                                <p class="admin">By: {{ $product->username }}</p>
                                                <p class="time-post">Created at:
                                                    {{ $product->created_at->format('l F jS') }}
                                                </p>
                                                <p class="price">{{ $product->prix }} TND</p>
                                                <p class="location">{{ $product->location->name }}</p>
                                                <p class="description">{{ $product->description }}</p>
                                                <div class="like-section">
                                                    <p class="like-count">{{ $product->likes->count() }} Likes</p>
                                                    @if ($product->user_id != auth()->user()->id)
                                                    @if ($product->likedByUser(auth()->user()))
                                                    <form action="{{ route('products.like', $product->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <!-- Use DELETE method to unlike -->
                                                        <button type="submit" class="unlike-button">
                                                            <i class="ti-heart-broken"></i>
                                                            <!-- Empty heart icon -->
                                                        </button>
                                                    </form>
                                                    @else
                                                    <form action="{{ route('products.like', $product->id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="like-button">
                                                            <i class="ti-heart"></i>
                                                            <!-- Filled heart icon -->
                                                        </button>
                                                    </form>
                                                    @endif
                                                    @endif
                                                </div>
                                                @if ($product->user_id == auth()->user()->id)
                                                <div class="delete-button">
                                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                                    </form>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card contact-card mb-3">
                                            <div class="card-body">
                                                <div class="contact-messages p-3">
                                                    <h5>Contact Messages:</h5>
                                                    <div style="max-height: 300px; overflow-y: auto;">

                                                        @foreach ($contactMessages[$product->id] as $message)
                                                        <div class="contact-message" style="border: 1px solid; padding: 10px; margin: 10px 0; border-radius: 8px; background-color: #e9f5f9;">
                                                            <strong>{{ $message->sender->name }}</strong>
                                                            <p>{{ $message->message }}</p>
                                                            <p class="timestamp text-muted small">
                                                                {{ $message->created_at->format('Y-m-d H:i:s') }}
                                                            </p>

                                                            @if (auth()->user()->id === $message->sender_id)
                                                            <form method="post" action="{{ route('products.deleteMessage', ['product_id' => $product->id, 'message_id' => $message->id]) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                            </form>
                                                            @endif

                                                        </div>
                                                        @endforeach
                                                    </div>

                                                    @if (auth()->user()->id === $product->user_id)
                                                    <!-- Show the "Contact Owner" button for the product owner -->
                                                    <form method="post" action="{{ route('products.contact', ['product_id' => $product->id]) }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="message">Message</label>
                                                            <textarea name="message" class="form-control" rows="4" required style="border: 1px solid #000; background-color: ghostwhite"></textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-success">Répondre</button>
                                                    </form>
                                                    @else
                                                    <!-- Show the "Contact Sender" button for other users -->
                                                    <form method="post" action="{{ route('products.contact', ['product_id' => $product->id]) }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="message">Message</label>
                                                            <textarea name="message" class="form-control" rows="4" required style="border: 1px solid #000; background-color: ghostwhite"></textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Contact
                                                            Owner</button>
                                                    </form>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add any modals or additional features specific to Products -->
                                @endforeach


                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <ul class="pagination justify-content-center">
                                            @if ($products->onFirstPage())
                                            <li class="page-item disabled"><span class="page-link">Previous</span>
                                            </li>
                                            @else
                                            <li class="page-item"><a href="{{ $products->previousPageUrl() }}" class="page-link">Previous</a></li>
                                            @endif
                                            @for ($i = 1; $i <= $products->lastPage(); $i++)
                                                <li class="page-item{{ $i === $products->currentPage() ? ' active' : '' }}">
                                                    <a href="{{ $products->url($i) }}" class="page-link">{{ $i }}</a>
                                                </li>
                                                @endfor
                                                @if ($products->hasMorePages())
                                                <li class="page-item"><a href="{{ $products->nextPageUrl() }}" class="page-link">Next</a></li>
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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

</body>

</html>