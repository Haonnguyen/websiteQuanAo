@extends('layout')
@section('title','Trang chủ')
@section('content')

    

    <!-- Start Offcanvas Search Bar Section -->
   
    <!-- End Offcanvas Search Bar Section -->

    <!-- Offcanvas Overlay -->
    <div class="offcanvas-overlay"></div>

    <!-- Start Hero Slider Section-->
    <div class="hero-slider-section">
        <!-- Slider main container -->
        <div class="hero-slider-active swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Start Hero Single Slider Item -->
                <div class="hero-single-slider-item swiper-slide">
                    <!-- Hero Slider Image -->
                    <div class="hero-slider-bg">
                        <img src="images/hero-slider/home-1/hero-slider-1.jpg" alt="">
                    </div>
                    <!-- Hero Slider Content -->
                    <div class="hero-slider-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="hero-slider-content">
                                        <h4 class="subtitle">Sản phẩm mới</h4>
                                        <h2 class="title">Ghế đệm<br>  2024 </h2>
                                        <a href="product-details-default.html" class="btn btn-lg btn-outline-golden">Xem ngay </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Hero Single Slider Item -->
                <!-- Start Hero Single Slider Item -->
                <div class="hero-single-slider-item swiper-slide">
                    <!-- Hero Slider Image -->
                    <div class="hero-slider-bg">
                        <img src="images/hero-slider/home-1/hero-slider-2.jpg" alt="">
                    </div>
                    <!-- Hero Slider Content -->
                    <div class="hero-slider-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="hero-slider-content">
                                        <h4 class="subtitle">Sản phẩm mới</h4>
                                        <h2 class="title">Ghế da <br> phong cách mới </h2>
                                        <a href="product-details-default.html" class="btn btn-lg btn-outline-golden">Xem ngay </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Hero Single Slider Item -->
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination active-color-golden"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev d-none d-lg-block"></div>
            <div class="swiper-button-next d-none d-lg-block"></div>
        </div>
    </div> 
    <!-- End Hero Slider Section-->


    <!-- Start Product Default Slider Section -->
    <div class="product-default-slider-section section-top-gap-100 section-fluid">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up"  data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3 class="section-title">SẢN PHẨM MỚI 2024</h3>
                                <p>Đặt hàng ngay để nhận ưu đãi & quà tặng độc quyền</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div class="product-wrapper" data-aos="fade-up"  data-aos-delay="200">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider-default-2rows default-slider-nav-arrow">
                            <!-- Slider main container -->
                            <div class="swiper-container product-default-slider-4grid-2row">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">













                                     @foreach($newProducts as $pro)       

                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="images/product/default/home-1/{{$pro->image}}" alt="">
                                            
                                            </a>
                                            <div class="tag">
                                                <span>sale</span>
                                            </div>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="{{ route('detail', ['id' => $pro->id]) }}" >Xem chi tiết</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">{{$pro->title}}</a></h6>
                                                
                                            </div>
                                            <div class="content-right">
                                                <span class="price">{{$pro->price}}VND</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                               
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->


                                        @endforeach
















                                    
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
     <!-- End Product Default Slider Section -->
     
    <!-- Start Banner Section -->
    <div class="banner-section section-top-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <!-- Start Banner Single Item -->
                    <div class="banner-single-item banner-style-3 banner-animation img-responsive" data-aos="fade-up"  data-aos-delay="0">
                        <div class="image">
                            <img class="img-fluid" src="images/banner/banner-style-3-img-1.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3 class="title">Bộ sưu tập cơ bản nội thất hiện đại</h3>
                            <h5 class="sub-title">CHÚNG TÔI THIẾT KẾ NGÔI NHÀ CỦA BẠN ĐẸP HƠN</h5>
                            <a href="product-details-default.html" class="btn btn-lg btn-outline-golden icon-space-left"><span class="d-flex align-items-center">Khám phá ngay <i class="ion-ios-arrow-thin-right"></i></span></a>
                        </div>
                    </div> 
                    <!-- End Banner Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Section -->

    <!-- Start Product Default Slider Section -->
    <div class="product-default-slider-section section-top-gap-100 section-fluid section-inner-bg">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up"  data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3  class="section-title">Sản phẩm bán chạy</h3>
                                <p>Top các sản phẩm được người dùng chọn hàng đầu 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div class="product-wrapper" data-aos="fade-up"  data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider-default-1row default-slider-nav-arrow">
                            <!-- Slider main container -->
                            <div class="swiper-container product-default-slider-4grid-1row">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- End Product Default Single Item -->









                                    @foreach ($bestsellProducts as $bestsell)

                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="images/product/default/home-1/{{$bestsell->image}}" alt="">
                                           
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="{{ route('detail', ['id' => $bestsell->id]) }}" data-bs-toggle="modal" data-bs-target="#modalAddcart">Xem chi tiết</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">{{$bestsell->title}}</a></h6>
                                                
                                            </div>
                                            <div class="content-right">
                                                <span class="price">{{$bestsell->price}}VND</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                 
                                    @endforeach





                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- End Product Default Slider Section -->


  

   <!-- Start Instagramr Section -->
   <div class="instagram-section section-top-gap-100 section-inner-bg">
       <div class="instagram-wrapper" data-aos="fade-up"  data-aos-delay="0">
           <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="instagram-box">
                            <div id="instagramFeed" class="instagram-grid clearfix">
                                <a href="https://www.instagram.com/p/CCFOZKDDS6S/" target="_blank" class="instagram-image-link float-left banner-animation"><img src="images/instagram/instagram-1.jpg" alt=""></a>
                                <a href="https://www.instagram.com/p/CCFOYDNjWF5/" target="_blank" class="instagram-image-link float-left banner-animation"><img src="images/instagram/instagram-2.jpg" alt=""></a>
                                <a href="https://www.instagram.com/p/CCFOXH6D-zQ/" target="_blank" class="instagram-image-link float-left banner-animation"><img src="images/instagram/instagram-3.jpg" alt=""></a>
                                <a href="https://www.instagram.com/p/CCFOVcrDDOo/" target="_blank" class="instagram-image-link float-left banner-animation"><img src="images/instagram/instagram-4.jpg" alt=""></a>
                                <a href="https://www.instagram.com/p/CCFOUajjABP/" target="_blank" class="instagram-image-link float-left banner-animation"><img src="images/instagram/instagram-5.jpg" alt=""></a>
                                <a href="https://www.instagram.com/p/CCFOS2MDmjj/" target="_blank" class="instagram-image-link float-left banner-animation"><img src="images/instagram/instagram-6.jpg" alt=""></a>
                            </div>
                            <div class="instagram-link">
                                <h5><a href="https://www.instagram.com/myfurniturecom/" target="_blank" rel="noopener noreferrer">SẢN PHẨM NỔI BẬT</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
   </div>
   <!-- End Instagramr Section -->
    

@endsection