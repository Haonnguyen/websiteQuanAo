@extends('layout')
@section('title','Giới thiệu')
@section('content')
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="breadcrumb-section breadcrumb-bg-color--golden">

        <div class="breadcrumb-wrapper">
            <div class="container">
            
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">ĐĂNG NHẬP</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Trang chủ</a></li>
                      
                                    <li class="active" aria-current="page">Đăng nhập</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

     <!-- ...:::: Start Customer Login Section :::... -->
     <div class="customer-login">
        <div class="container">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form" data-aos="fade-up"  data-aos-delay="0">




                    <h3>Đăng Nhập</h3>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="default-form-box">
                                <label>Tên người dùng hoặc email <span>*</span></label>
                                <input type="text" name="username">
                            </div>
                            <div class="default-form-box">
                                <label>Mật khẩu  <span>*</span></label>
                                <input type="password" name="password">
                            </div>
                            <div class="login_submit">
                                <button class="btn btn-md btn-black-default-hover mb-4" type="submit">Đăng nhập</button>
                                <label class="checkbox-default mb-4" for="offer">
                                    <input type="checkbox" id="offer">
                                    <span>Nhớ Tôi</span>
                                </label>
                                <a href="{{ route('password.request') }}">Quên mật khẩu</a>
                            </div>
                        </form>

                    </div>
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register" data-aos="fade-up"  data-aos-delay="200">


                    
                        <h3>Đăng Ký</h3>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="default-form-box">
                                <label>Username <span>*</span></label>
                                <input type="text" name="username">
                            </div>
                            <div class="default-form-box">
                                <label>Địa chỉ email <span>*</span></label>
                                <input type="text" name="email">
                            </div>
                            <div class="default-form-box">
                                <label>Mật khẩu<span>*</span></label>
                                <input type="password" name="password">
                            </div>
                            <div class="login_submit">
                                <button class="btn btn-md btn-black-default-hover" type="submit">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div> <!-- ...:::: End Customer Login Section :::... -->

    <!-- Start Footer Section -->
    <footer class="footer-section footer-bg section-top-gap-100">
        <div class="footer-wrapper">
        <!-- Start Footer Top -->
        <div class="footer-top">
        <div class="container">
            <div class="row mb-n6">
                <div class="col-lg-3 col-sm-6 mb-6">
                    <!-- Start Footer Single Item -->
                    <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"  data-aos-delay="0">
                        <h5 class="title">INFORMATION</h5>
                        <ul class="footer-nav">
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                            <li><a href="#">Returns</a></li>
                        </ul>
                    </div>
                    <!-- End Footer Single Item -->
                </div>
                <div class="col-lg-3 col-sm-6 mb-6">
                    <!-- Start Footer Single Item -->
                    <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"  data-aos-delay="200">
                        <h5 class="title">MY ACCOUNT</h5>
                        <ul class="footer-nav"> 
                            <li><a href="my-account.html">My account</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="faq.html">Frequently Questions</a></li>
                            <li><a href="#">Order History</a></li>
                        </ul>
                    </div>
                    <!-- End Footer Single Item -->
                </div>
                <div class="col-lg-3 col-sm-6 mb-6">
                    <!-- Start Footer Single Item -->
                    <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"  data-aos-delay="400">
                        <h5 class="title">CATEGORIES</h5>
                        <ul class="footer-nav">
                            <li><a href="#">Decorative</a></li>
                            <li><a href="#">Kitchen utensils</a></li>
                            <li><a href="#">Chair & Bar stools</a></li>
                            <li><a href="#">Sofas and Armchairs</a></li>
                            <li><a href="#">Interior lighting</a></li>
                        </ul>
                    </div>
                    <!-- End Footer Single Item -->
                </div>
                <div class="col-lg-3 col-sm-6 mb-6">
                    <!-- Start Footer Single Item -->
                    <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"  data-aos-delay="600">
                        <h5 class="title">ABOUT US</h5>
                        <div class="footer-about">
                            <p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart.</p>
                            
                            <address class="address">
                                <span>Address: 4710-4890 Breckinridge St, Fayettevill</span> 
                                <span>Email: yourmail@mail.com</span>    
                            </address>
                        </div>
                    </div>
                    <!-- End Footer Single Item -->
                </div>
            </div>
        </div>
        </div>
        <!-- End Footer Top -->

        <!-- Start Footer Center -->
        <div class="footer-center">
            <div class="container">
                <div class="row mb-n6">
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-6">
                        <div class="footer-social" data-aos="fade-up"  data-aos-delay="0">
                            <h4 class="title">FOLLOW US</h4>
                            <ul class="footer-social-link">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-6 mb-6">
                        <div class="footer-newsletter" data-aos="fade-up"  data-aos-delay="200">
                            <h4 class="title">DON'T MISS OUT ON THE LATEST</h4>
                            <div class="form-newsletter">
                                <form action="#" method="post">
                                    <div class="form-fild-newsletter-single-item input-color--golden">
                                        <input type="email" placeholder="Your email address..." required>
                                        <button type="submit">SUBSCRIBE!</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Center -->

        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row justify-content-between align-items-center align-items-center flex-column flex-md-row mb-n6">
                    <div class="col-auto mb-6">
                        <div class="footer-copyright" >
                            <p> COPYRIGHT &copy; <a href="https://hasthemes.com/" target="_blank">HasThemes</a>. ALL RIGHTS RESERVED.</p>
                        </div>
                    </div>
                    <div class="col-auto mb-6">
                        <div class="footer-payment">
                            <div class="image">
                                <img src="assets/images/company-logo/payment.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        </div>
    </footer>
    <!-- End Footer Section -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->
    <div class="modal fade" id="modalAddcart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close modal-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="modal-add-cart-product-img">
                                            <img class="img-fluid" src="assets/images/product/default/home-1/default-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="modal-add-cart-info"><i class="fa fa-check-square"></i>Added to cart successfully!</div>
                                        <div class="modal-add-cart-product-cart-buttons">
                                            <a href="cart.html">View Cart</a>
                                            <a href="checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 modal-border">
                                <ul class="modal-add-cart-product-shipping-info">
                                    <li> <strong><i class="icon-shopping-cart"></i> There Are 5 Items In Your Cart.</strong></li>
                                    <li> <strong>TOTAL PRICE: </strong> <span>$187.00</span></li>
                                    <li class="modal-continue-button"><a href="#" data-bs-dismiss="modal">CONTINUE SHOPPING</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Add cart -->
    

@endsection