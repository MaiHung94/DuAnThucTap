<div id="sidebar" class="bg-white">
    <ul id="sidebar-menu">
        <li class="nav-link">
            <a href="{{ route('list.product') }}">
                <div class="nav-link-icon d-inline-flex">
                    <i class="far fa-folder"></i>
                </div>
                About us
            </a>
            <i class="arrow fas fa-angle-down"></i>
            <ul class="sub-menu">
                <li><a href="{{ route('add.page') }}">Thêm mới</a></li>
                <li><a href="{{ route('list.page') }}">Danh sách</a></li>
            </ul>
        </li>
        <li class="nav-link">
            <a href="?view=list-post">
                <div class="nav-link-icon d-inline-flex">
                    <i class="far fa-folder"></i>
                </div>
                Trang
            </a>
            <i class="arrow fas fa-angle-right"></i>

            <ul class="sub-menu">
                <li><a href="{{ route('add.slider') }}">Thêm mới Slider</a></li>
                <li><a href="{{ route('list.slider') }}">Danh sách Slider</a></li>
            </ul>
        </li>
        <li class="nav-link">
            <a href="{{ route('lists') }}">
                <div class="nav-link-icon d-inline-flex">
                    <i class="far fa-folder"></i>
                </div>
                Bài viết
            </a>
            <i class="arrow fas fa-angle-right"></i>
            <ul class="sub-menu">
                <li><a href="{{ route('add') }}">Thêm mới</a></li>
                <li><a href="{{ route('lists') }}">Danh sách</a></li>
            </ul>
        </li>
        <li class="nav-link">
            <a href="{{ route('list.menu') }}">
                <div class="nav-link-icon d-inline-flex">
                    <i class="far fa-folder"></i>
                </div>
                Menu
            </a>
            <i class="arrow fas fa-angle-right"></i>
            <ul class="sub-menu">
                <li><a href="{{ route('add.menu') }}">Thêm mới</a></li>
                <li><a href="{{ route('list.menu') }}">Danh sách</a></li>
            </ul>
        </li>
        <li class="nav-link">
            <a href="{{ route('list.product') }}">
                <div class="nav-link-icon d-inline-flex">
                    <i class="far fa-folder"></i>
                </div>
                Sản phẩm
            </a>
            <i class="arrow fas fa-angle-down"></i>
            <ul class="sub-menu">
                <li><a href="{{ route('add.product') }}">Thêm mới</a></li>
                <li><a href="{{ route('list.product') }}">Danh sách</a></li>
            </ul>
        </li>

      
        <li class="nav-link">
            <a href="{{ route('list.user') }}">
                <div class="nav-link-icon d-inline-flex">
                    <i class="far fa-folder"></i>
                </div>
                Users
            </a>
            <i class="arrow fas fa-angle-right"></i>

            <ul class="sub-menu">
                <li><a href="{{ route('add.user') }}">Thêm mới</a></li>
                <li><a href="{{ route('list.user') }}">Danh sách</a></li>
            </ul>
        </li>

        <!-- <li class="nav-link"><a>Bài viết</a>
            <ul class="sub-menu">
                <li><a>Thêm mới</a></li>
                <li><a>Danh sách</a></li>
                <li><a>Thêm danh mục</a></li>
                <li><a>Danh sách danh mục</a></li>
            </ul>
        </li>
        <li class="nav-link"><a>Sản phẩm</a></li>
        <li class="nav-link"><a>Đơn hàng</a></li>
        <li class="nav-link"><a>Hệ thống</a></li> -->

    </ul>
</div>
