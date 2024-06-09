


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

       
            <form action="{{ route('admin.catalog.store') }}" method="POST" class="form_add">
            @csrf
                <h1 class="title">Thêm Danh Mục</h1>
                <label for="">Tên danh mục</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Nhập tên danh mục.." class="input"><br>
             
           

                <button class="button">Thêm mới</button>
                <span class="close">X</span>
            </form>
        
        
        </div>

        @endsection