


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

       
                            <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data" class="form_add">
                                        @csrf
                                        <h1 class="title">Thêm Sản Phẩm</h1>

                                        <label for="">Tên Sản Phẩm</label>
                                        <input type="text" name="title" value="{{ old('title') }}" placeholder="Nhập tên danh mục.." class="input"><br>
                                        

                                        <label for="category">Danh Mục</label>
                                        <select name="category_id" class="input">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select><br>

                                        <label for="">Hình Ảnh</label>
                                        <input type="file" name="image" class="input"><br>
                                        
                                        <label for="">Giá</label>
                                        <input type="text" name="price" value="{{ old('price') }}" placeholder="Nhập giá sản phẩm.." class="input"><br>
                                        
                                        <label for="description">Mô Tả</label>
                                        <textarea name="description" placeholder="Nhập mô tả..." class="input">{{ old('description') }}</textarea><br>

                                        <label for="detail">Chi Tiết</label>
                                        <textarea name="detail" placeholder="Nhập chi tiết sản phẩm..." class="input">{{ old('detail') }}</textarea><br>
                                        <button class="button">Thêm mới</button>
                                        <span class="close">X</span>
                        </form>

        
        
        </div>

        @endsection