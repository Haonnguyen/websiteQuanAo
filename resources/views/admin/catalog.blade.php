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

    <div class="container_table">
        <div class="addnew">
            <a class="addspnew" href="{{ route('admin.addcata') }}">Thêm Danh Mục</a>
        </div>
        <table class="table_form">
            <tr>
                <th class="thead">#</th>
                <th class="thead">Tên Danh Mục</th>
                <th class="thead">Thao Tác</th>
            </tr>

            @foreach($categories as $category)
                <tr>
                    <td class="tbody">{{ $category->id }}</td>
                    <td class="tbody">{{ $category->name }}</td>
                    <td class="tbody">
                        <form id="delete-form-{{ $category->id }}" action="{{ route('admin.delete', ['id' => $category->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Xóa</button>
                        </form>
                        <button><a class="tbody" href="{{ route('admin.editcata', ['id' => $category->id]) }}">Sửa</a></button>
                    </td>
                </tr>
            @endforeach

        </table>
        <div class="clearfix"></div>
    </div>
</div>

@endsection
