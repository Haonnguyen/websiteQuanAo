@extends('admin.layout')
@section('title','Trang chủ')
@section('content')
@if(session('success'))
    <div>{{ session('success') }}</div>
@endif
<div id="main">
            <!-- Phần Đầu -->
            <div class="head">
                <div class="col-div-6">
                    <span style="font-size:30px;cursor:pointer; color: #342E37;" class="nav">☰ Sản Phẩm</span>
                    <span style="font-size:30px;cursor:pointer; color: #342E37;" class="nav2">☰ Sản Phẩm</span>
                </div>

                <div class="col-div-6">
                    <div class="profile">

                        <img src="images/user.png" class="pro-img" />
                        <p>Admin </p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- Phần chính -->

            <div class="container_table">
    <div class="addnew">
        <a class="addspnew" href="{{ route('admin.addpro') }}">Thêm Sản Phẩm</a>
    </div>
    <table class="table_form">
        <tr>
            <th class="thead">#</th>
            <th class="thead">Tên sản phẩm</th>
          
            <th class="thead">Hình ảnh</th>
            <th class="thead">Giá</th>
            <th class="thead">Mô tả</th>
            <th class="thead">Chi tiết</th>
            <th class="thead">Thao Tác</th>
        </tr>

        @foreach($products as $product)
        <tr>
            <td class="tbody">{{ $product->id }}</td>
            <td class="tbody">{{ $product->title }}</td>
        
            <td class="tbody"><img src="{{ asset('images/' . $product->image) }}" alt=""></td>
            <td class="tbody">{{ $product->price }}</td>
            <td class="tbody">{{ $product->description }}</td>
            <td class="tbody">{{ $product->detail }}</td>
            <td class="tbody">
                <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Xóa</button>
                </form> - 
                
                <a href="{{ route('admin.product.edit', $product->id) }}">Sửa</a>
            </td>
        </tr>
        @endforeach

    </table>
    <div class="clearfix"></div>
</div>

           
        </div>
@endsection