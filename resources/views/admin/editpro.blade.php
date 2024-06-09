


@extends('admin.layout')
@section('title','Trang chủ')
@section('content')


<div id="main">
            <!-- Phần Đầu -->
            <div class="head">
                <div class="col-div-6">
                    <span style="font-size:30px;cursor:pointer; color: #342E37;" class="nav">☰ Danh Mục</span>
                    <span style="font-size:30px;cursor:pointer; color: #342E37;" class="nav2">☰ Danh Mục</span>
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

       
            <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="form_edit">
    @csrf
    @method('PUT')
                        <h1 class="title">Sửa Sản Phẩm</h1>

                        <label for="title">Tên Sản Phẩm</label>
                        <input type="text" name="title" value="{{ $product->title }}" class="input"><br>

                        <label for="category">Danh Mục</label>
                        <select name="category_id" class="input">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" @if($category->id == $product->category_id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select><br>

                        <label for="image">Hình Ảnh</label>
                        <input type="file" name="image" class="input"><br>

                        <label for="price">Giá</label>
                        <input type="text" name="price" value="{{ $product->price }}" class="input"><br>

                        <label for="description">Mô Tả</label>
                        <textarea name="description" class="input">{{ $product->description }}</textarea><br>

                        <label for="detail">Chi Tiết</label>
                        <textarea name="detail" class="input">{{ $product->detail }}</textarea><br>

                        <button class="button">Cập Nhật</button>
                        <span class="close">X</span>
</form>
        
        
        </div>

        @endsection