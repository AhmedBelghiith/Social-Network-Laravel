<html>

<head>
    @vite(['resources/sass/app.scss'])
    @vite(['resources/js/app.js'])
    @vite(['resources/assets/css/main.min.css'])
    @vite(['resources/assets/css/style.css'])
    @vite(['resources/assets/css/color.css'])
    @vite(['resources/assets/css/responsive.css'])
</head>

<body class="antialiased">
    <!--<div class="se-pre-con"></div>-->
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
            <div class="feature-photo">
                <figure><img src="{{ Vite::asset('resources/assets/images/resources/timeline-1.jpg') }}" alt=""></figure>
                <div class="add-btn">
                    <span>1205 followers</span>
                    <a href="#" title="" data-ripple="">Add Friend</a>
                </div>
                <form class="edit-phto">
                    <i class="fa fa-camera-retro"></i>
                    <label class="fileContainer">
                        Edit Cover Photo
                        <input type="file" />
                    </label>
                </form>
                <div class="container-fluid">
                    <div class="row merged">
                        <div class="col-lg-2 col-sm-3">
                            <div class="user-avatar">
                                <figure>
                                    <img src="{{ Vite::asset('resources/assets/images/resources/user-avatar.jpg') }}" alt="">
                                    <form class="edit-phto">
                                        <i class="fa fa-camera-retro"></i>
                                        <label class="fileContainer">
                                            Edit Display Photo
                                            <input type="file" />
                                        </label>
                                    </form>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-10 col-sm-9">
                            <div class="timeline-info">
                                <ul>
                                    <li class="admin-name">
                                        <h5>Janice Griffith</h5>
                                    </li>
                                    <li>
                                        <a class="" href="/time-line" title="" data-ripple="">time
                                            line</a>
                                        <a class="" href="timeline-photos.html" title="" data-ripple="">Photos</a>
                                        <a class="" href="timeline-videos.html" title="" data-ripple="">Videos</a>
                                        <a class="" href="timeline-friends.html" title="" data-ripple="">Friends</a>
                                        <a class="" href="timeline-groups.html" title="" data-ripple="">Groups</a>
                                        <a class="" href="about.html" title="" data-ripple="">about</a>
                                        <a class="active" href="#" title="" data-ripple="">more</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- top area -->

        <section>
            <div class="gap gray-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row" id="page-contents">
                                <div class="col-lg-9">
                                    <div class="inbox-sec">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-4">
                                                <div class="inbox-navigation">
                                                    <div class="inbox-panel-head">
                                                        <img alt="" src="{{ Vite::asset('resources/assets/images/resources/friend-avatar11.jpg') }}">
                                                        <h1><i>Brian</i> Kelly</h1>
                                                        <a title="" href="edit-profile-basic.html"><i class="fa fa-user"></i>Profile</a>
                                                        <a title="" href="edit-account-setting.html"><i class="fa fa-cog"></i>Setting</a>
                                                        <ul>
                                                            <li><a class="compose-btn" title="" href="#">Compose</a></li>
                                                        </ul>
                                                    </div><!-- Inbox Panel Head -->
                                                    <ul>
                                                        <li class="active"><a title=""><i class="fa fa-inbox"></i>Inbox</a><span>4</span>
                                                        </li>
                                                        <li><a title=""><i class="fa fa-paper-plane-o"></i>Draft</a></li>
                                                        <li><a title=""><i class="fa fa-repeat"></i>Outbox</a><span>6</span>
                                                        </li>
                                                        <li><a title=""><i class="fa fa-plane"></i>Sent</a></li>
                                                        <li><a title=""><i class="fa fa-trash-o"></i>Trash</a>
                                                        </li>
                                                    </ul>
                                                    <div class="flaged">
                                                        <h3><i class="fa fa-flag"></i>FLAGGED</h3>
                                                        <ul>
                                                            <li><a title="" href="#"><i style="color:#ff5c5c;" class="fa fa-tag"></i>Family</a></li>
                                                            <li><a title="" href="#"><i style="color:#3ac1e3;" class="fa fa-tag"></i>Friends</a></li>
                                                            <li><a title="" href="#"><i style="color:#f3d547;" class="fa fa-tag"></i>Private</a></li>
                                                            <li><a title="" href="#"><i style="color:#b447f3;" class="fa fa-tag"></i>Office Staff</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-8">
                                                <div class="inbox-lists">
                                                    <div class="inbox-action">
                                                        <ul>
                                                            <li><label><input type="checkbox" name="select-all" id="select_all" /> Select all</label></li>
                                                            <li><a class="delete-email" title=""><i class="fa fa-trash-o"></i> Delete</a></li>
                                                            <li><a title=""><i class="fa fa-refresh"></i>
                                                                    Refresh</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mesages-lists">
                                                        <form method="post">
                                                            <input type="text" placeholder="Search Email">
                                                        </form>
                                                        <ul id="message-list" class="message-list">
                                                            <li class="unread">
                                                                <input class="select-message" type="checkbox" />
                                                                <span class="star-this starred"><i class="fa fa-star-o"></i></span>

                                                                <h3 class="sender-name">Darlina Jaze</h3>
                                                                <a title="" data-toggle="tooltip" data-original-title="Attachment"><i class="fa fa-paperclip"></i></a>
                                                                <span class="make-important"><i class="fa fa-thumb-tack"></i></span>

                                                                <p>It is a long established fact that a reader will be
                                                                    distracted</p>
                                                            </li>
                                                            <li class="unread">
                                                                <input class="select-message" type="checkbox" />
                                                                <span class="star-this "><i class="fa fa-star-o"></i></span>

                                                                <h3 class="sender-name">Barlina Maze</h3>
                                                                <span class="make-important"><i class="fa fa-thumb-tack"></i></span>

                                                                <p>That a reader will be distracted by the readable
                                                                    content..</p>
                                                            </li>
                                                            <li class="read">
                                                                <input class="select-message" type="checkbox" />
                                                                <span class="star-this starred"><i class="fa fa-star-o"></i></span>

                                                                <h3 class="sender-name">Jonathan Dae</h3>
                                                                <span class="make-important"><i class="fa fa-thumb-tack"></i></span>

                                                                <p>Will be distracted by the readable..</p>
                                                            </li>
                                                            <li class="read">
                                                                <input class="select-message" type="checkbox" />
                                                                <span class="star-this"><i class="fa fa-star-o"></i></span>

                                                                <h3 class="sender-name">Humaina Burb</h3>
                                                                <a title="" data-toggle="tooltip" data-original-title="Attachment"><i class="fa fa-paperclip"></i></a>
                                                                <span class="make-important important-done"><i class="fa fa-thumb-tack"></i></span>

                                                                <p>It is a long established fact by the readable
                                                                    ponkaa..</p>
                                                            </li>
                                                            <li class="unread">
                                                                <input class="select-message" type="checkbox" />
                                                                <span class="star-this "><i class="fa fa-star-o"></i></span>

                                                                <h3 class="sender-name">Barlina Maze</h3>
                                                                <span class="make-important"><i class="fa fa-thumb-tack"></i></span>

                                                                <p>Long will be distracted by the readable..</p>
                                                            </li>
                                                            <li class="unread">
                                                                <input class="select-message" type="checkbox" />
                                                                <span class="star-this starred"><i class="fa fa-star-o"></i></span>

                                                                <h3 class="sender-name">Darlina Jaze</h3>
                                                                <a title="" data-toggle="tooltip" data-original-title="Attachment"><i class="fa fa-paperclip"></i></a>
                                                                <span class="make-important"><i class="fa fa-thumb-tack"></i></span>

                                                                <p>Reader will be distracted by the nalanye..</p>
                                                            </li>
                                                            <li class="unread">
                                                                <input class="select-message" type="checkbox" />
                                                                <span class="star-this starred"><i class="fa fa-star-o"></i></span>

                                                                <h3 class="sender-name">Darlina Jaze</h3>
                                                                <a title="" data-toggle="tooltip" data-original-title="Attachment"><i class="fa fa-paperclip"></i></a>
                                                                <span class="make-important"><i class="fa fa-thumb-tack"></i></span>

                                                                <p>It is a long established fact that a reader will be
                                                                    distracted</p>
                                                            </li>
                                                            <li class="unread">
                                                                <input class="select-message" type="checkbox" />
                                                                <span class="star-this "><i class="fa fa-star-o"></i></span>

                                                                <h3 class="sender-name">Barlina Maze</h3>
                                                                <span class="make-important"><i class="fa fa-thumb-tack"></i></span>

                                                                <p>That a reader will be distracted by the readable
                                                                    content..</p>
                                                            </li>
                                                            <li class="read">
                                                                <input class="select-message" type="checkbox" />
                                                                <span class="star-this starred"><i class="fa fa-star-o"></i></span>

                                                                <h3 class="sender-name">Jonathan Dae</h3>
                                                                <span class="make-important"><i class="fa fa-thumb-tack"></i></span>

                                                                <p>Will be distracted by the readable..</p>
                                                            </li>
                                                            <li class="read">
                                                                <input class="select-message" type="checkbox" />
                                                                <span class="star-this"><i class="fa fa-star-o"></i></span>

                                                                <h3 class="sender-name">Humaina Burb</h3>
                                                                <a title="" data-toggle="tooltip" data-original-title="Attachment"><i class="fa fa-paperclip"></i></a>
                                                                <span class="make-important important-done"><i class="fa fa-thumb-tack"></i></span>

                                                                <p>It is a long established fact by the readable
                                                                    ponkaa..</p>
                                                            </li>
                                                            <li class="unread">
                                                                <input class="select-message" type="checkbox" />
                                                                <span class="star-this "><i class="fa fa-star-o"></i></span>

                                                                <h3 class="sender-name">Barlina Maze</h3>
                                                                <span class="make-important"><i class="fa fa-thumb-tack"></i></span>

                                                                <p>Long will be distracted by the readable..</p>
                                                            </li>
                                                            <li class="unread">
                                                                <input class="select-message" type="checkbox" />
                                                                <span class="star-this starred"><i class="fa fa-star-o"></i></span>

                                                                <h3 class="sender-name">Darlina Jaze</h3>
                                                                <a title="" data-toggle="tooltip" data-original-title="Attachment"><i class="fa fa-paperclip"></i></a>
                                                                <span class="make-important"><i class="fa fa-thumb-tack"></i></span>

                                                                <p>Reader will be distracted by the nalanye..</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- Inbox lists -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <aside class="sidebar static">
                                        <div class="advertisment-box">
                                            <h4 class="">advertisment</h4>
                                            <figure>
                                                <a href="#" title="Advertisment"><img src="{{ Vite::asset('resources/assets/images/resources/ad-widget.jpg') }}" alt=""></a>
                                            </figure>
                                        </div>
                                        <div class="widget friend-list stick-widget">
                                            <h4 class="widget-title">Friends</h4>
                                            <div id="searchDir"></div>
                                            <ul id="people-list" class="friendz-list">
                                                <li>
                                                    <figure>
                                                        <img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar.jpg') }}" alt="">
                                                        <span class="status f-online"></span>
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="/time-line">bucky barnes</a>
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="03746a6d776671706c6f67667143646e626a6f2d606c6e">[email&#160;protected]</a></i>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar2.jpg') }}" alt="">
                                                        <span class="status f-away"></span>
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="/time-line">Sarah Loren</a>
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="791b180b171c0a391e14181015571a1614">[email&#160;protected]</a></i>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar3.jpg') }}" alt="">
                                                        <span class="status f-off"></span>
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="/time-line">jason borne</a>
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="610b00120e0f0321060c00080d4f020e0c">[email&#160;protected]</a></i>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar4.jpg') }}" alt="">
                                                        <span class="status f-off"></span>
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="/time-line">Cameron diaz</a>
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a6ccc7d5c9c8c4e6c1cbc7cfca88c5c9cb">[email&#160;protected]</a></i>
                                                    </div>
                                                </li>
                                                <li>

                                                    <figure>
                                                        <img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar5.jpg') }}" alt="">
                                                        <span class="status f-online"></span>
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="/time-line">daniel warber</a>
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b0dad1c3dfded2f0d7ddd1d9dc9ed3dfdd">[email&#160;protected]</a></i>
                                                    </div>
                                                </li>
                                                <li>

                                                    <figure>
                                                        <img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar6.jpg') }}" alt="">
                                                        <span class="status f-away"></span>
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="/time-line">andrew</a>
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3a505b495554587a5d575b535614595557">[email&#160;protected]</a></i>
                                                    </div>
                                                </li>
                                                <li>

                                                    <figure>
                                                        <img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar7.jpg') }}" alt="">
                                                        <span class="status f-off"></span>
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="/time-line">amy watson</a>
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7b111a081415193b1c161a121755181416">[email&#160;protected]</a></i>
                                                    </div>
                                                </li>
                                                <li>

                                                    <figure>
                                                        <img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar5.jpg') }}" alt="">
                                                        <span class="status f-online"></span>
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="/time-line">daniel warber</a>
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="204a41534f4e4260474d41494c0e434f4d">[email&#160;protected]</a></i>
                                                    </div>
                                                </li>
                                                <li>

                                                    <figure>
                                                        <img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar2.jpg') }}" alt="">
                                                        <span class="status f-away"></span>
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="/time-line">Sarah Loren</a>
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="533132213d362013343e323a3f7d303c3e">[email&#160;protected]</a></i>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="chat-box">
                                                <div class="chat-head">
                                                    <span class="status f-online"></span>
                                                    <h6>Bucky Barnes</h6>
                                                    <div class="more">
                                                        <span><i class="ti-more-alt"></i></span>
                                                        <span class="close-mesage"><i class="ti-close"></i></span>
                                                    </div>
                                                </div>
                                                <div class="chat-list">
                                                    <ul>
                                                        <li class="me">
                                                            <div class="chat-thumb"><img src="{{ Vite::asset('resources/assets/images/resources/chatlist1.jpg') }}" alt=""></div>
                                                            <div class="notification-event">
                                                                <span class="chat-message-item">
                                                                    Hi James! Please remember to buy the food for
                                                                    tomorrow! I’m gonna be handling the gifts and Jake’s
                                                                    gonna get the drinks
                                                                </span>
                                                                <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at
                                                                        8:10pm</time></span>
                                                            </div>
                                                        </li>
                                                        <li class="you">
                                                            <div class="chat-thumb"><img src="{{ Vite::asset('resources/assets/images/resources/chatlist2.jpg') }}" alt=""></div>
                                                            <div class="notification-event">
                                                                <span class="chat-message-item">
                                                                    Hi James! Please remember to buy the food for
                                                                    tomorrow! I’m gonna be handling the gifts and Jake’s
                                                                    gonna get the drinks
                                                                </span>
                                                                <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at
                                                                        8:10pm</time></span>
                                                            </div>
                                                        </li>
                                                        <li class="me">
                                                            <div class="chat-thumb"><img src="{{ Vite::asset('resources/assets/images/resources/chatlist1.jpg') }}" alt=""></div>
                                                            <div class="notification-event">
                                                                <span class="chat-message-item">
                                                                    Hi James! Please remember to buy the food for
                                                                    tomorrow! I’m gonna be handling the gifts and Jake’s
                                                                    gonna get the drinks
                                                                </span>
                                                                <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at
                                                                        8:10pm</time></span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <form class="text-box">
                                                        <textarea placeholder="Post enter to post..."></textarea>
                                                        <div class="add-smiles">
                                                            <span title="add icon" class="em em-expressionless"></span>
                                                        </div>
                                                        <div class="smiles-bunch">
                                                            <i class="em em---1"></i>
                                                            <i class="em em-smiley"></i>
                                                            <i class="em em-anguished"></i>
                                                            <i class="em em-laughing"></i>
                                                            <i class="em em-angry"></i>
                                                            <i class="em em-astonished"></i>
                                                            <i class="em em-blush"></i>
                                                            <i class="em em-disappointed"></i>
                                                            <i class="em em-worried"></i>
                                                            <i class="em em-kissing_heart"></i>
                                                            <i class="em em-rage"></i>
                                                            <i class="em em-stuck_out_tongue"></i>
                                                        </div>
                                                        <button type="submit"></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- friends list sidebar -->
                                    </aside>
                                </div><!-- sidebar -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="widget">
                            <div class="foot-logo">
                                <div class="logo">
                                    <a href="index.html" title=""><img src="{{ Vite::asset('resources/assets/images/logo.jpg') }}" alt=""></a>
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
                                <li><i class="fa fa-facebook-square"></i> <a href="https://web.facebook.com/shopcircut/" title="">facebook</a></li>
                                <li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=en" title="">twitter</a></li>
                                <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/?hl=en" title="">instagram</a></li>
                                <li><i class="fa fa-google-plus-square"></i> <a href="https://plus.google.com/discover" title="">Google+</a></li>
                                <li><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/" title="">Pintrest</a></li>
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
                                <li><a href="https://play.google.com/store?hl=en" title=""><i class="fa fa-android"></i>android</a></li>
                                <li><a href="https://www.apple.com/lae/ios/app-store/" title=""><i class="ti-apple"></i>iPhone</a></li>
                                <li><a href="https://www.microsoft.com/store/apps" title=""><i class="fa fa-windows"></i>Windows</a></li>
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
                        <i><img src="{{ Vite::asset('resources/assets/images/credit-cards.png.jpg') }}" alt=""></i>
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
    </div><!-- side panel -->
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