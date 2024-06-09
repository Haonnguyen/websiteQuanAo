
    <!-- Start Header Area -->
    <header class="header-section d-none d-xl-block">
        <div class="header-wrapper">
            <div class="header-bottom header-bottom-color--golden section-fluid sticky-header sticky-color--golden">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center justify-content-between">
                             <!-- Start Header Logo -->
                            <div class="header-logo">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo/logo_black.png" alt=""></a>
                                </div>
                            </div>
                            <!-- End Header Logo -->

                            <!-- Start Header Main Menu -->
                            <div class="main-menu menu-color--black menu-hover-color--golden">
                                <nav>
                                    <ul>
                                        <li class="has-dropdown">
                                            <a class="active main-menu-link" href="/">TRANG CHỦ </a>
                                            <!-- Sub Menu -->
                                            
                                        </li>
                                        <li class="has-dropdown has-megaitem">
                                            <a href="/shop">SẢN PHẨM </a>
                                            <!-- Mega Menu -->
                                        </li>
                                       
                                        <li>
                                            <a href="about-us.html">Giới thiệu</a>
                                        </li>
                                        <li>
                                            <a href="contact-us.html">Liên hệ</a>
                                        </li>
                                        <li>
                                            <a href="/tin">Tin tức</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> 
                            <!-- End Header Main Menu Start -->
                            
                            <!-- Start Header Action Link -->
                            <ul class="header-action-link action-color--black action-hover-color--golden">
                                
                                <li>
                                    <a href="/cart" >
                                        <i class="icon-bag"></i>
                                        <span class="item-count">3</span>
                                    </a>
                                </li>
                                @if(Auth::check())
    <li>
        <a href="/myaccount">
       
            {{ Auth::user()->username }}
        </a>
    </li>
@else
    <li>
        <a href="/loginForm">
            <i class="icon-user"></i>
        </a>
    </li>
@endif

                                <li>
                                    <a href="#search">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                
                            </ul>
                            <!-- End Header Action Link -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
  


   
       
     

       


    

  