@extends('layout')
@section('tilte', 'My Acount')

@section('content')



<style>
    .custom-table {
    width: 100%;
    border-collapse: collapse;
}

.custom-table th,
.custom-table td {
    border: 1px solid #ddd;
    padding: 8px;
}

.custom-table th {
    text-align: left;
    background-color: #f2f2f2;
}

.custom-table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

.custom-table tbody tr:hover {
    background-color: #ddd;
}

.custom-table img {
    max-width: 100px;
}

</style>






<section class="main_content_area">
    <div class="account_dashboard">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <!-- Nav tabs -->
                <div class="dashboard_tab_button">
                    <ul role="tablist" class="nav flex-column dashboard-list">
                        <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Thông tin người dùng</a></li>
            
                        <li><a href="{{ route('logout') }}" class="nav-link" id="logoutLink" onclick="return checkLogout()">Đăng xuất</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-12 col-md-9 col-lg-9">
                <!-- Tab panes -->
                <div class="tab-content dashboard_content">
                    <div class="tab-pane fade show active" id="dashboard">
                        <table class="custom-table">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng cộng</th>
                                    <th>Trạng thái</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                    @foreach($order->orderdetails as $orderDetail)
                                        <tr>
                                            <td>{{ $orderDetail->products->title }}</td>
                                            <td><img src="{{ asset('images/product/default/home-1/' . $orderDetail->products->image) }}" alt="{{ $orderDetail->products->title }}" style="max-width: 100px;"></td>
                                            <td>{{ number_format($orderDetail->price) }} VND</td>
                                            <td>{{ $orderDetail->quantity }}</td>
                                            <td>{{ number_format($orderDetail->quantity * $orderDetail->price) }} VND</td>
                                           
                                            <td>{{ $order->status }}</td>
                                            <td>
                                                @if ($order->status != 'Đã hủy')
                                                    <form action="{{ route('cancelOrder', $order->id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Hủy đơn hàng</button>
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

        </div>
    </div>
</section>
@endsection