<header class="header-section">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <a href="index.html">
                    <img src="{{ asset('webiste') }}/assets/images/logo/logo.png" alt="logo">
                </a>
            </div>
            <ul class="menu">
                <li>
                    <a href="#" class="active">Home</a>
                    <ul class="submenu">
                        <li>
                            <a href="index.html" class="active">Home One</a>
                        </li>
                        <li>
                            <a href="index2.html">Home Two</a>
                        </li>
                    </ul>
                </li>
                <li>
                    @auth
                        <a wire:navigate href="{{ route('members-list') }}">Members</a>
                    @endauth
                </li>
                <li class="user-profile">
                    <a href="#">
                        <img src="{{ asset('webiste') }}/assets/images/user-demo.png" alt="">
                    </a>
                    <ul class="submenu">
                        <li>
                            @auth
                                <a wire:navigate href="{{ route('my-profile') }}">Profile</a>
                            @endauth
                        </li>
                        <li>
                            @auth
                                <a >Dashboard</a>
                            @endauth
                            @guest
                                <a wire:navigate href="{{ route('login') }}">Login</a>
                                <a wire:navigate href="{{ route('register') }}">Register</a>
                            @endguest
                            
                        </li>
                        <li>
                            @auth
                                <a href="{{ route('logout') }}">Logout</a>
                            @endauth
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>