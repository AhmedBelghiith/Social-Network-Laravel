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