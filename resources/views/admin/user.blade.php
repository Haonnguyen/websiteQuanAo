@extends('admin.layout')
@section('title','Trang chủ')
@section('content')

<div id="main">
            <!-- Phần Đầu -->
            <div class="head">
                <div class="col-div-6">
                    <span style="font-size:30px;cursor:pointer; color: #342E37;" class="nav">☰ Thành viên</span>
                    <span style="font-size:30px;cursor:pointer; color: #342E37;" class="nav2">☰ Thành viên</span>
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
                    <a class="addspnew" href="#">Thêm Thành viên</a>
                </div>
                <table class="table_form">
                    <tr>
                        <th class="thead">#</th>
                        <th class="thead">Tên đăng nhập</th>
                        <th class="thead">Họ và tên</th>
                        <th class="thead">Email</th>
                        <th class="thead">Hình ảnh</th>
                        <th class="thead">Thao Tác</th>
                    </tr>
                    <tr>
                        <td class="tbody">1</td>
                        <td class="tbody">username 01</td>
                        <td class="tbody">Thanh vien 1</td>
                        <td class="tbody">thanhvien1@gmail.com</td>
                        <td class="tbody"><img src="images/topsp1.webp" alt=""></td>
                        <td class="tbody"><a href="#"> Xóa</a> - <a href="#">Sửa</a></td>
                    </tr>
                    <tr>
                        <td class="tbody">1</td>
                        <td class="tbody">username 01</td>
                        <td class="tbody">Thanh vien 1</td>
                        <td class="tbody">thanhvien1@gmail.com</td>
                        <td class="tbody"><img src="images/topsp1.webp" alt=""></td>
                        <td class="tbody"><a href="#"> Xóa</a> - <a href="#">Sửa</a></td>
                    </tr>
                    <tr>
                        <td class="tbody">1</td>
                        <td class="tbody">username 01</td>
                        <td class="tbody">Thanh vien 1</td>
                        <td class="tbody">thanhvien1@gmail.com</td>
                        <td class="tbody"><img src="images/topsp1.webp" alt=""></td>
                        <td class="tbody"><a href="#"> Xóa</a> - <a href="#">Sửa</a></td>
                    </tr>
                    <tr>
                        <td class="tbody">1</td>
                        <td class="tbody">username 01</td>
                        <td class="tbody">Thanh vien 1</td>
                        <td class="tbody">thanhvien1@gmail.com</td>
                        <td class="tbody"><img src="images/topsp1.webp" alt=""></td>
                        <td class="tbody"><a href="#"> Xóa</a> - <a href="#">Sửa</a></td>
                    </tr>
                    <tr>
                        <td class="tbody">1</td>
                        <td class="tbody">username 01</td>
                        <td class="tbody">Thanh vien 1</td>
                        <td class="tbody">thanhvien1@gmail.com</td>
                        <td class="tbody"><img src="images/topsp1.webp" alt=""></td>
                        <td class="tbody"><a href="#"> Xóa</a> - <a href="#">Sửa</a></td>
                    </tr>

                </table>
                <div class="clearfix"></div>
            </div>
            <form action="" class="forms">
                <h1 class="title">Nhập Thành Viên</h1>
                <label for="">Tên đăng nhập</label>
                <input type="text" name="username" placeholder="Nhập tên đăng nhập.." class="input"><br>
                <label for="">Mật khẩu</label>
                <input type="password" name="password" placeholder="Nhập mật khẩu.." class="input"><br>
                <label for="">Họ tên</label>
                <input type="text" name="name" placeholder="Nhập họ tên.." class="input"><br>
                <label for="">Hình ảnh</label>
                <input type="file" name="image" class="input"><br>
                <label for="">Số điện thoại</label>
                <input type="text" name="phone" placeholder="Nhập số điện thoại.." class="input"><br>
                <label for="">Email</label>
                <input type="email" name="email" placeholder="Nhập email.." class="input"><br>
                <button class="button">Thêm mới</button>
                <span class="close">X</span>
            </form>
        </div>
			<div class="head">
				<div class="col-div-6">
					<span style="font-size:30px;cursor:pointer; color: #342E37;" class="nav">☰ Bảng Điều Khiển</span>
					<span style="font-size:30px;cursor:pointer; color: #342E37;" class="nav2">☰ Bảng Điều Khiển</span>
				</div>

				<div class="col-div-6">
					<div class="profile">

						<img src="images/user.png" class="pro-img" />
						<p>Admin </p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="clearfix"></div>
			<br />

			<div class="col-div-3">
				<div class="box">
					<p>67<br /><span>Danh Mục</span></p>
					<i class="fa fa-folder-open box-icon"></i>
				</div>
			</div>
			<div class="col-div-3">
				<div class="box">
					<p>88<br /><span>Sản Phẩm</span></p>
					<i class="fa fa-folder-plus box-icon"></i>
				</div>
			</div>
			<div class="col-div-3">
				<div class="box">
					<p>99<br /><span>Đơn Hàng</span></p>
					<i class="fa fa-shopping-bag box-icon"></i>
				</div>
			</div>
			<div class="col-div-3">
				<div class="box">
					<p>$1065<br /><span>Tổng</span></p>
					<i class="fa fa-sack-dollar box-icon"></i>
				</div>
			</div>
			<div class="clearfix"></div>
			<br /><br />
			<div class="col-div-8">
				<div class="box-8">
					<div class="content-box">
						<p>Sản Phẩm Bán Chạy <span>Tất cả</span></p>
						<br />
						<table>
							<tr>
								<th>Tên Sản Phẩm</th>
								<th>Hình Ảnh</th>
								<th>Giá</th>
							</tr>
							<tr>
								<td>Áo polo</td>
								<td class="topsp"><img src="images/topsp1.webp" alt=""></td>
								<td>$10</td>
							</tr>
							<tr>
								<td>Áo polo</td>
								<td class="topsp"><img src="images/topsp1.webp" alt=""></td>
								<td>$10</td>
							</tr>
							<tr>
								<td>Áo polo</td>
								<td class="topsp"><img src="images/topsp1.webp" alt=""></td>
								<td>$10</td>
							</tr>



						</table>
					</div>
				</div>
			</div>

			<div class="col-div-4">
				<div class="box-4">
					<div class="content-box">
						<p>Tổng Doanh Thu <span>Tất cả</span></p>

						<div class="circle-wrap">
							<div class="circle">
								<div class="mask full">
									<div class="fill"></div>
								</div>
								<div class="mask half">
									<div class="fill"></div>
								</div>
								<div class="inside-circle"> 70% </div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>


		</div>
@endsection