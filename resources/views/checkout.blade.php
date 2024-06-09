@extends('layout')
@section('title','Giới thiệu')
@section('content')

      <!-- ...:::: Start Breadcrumb Section:::... -->
      <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">THỦ TỤC THANH TOÁN</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Trang chủ</a></li>
                                    <li><a href="shop-grid-sidebar-left.html">Giỏ hàng</a></li>
                                    <li class="active" aria-current="page">Thủ tục thanh toán</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Checkout Section:::... -->
    <div class="checkout-section">
        <div class="container">
            <div class="row">
                <!-- User Quick Action Form -->
                <div class="col-12">
                    <div class="user-actions accordion" data-aos="fade-up"  data-aos-delay="0">
                        <h3>
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            Phản hồi khách hàng?
                            <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_login" aria-expanded="true">Nhấn vào đây để đăng nhập</a>
                        </h3>
                        <div id="checkout_login" class="collapse" data-parent="#checkout_login">
                            <div class="checkout_info">
                                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing &amp; Shipping section.</p>
                                <form action="#">
                                    <div class="form_group default-form-box">
                                        <label>Username or email <span>*</span></label>
                                        <input type="text">
                                    </div>
                                    <div class="form_group default-form-box">
                                        <label>Password <span>*</span></label>
                                        <input type="password">
                                    </div>
                                    <div class="form_group group_3 default-form-box">
                                        <button class="btn btn-md btn-black-default-hover" type="submit">Login</button>
                                        <label class="checkbox-default">
                                            <input type="checkbox">
                                            <span>Remember me</span>
                                        </label>
                                    </div>
                                    <a href="#">Lost your password?</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="user-actions accordion" data-aos="fade-up"  data-aos-delay="200">
                        <h3>
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            Returning customer?
                            <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_coupon" aria-expanded="true">Click here to enter your code</a>

                        </h3>
                        <div id="checkout_coupon" class="collapse checkout_coupon" data-parent="#checkout_coupon">
                            <div class="checkout_info">
                                <form action="#">
                                    <input placeholder="Coupon code" type="text">
                                    <button class="btn btn-md btn-black-default-hover" type="submit">Apply coupon</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Quick Action Form -->
            </div>






























            <!-- Start User Details Checkout Form -->
            <div class="checkout_form" data-aos="fade-up"  data-aos-delay="400">
                <form action="{{ route('allCheckout') }}" method="post">
                @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                
                                    <h3>CHI TIẾT THANH TOÁN</h3>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="default-form-box">
                                                <label>Tên đầu tiên <span>*</span></label>
                                                <input type="text" name="firstName">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="default-form-box">
                                                <label>Họ <span>*</span></label>
                                                <input type="text" name="lastName">
                                            </div>
                                        </div>
                                       
                                      
                                        <div class="col-12">
                                            <div class="default-form-box">
                                                <label>Địa chỉ giao hàng <span>*</span></label>
                                                <input placeholder="Nhập địa chỉ" name="address" type="text">
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="col-lg-6">
                                            <div class="default-form-box">
                                                <label>Điện thoại<span>*</span></label>
                                                <input type="text" name="phone">
                                            </div>
                                        </div>
                                     <!--    <div class="col-lg-6">
                                            <div class="default-form-box">

                                                
                                            <label> Địa chỉ email  <span>*</span></label>
                                                
                                                        
                                                <input type="text" name="email">
                                            </div>
                                        </div> -->
                                      
                                    </div>
                                
                            </div>




                    <div class="col-lg-6 col-md-6">
                    @if(count($products) > 0)
                            <h3>ĐƠN HÀNG CỦA BẠN</h3>
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th>Tổng cộng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $allTotal = 0;
                                        @endphp
                                        @foreach($products as $item)
                                        @php
                                            $total = $item->price * Session::get('cart')[$item->id] ;
                                            $allTotal += $total;
                                        @endphp
                                        <tr>
                                            <td> {{ $item->title }} <strong> × {{ Session::get('cart')[$item->id] }}</strong></td>
                                            <td>{{ number_format($total) }} VND</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                       
                                        <tr class="order_total">
                                            <th>Tổng đơn hàng</th>
                                            <td><strong> {{ number_format($allTotal) }} VND</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment_method">
                                <div class="panel-default">
                                    <label class="checkbox-default" for="currencyCod" data-bs-toggle="collapse" data-bs-target="#methodCod">
                                        <input type="checkbox" id="currencyCod">
                                        <span>Thanh Toán Khi Giao Hàng</span>
                                    </label>

                                   
                                </div>
                                @else
                                    <p>Giỏ hàng đang trống</p>
                                @endif
                                <div class="order_button pt-3">
                                    <button class="btn btn-md btn-black-default-hover" onclick="return checkOut()" type="submit">Tiếp tục</button>
                                </div>
                            </div>
                        
                    </div>

                    </div>
            </form>





          



                </div>
            </div> <!-- Start User Details Checkout Form -->
        </div>
    </div><!-- ...:::: End Checkout Section:::... -->


    

    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <div class="order_button pt-3">
            <button class="btn btn-md btn-black-default-hover" onclick="return checkOut()" type="submit">Tiếp tục</button>
            <a href="{{ route('home') }}" class="btn btn-md btn-black-default-hover">Quay về trang chủ</a>
        </div>


@endsection