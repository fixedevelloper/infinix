<!-- ===============>> Header section start here <<================= -->
<header class="header-section header-section--style3">
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset('images/logo.svg')}}" alt="logo">
                    </a>
                </div>
                <div class="header-content d-flex align-items-center gap-4">
                    <div class="menu-area">
                        <ul class="menu menu--style2">
                            <li>
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{route('register')}}">REGISTRATION</a>
                            </li>
                            <li>
                                <a href="{{route('documentation')}}">DOCUMENTATION</a>
                            </li>
                            <li>
                                <a href="#">ABOUT US</a>
                            </li>
                        </ul>

                    </div>
                    <div class="header-action">
                        <div class="menu-area">
                            <div class="header-btn">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Connect
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark">
                                        <li><a class="dropdown-item active" href="#" onclick="connect()">MetaMask</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" id="connect-button">all wallet</a></li>

                                    </ul>
                                </div>
                                {{--<a href="#" onclick="connect()" class="trk-btn trk-btn--border trk-btn--primary">
                                    <span>Connect</span>
                                </a>--}}
                            </div>

                            <!-- toggle icons -->
                            <div class="header-bar d-lg-none header-bar--style2">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ===============>> Header section end here <<================= -->


