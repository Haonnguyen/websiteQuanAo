
<div id="mySidenav" class="sidenav">
			<p class="logo"><span>A</span>dmin</p>
			<a href="{{ route('admin') }}" class="icon-a"><i class="fa fa-dashboard icons"></i> <span>Bảng Điều Khiển</span> </a>
			<a href="{{ route('catalog') }}" class="icon-a"><i class="fa fa-folder-open icons"></i> <span>Quản Lý Danh Mục</span></a>
			<a href="{{ route('admin.product') }}" class="icon-a"><i class="fa fa-folder-plus icons"></i> <span>Quản Lý Sản Phẩm</span></a>
			<a href="order.html" class="icon-a"><i class="fa fa-shopping-bag icons"></i> <span>Quản Lý Đơn hàng</span></a>
			<a href="{{ route('user') }}" class="icon-a"><i class="fa fa-user icons"></i> <span>Quản Lý Thành Viên</span></a>
			<p class="logout"><a href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket"></i> <span>Đăng Xuất</span></a></p>
		</div>