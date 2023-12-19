<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ url('css/style.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="/dashboard">Blue WEB</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle"><a
            href="https://phatnang.vn"><i class='bx bx-log-out bx-sm' style="color: #6c757d"></i></a></button>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/setting/{setting}">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    {{-- <li><a class="dropdown-item" href="">Logout</a></li> --}}
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="/dashboard">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dasboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Quản lý</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"> </i></div>
                            Quản lý sản phẩm
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="/catagory-level-1">Danh mục cấp 1</a>
                                <a class="nav-link" href="/catagory-level-2">Danh mục cấp 2</a>
                                <a class="nav-link" href="/catagory-level-3">Danh mục cấp 3</a>
                                <a class="nav-link" href="/product">Sản phẩm</a>
                                <a class="nav-link" href="/tag-product">Tag sản phẩm</a>
                            </nav>
                        </div>

                        {{-- ///// --}}
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapsePages1" aria-expanded="false" aria-controls="collapsePages1">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-money-check-dollar"></i></div>
                            Quản lý bảng báo giá
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages1" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion">
                                <a class="nav-link" href="/quotation-level-1">Danh mục cấp 1</a>
                                <a class="nav-link" href="/quotation">Bảng báo giá</a>

                            </nav>
                        </div>
                        {{-- /// --}}
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapsePages2" aria-expanded="false" aria-controls="collapsePages2">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-envelope-open-text"></i></div>
                            Quản lý hỗ trợ khách hàng
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages2" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion">
                                <a class="nav-link" href="/support-customer">Hỗ trợ khách hàng</a>
                            </nav>
                        </div>
                        {{-- ///// --}}
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapsePages3" aria-expanded="false" aria-controls="collapsePages3">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-folder"></i></div>
                            Quản lý trang tĩnh
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages3" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion">
                                <a class="nav-link" href="#">Giới thiệu</a>
                                <a class="nav-link" href="#">Thanh lý phòng net</a>
                                <a class="nav-link" href="/slogan/1">Slogan tin tức & video</a>
                                <a class="nav-link" href="#">Liên hệ</a>
                                <a class="nav-link" href="#">Footer</a>

                            </nav>
                        </div>
                        {{-- //// --}}

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapsePages4" aria-expanded="false" aria-controls="collapsePages4">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-photo-film"></i></div>
                            Quản lý hình ảnh - video
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages4" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion">
                                <a class="nav-link" href="#">Hình ảnh chia sẻ trang chủ</a>
                                <a class="nav-link" href="/image-video/logo/edit/1">Logo</a>
                                <a class="nav-link" href="/image-video/favicon/edit/1">Favicon</a>
                                <a class="nav-link" href="/image-video/banner/edit/1">Banner quảng cáo</a>
                                <a class="nav-link" href="/image-video/slideshow">Slideshow</a>
                                <a class="nav-link" href="/image-video/criteria">Tiêu chí</a>
                                <a class="nav-link" href="/image-video/network-society">Mạng xã hội</a>
                                <a class="nav-link" href="/image-video/videos">Video</a>

                            </nav>
                        </div>

                        {{-- //// --}}

                        {{-- //// --}}
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapsePages5" aria-expanded="false" aria-controls="collapsePages5">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Quản lý bài viết
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages5" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion">
                                <a class="nav-link" href="#">Tin tức</a>
                                <a class="nav-link" href="#">Chính sách</a>

                            </nav>
                        </div>
                        {{-- ///// --}}
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapsePages6" aria-expanded="false" aria-controls="collapsePages6">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                            Quản lý SEO page
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages6" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion">
                                <a class="nav-link" href="/seo-page/product/edit/1">Sản phẩm</a>
                                <a class="nav-link" href="/seo-page/quotation/edit/1">Bảng báo giá</a>
                                <a class="nav-link" href="/seo-page/news/edit/1">Tin tức</a>
                                <a class="nav-link" href="/seo-page/video/edit/1">Video</a>


                            </nav>
                        </div>
                        {{-- //// --}}

                        {{-- /// --}}
                        <div class="sb-sidenav-menu-heading">Cài đặt</div>
                        <a class="nav-link" href="/setting/1">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Thiết lập thông tin
                        </a>
                        {{-- <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a> --}}
                    </div>
                </div>

            </nav>
        </div>
        {{-- main --}}
        <div id="layoutSidenav_content">
            <main>
                <div id="" class="container-fluid px-4">
                    <section class="content">
                        <button type="button" class="btn mt-3" style="background-color:#65B741; color:#fff"><a
                                href="/catagory-level-1/create">Thêm
                                mới</a></button>
                        {{-- <button type="button" class="btn btn-danger mt-3"></button> --}}
                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Danh sách sản phẩm cấp 1
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Hình</th>
                                            <th>Tiêu đề</th>
                                            <th>Nổi bật</th>
                                            <th>Hiển thị</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>STT</th>
                                            <th>Hình</th>
                                            <th>Tiêu đề</th>
                                            <th>Nổi bật</th>
                                            <th>Hiển thị</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($category_level1 as $item)
                                            <tr>
                                                <th scope="row">{{ $item->id }}</th>
                                                {{-- <td>{{ $item->image }}</td> --}}
                                                <td style="text-align: center; vertical-align: middle;">
                                                    @if ($item->image)
                                                        <img src="{{ URL::asset('uploads/' . $item->image) }}"
                                                            alt="Hình ảnh" width="25" height="25"
                                                            style="text-align:center">
                                                    @else
                                                        Không có hình ảnh
                                                    @endif
                                                </td>
                                                <td>{{ $item->tittle }}</td>
                                                <td>
                                                    <input class="form-check-input" type="checkbox"
                                                        value="{{ $item->outstand }}" name="display"
                                                        id="flexCheckDefault"
                                                        {{ $item->outstand == 1 ? 'checked' : '' }}>
                                                </td>
                                                <td>
                                                    <input class="form-check-input" type="checkbox"
                                                        value="{{ $item->display }}" name="display"
                                                        id="flexCheckDefault"
                                                        {{ $item->display == 1 ? 'checked' : '' }}>
                                                </td>
                                                <td>
                                                    <a href="/catagory-level-1/edit/{{ $item->id }}"><i
                                                            class='bx bxs-edit bx-sm'></i></a>
                                                    <form method="POST"
                                                        action="{{ route('delete.category1', ['id' => $item->id]) }}"
                                                        style="display: inline;"
                                                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa bản ghi này không?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            style="background: none; border: none; cursor: pointer;">
                                                            <a href=""><i
                                                                    class='bx bx-trash bx-sm'style='color:#ff0000'></i></a>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </main>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
        </script>
        <script src="{{ url('js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ url('assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ url('assets/demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
            crossorigin="anonymous"></script>
        <script src="{{ url('js/datatables-simple-demo.js') }}"></script>

</body>

</html>
