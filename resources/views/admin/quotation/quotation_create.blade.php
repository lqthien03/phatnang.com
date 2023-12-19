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
    <style>
        body {
            background-color: #f2f7fb;
        }

        .mt-100 {
            margin-top: 100px;
        }

        .card {
            border-radius: 5px;
            -webkit-box-shadow: 0 0 5px 0 rgba(43, 43, 43, .1), 0 11px 6px -7px rgba(43, 43, 43, .1);
            box-shadow: 0 0 5px 0 rgba(43, 43, 43, .1), 0 11px 6px -7px rgba(43, 43, 43, .1);
            border: none;
            margin-bottom: 30px;
            -webkit-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        .card .card-header {
            background-color: transparent;
            border-bottom: none;
            padding: 20px;
            position: relative;
        }

        .card .card-header h5:after {
            content: "";
            background-color: #d2d2d2;
            width: 101px;
            height: 1px;
            position: absolute;
            bottom: 6px;
            left: 20px;
        }

        .card .card-block {
            padding: 1.25rem;
        }

        .dropzone.dz-clickable {
            cursor: pointer;
        }

        .dropzone {
            min-height: 150px;
            border: 1px solid rgba(42, 42, 42, 0.05);
            background: rgba(204, 204, 204, 0.15);
            padding: 20px;
            border-radius: 5px;
            -webkit-box-shadow: inset 0 0 5px 0 rgba(43, 43, 43, 0.1);
            box-shadow: inset 0 0 5px 0 rgba(43, 43, 43, 0.1);
        }

        .m-t-20 {
            margin-top: 20px;
        }

        .btn-primary,
        .sweet-alert button.confirm,
        .wizard>.actions a {
            background-color: #4099ff;
            border-color: #4099ff;
            color: #fff;
            cursor: pointer;
            -webkit-transition: all ease-in .3s;
            transition: all ease-in .3s;
        }

        .btn {
            border-radius: 2px;
            text-transform: capitalize;
            font-size: 15px;
            padding: 10px 19px;
            cursor: pointer;
        }
    </style>
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
                                <a class="nav-link" href="#">Slogan tin tức & video</a>
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
                                <a class="nav-link" href="#">Logo</a>
                                <a class="nav-link" href="#">Favicon</a>
                                <a class="nav-link" href="#">Banner quảng cáo</a>
                                <a class="nav-link" href="#">Slideshow</a>
                                <a class="nav-link" href="#">Tiêu chí</a>
                                <a class="nav-link" href="#">Mạng xã hội</a>
                                <a class="nav-link" href="#">Video</a>

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
                                <a class="nav-link" href="#">Sản phẩm</a>
                                <a class="nav-link" href="#">Bảng báo giá</a>
                                <a class="nav-link" href="#">Tin tức</a>
                                <a class="nav-link" href="#">Video</a>


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
            <form action="{{ route('store.quotation1') }}" method="post">
                @csrf
                <main>
                    <div id="" class="container-fluid px-4 row">

                        <div class="col-8">
                            <div>
                                <button type="submit" class="btn btn-success mt-3">Lưu</button>
                                <button type="button" class="btn btn-warning mt-3"><a href="">Làm
                                        lại</a></button>
                                <button type="button" class="btn btn-danger mt-3"><a
                                        href="">Thoát</a></button>
                            </div>
                            <section class="content">
                                <div class="card mb-4 mt-4">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Nội dung sản phẩm
                                    </div>
                                    <div>
                                        <div class="mb-3 ms-3 me-3">
                                            <label for="exampleFormControlInput1" class="form-label"><b>Tiêu
                                                    đề</b></label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                placeholder="" name="tittle">
                                        </div>
                                        {{-- <div class="mb-3 ms-3 me-3">
                                            <label for="exampleFormControlTextarea1" class="form-label"><b>Mô
                                                    tả</b></label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="describe"></textarea>
                                        </div> --}}
                                        <div class="form-check mb-3 ms-3 me-3">
                                            <input type="hidden" value="0" name="display">
                                            <input class="form-check-input" type="checkbox" value="1"
                                                name="display" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>Hiển thị</b>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </section>
                        </div>
                        <div class="col-4 mt-5">
                            <section class="content mt-5">
                                <div class="card mb-4 mt-4">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Danh mục bảng báo giá
                                    </div>
                                    <div>
                                        <div class=" mb-2 ms-3 me-3 mx-auto">
                                            <label for="exampleFormControlInput1" class="form-label"><b>Doanh mục cấp
                                                    1:</b></label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" id="inputGroupSelect01"
                                                    name="level1_product_id">
                                                    <option selected>Chọn danh mục</option>
                                                    @foreach ($category_level1 as $item)
                                                        <option value="{{ $item->id }}"
                                                            data-id="{{ $item->id }}">
                                                            {{ $item->tittle }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 ms-3 me-3">
                                            <label for="exampleFormControlInput1" class="form-label"><b>Link sản
                                                    phẩm:</b></label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                placeholder="" name="tittle">
                                        </div>
                                        <div class="mb-3 ms-3 me-3">
                                            <label for="exampleFormControlInput1" class="form-label"><b>Đơn
                                                    giá:</b></label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                placeholder="" name="tittle">
                                        </div>
                                        <div class="mb-3 ms-3 me-3">
                                            <label for="exampleFormControlInput1" class="form-label"><b>Giá
                                                    sỉ:</b></label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                placeholder="" name="tittle">
                                        </div>
                                        <div class="mb-3 ms-3 me-3">
                                            <label for="exampleFormControlInput1" class="form-label"><b>Bảo
                                                    hành:</b></label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                placeholder="" name="tittle">
                                        </div>

                                    </div>

                                </div>
                            </section>
                        </div>
                        <section class="content">
                            <div class="card mb-4 mt-4">
                                <div class=" row card-header">
                                    <div class="col-6">
                                        <i class="fas fa-table me-1"></i>Nội dung SEO
                                    </div>
                                    <div class="col-6 text-end">
                                        <button type="button" class="btn btn-success"><a href="">Tạo
                                                seo</a></button>
                                    </div>

                                </div>

                                <div>
                                    <div class="mb-3 ms-3 me-3">
                                        <label for="exampleFormControlInput1" class="form-label"><b>SEO Title
                                                (vi):</b></label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="tittle">
                                    </div>
                                    <div class="mb-3 ms-3 me-3">
                                        <label for="exampleFormControlInput1" class="form-label"><b>SEO Keywords
                                                (vi):</b></label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="keyword">
                                    </div>
                                    <div class="mb-3 ms-3 me-3">
                                        <label for="exampleFormControlTextarea1" class="form-label"><b>SEO
                                                Description
                                                (vi):</b></label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                                    </div>
                                </div>

                            </div>
                        </section>
                </main>
            </form>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif
        </div>


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
