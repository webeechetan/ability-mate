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
                    <a href="community.html">Community</a>
                </li>
                <li>
                    <a href="membership.html">Membership</a>
                </li>
                <li>
                    <a href="shop2.html">Shop</a>
                </li>
                <li>
                    <a href="#">pages</a>
                    <ul class="submenu">
                        <li>
                            <a href="user-setting.html">User Panel</a>
                        </li>
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="community-single.html">Community Single</a>
                        </li>
                        <li>
                            <a href="members.html">Members</a>
                        </li>
                        <li>
                            <a href="shop3.html">Shop sidebar</a>
                        </li>
                        <li>
                            <a href="single-profile.html">Single Profile One</a>
                        </li>
                        <li>
                            <a href="single-profile2.html">Single Profile Two</a>
                        </li>
                        <li>
                            <a href="single-profile3.html">Single Profile Three</a>
                        </li>
                        <li>
                            <a href="single-shope.html">Shop Details</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="404.html">404</a>
                        </li>
                        <li>
                            <a href="503.html">503</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">blog</a>
                    <ul class="submenu">
                        <li>
                            <a href="blog.html">Blog</a>
                        </li>
                        <li>
                            <a href="blog-details.html">Blog Single</a>
                        </li>
                    </ul>
                </li>
                <li class="separator">
                    <span>|</span>
                </li>
                <li>
                    <div class="serch-icon">
                        <i class="fas fa-search"></i>
                    </div>
                </li>
                <li>
                    <div class="language-select">
                        <select class="select-bar">
                            <option value="">EN</option>
                            <option value="">IN</option>
                            <option value="">BN</option>
                        </select>
                    </div>
                </li>
                <li class="user-profile">
                    <a href="#">
                        <img src="{{ asset('webiste') }}/assets/images/user-demo.png" alt="">
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="#">Profile</a>
                        </li>
                        <li>
                            <a wire:navigate href="{{ route('register') }}">Register</a>
                        </li>
                        <li>
                            <a href="#">Logout</a>
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