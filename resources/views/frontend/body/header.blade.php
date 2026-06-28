<header class="main-header main-header-update style-one">
            <!-- header-lower -->
            <div class="side-nav">
                <div class="single-header-right sidenav-btn-box">
                    <a href="#" class="side-nav-open side-nav-opener">
                        <figure>
                            <img src="{{ asset('frontend/assets/images/icons/bar.png') }}" alt="">
                        </figure>
                    </a>
                </div>
            </div>
            <div class="header-lower">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="#"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt=""></a></figure>
                    </div>
                    <div class="menu-area">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><a href="">Home</a>
                                        <ul>
                                            <li><a href="">Home One</a></li>
                                            <li><a href="">Home Two</a></li>
                                            <li><a href="">Home Three</a></li>
                                            <li class="dropdown"><a href="">Header Style</a>
                                                <ul>
                                                    <li><a href="">Header Style 01</a></li>
                                                    <li><a href="">Header Style 02</a></li>
                                                    <li><a href="">Header Style 03</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> 

                                    <li class="dropdown"><a href="#">Page</a>
                                        <ul>
                                            <li><a href="">About Us</a></li>
                                            <li><a href="">Our Chefs</a></li>
                                            <li><a href="">Our Menu</a></li>
                                            <li><a href="">Booking Page</a></li>
                                            
                                            <li><a href="">Coming Soon</a></li>
                                            <li><a href="">My Account</a></li>
                                            <li><a href="">Reset Password</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="">Blog</a></li>
                                            <li><a href="">Blog Details</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="#">Portfolio</a>
                                        <ul>
                                            <li><a href="">Portfolio</a></li>
                                            <li><a href="">Portfolio Details</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="#">Shop</a>
                                        <ul>
                                            <li><a href="">Shop 01</a></li>
                                            <li><a href="">Shop 02</a></li>
                                            <li><a href="">Shop Details</a></li>
                                            <li><a href="">Cart Page</a></li>
                                            <li><a href="">Checkout Page</a></li> 
                                        </ul>
                                    </li>  

                                    <li class=''><a href="">Contact</a></li> 

                                    <li class=''><a href="{{ route('login') }}">Login</a></li>  
                                    <li class=''><a href="{{ route('register') }}">Register</a></li>  
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="header__right">
                        <div class="btn-box">
                            <a href="" class="theme-btn-three style1">Booking A Table</a>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="#"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt=""></a></figure>
                        </div>
                        <div class="menu-area">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>