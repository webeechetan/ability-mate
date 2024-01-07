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
                    <a wire:navigate href="{{ route('home') }}" class="active">Home</a>
                </li>
                @auth
                    <li>
                        <a wire:navigate href="{{ route('members-list') }}">Members</a>
                    </li>
                @endauth

                @guest
                    <li>
                        <a wire:navigate href="{{ route('login') }}">Login</a>
                    </li>
                    <li>
                        <a wire:navigate href="{{ route('register') }}">Register</a>
                    </li>
                @endguest
                @auth
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
                                    <a href="{{ route('logout') }}">Logout</a>
                                @endauth
                            </li>
                        </ul>
                    </li>
                @endauth

            </ul>
            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>