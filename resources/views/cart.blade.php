@extends('layout')
@section('title','Sản phẩm')
@section('content')


<style>
   
    /* Base styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
    color: #333;
    margin: 0;
    padding: 0;
}

/* Breadcrumb Section */
.breadcrumb-section {
    background-color: #d4af37;
    padding: 20px 0;
}

.breadcrumb-title {
    text-align: center;
    font-size: 24px;
    color: #fff;
    margin: 0;
}

.breadcrumb-nav {
    text-align: center;
    margin-top: 10px;
}

.breadcrumb-nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.breadcrumb-nav li {
    display: inline;
    margin-right: 5px;
}

.breadcrumb-nav a {
    text-decoration: none;
    color: #000;
    transition: color 0.3s;
}

.breadcrumb-nav a:hover {
    color: #d4af37;
}

.breadcrumb-nav .active {
    color: #d4af37;
}

/* Cart Section */
.full-width-cart-form {
    padding: 40px 0;
    width: 100%;
}

.full-width-cart-form .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.table_desc {
    margin: 20px 0;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.table_page.table-responsive {
    width: 100%;
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

thead {
    background-color: #d4af37;
    color: #fff;
}

th, td {
    padding: 10px;
    text-align: left;
}

.product_remove a {
    color: #e74c3c;
    text-decoration: none;
    font-size: 20px;
    transition: color 0.3s;
}

.product_remove a:hover {
    color: #c0392b;
}

.product_thumb img {
    width: 80px;
    height: auto;
}

.quantity {
    width: 50px;
}

.cart_submit {
    text-align: right;
}

.btn-golden {
    background-color: #d4af37;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-golden:hover {
    background-color: #b5912e;
}

/* Coupon and Checkout Section */
.coupon_area {
    margin-top: 40px;
}

.coupon_code {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.coupon_code h3 {
    margin: 0 0 10px;
}

.coupon_code p {
    margin: 0 0 10px;
}

.coupon_code input {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.cart_subtotal {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
}

.cart_amount {
    font-weight: bold;
}

.checkout_btn {
    text-align: right;
}

@media (max-width: 768px) {
    .full-width-cart-form .container {
        padding: 0 10px;
    }

    .coupon_code {
        margin-bottom: 20px;
    }
}



</style>

<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">GIỎ HÀNG</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="index.html">Trang chủ</a></li>
                                <li><a href="shop-grid-sidebar-left.html">Sản phẩm</a></li>
                                <li class="active" aria-current="page">Giỏ hàng</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @if(count($products) > 0)
  
       
    <form class="full-width-cart-form" action="{{ route('checkout') }}" method="post">
    @csrf
    <div class="cart-table-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="table_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product_remove">Xóa</th>
                                        <th class="product_thumb">Hình ảnh</th>
                                        <th class="product_name">Sản phẩm</th>
                                        <th class="product_price">Giá</th>
                                        <th class="product_quantity">Số lượng</th>
                                        <th class="product_total">Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $allTotal = 0;
                                    @endphp
                                    @foreach($products as $item)
                                    @php
                                    $total = $item->price * Session::get('cart')[$item->id];
                                    $allTotal += $total;
                                    @endphp
                                    <tr>
                                        <td class="product_remove"><a href="{{ route('delCart', ['id' => $item->id]) }}"><i class="fa fa-trash-o"></i></a></td>
                                        <td class="product_thumb"><a href=""><img src="{{ asset('images/product/default/home-1/' .$item->image) }}" alt=""></a></td>
                                        <td class="product_name"><a href="product-details-default.html">{{ $item->title }}</a></td>
                                        <td class="product_price">{{ number_format($item->price) }} VND</td>
                                        <td class="product_quantity">
                                            <label>Số lượng</label>
                                            <input min="1" max="10" name="product_id[{{ $item->id }}]" value="{{ Session::get('cart')[$item->id] }}" type="number" class="quantity" data-id="{{ $item->id }}">
                                        </td>
                                        <td class="product_total">{{ number_format($total) }} VND</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="cart_submit">
                            <button class="btn btn-md btn-golden update-cart" type="button">Cập nhật đơn hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="coupon_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="coupon_code left" data-aos="fade-up" data-aos-delay="200">
                        <h3>Coupon</h3>
                        <div class="coupon_inner">
                            <p>Nhập mã giảm giá của bạn nếu có.</p>
                            <input class="mb-2" placeholder="Coupon code" type="text">
                            <button type="submit" class="btn btn-md btn-golden">Áp dụng</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="coupon_code right" data-aos="fade-up" data-aos-delay="400">
                        <h3>Tổng đơn hàng</h3>
                        <div class="coupon_inner">
                            <div class="cart_subtotal">
                                <p>Tạm tính</p>
                                <p class="cart_amount">{{ number_format($allTotal) }} VND</p>
                            </div>
                            <div class="cart_subtotal">
                                <p>Tổng tiền</p>
                                <p class="cart_amount">{{ number_format($allTotal) }} VND</p>
                            </div>
                            <div class="checkout_btn">
                                <a href="/checkout" class="btn btn-md btn-golden">Tiếp tục thanh toán</a>
                            </div>
                            @else
                            <p> Đơn hàng trống ! Vui lòng quay lại <a href="/home">trang chủ</a> để tiếp tục mua hàng</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

        
       


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.quantity').on('change', function() {
            var id = $(this).data('id');
            var quantity = $(this).val();
            if (quantity < 1 || quantity > 10) {
                alert('Số lượng phải từ 1 đến 10.');
                $(this).val(Math.min(Math.max(quantity, 1), 10));
                return;
            }

            $.ajax({
                url: '{{ route("updateCart") }}',
                method: 'post',
                data: {
                    _token: '{{ csrf_token() }}',
                    product_id: id,
                    quantity: quantity
                },
                success: function(response) {
                    if (response.success) {
                        location.reload();
                    }
                }
            });
        });

        $('.update-cart').on('click', function() {
            $('.quantity').each(function() {
                var id = $(this).data('id');
                var quantity = $(this).val();
                if (quantity < 1 || quantity > 10) {
                    alert('Số lượng phải từ 1 đến 10.');
                    $(this).val(Math.min(Math.max(quantity, 1), 10));
                    return;
                }

                $.ajax({
                    url: '{{ route("updateCart") }}',
                    method: 'post',
                    data: {
                        _token: '{{ csrf_token() }}',
                        product_id: id,
                        quantity: quantity
                    },
                    success: function(response) {
                        if (response.success) {
                            location.reload();
                        }
                    }
                });
            });
        });
    });
</script>
@endsection
