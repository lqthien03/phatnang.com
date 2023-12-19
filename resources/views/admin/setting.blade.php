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
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Blue WEB</a>
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
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
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
                        <a class="nav-link" href="/dashboard
                        ">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Quản lý sản phẩm
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static.html">Danh mục cấp 1</a>
                                <a class="nav-link" href="layout-sidenav-light.html">Danh mục cấp 2</a>
                                <a class="nav-link" href="layout-sidenav-light.html">Danh mục cấp 3</a>
                                <a class="nav-link" href="layout-sidenav-light.html">Sản phẩm</a>
                                <a class="nav-link" href="layout-sidenav-light.html">Tag sản phẩm</a>
                            </nav>
                        </div>

                        {{-- ///// --}}
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Quản lý bảng báo giá
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Danh mục cấp 1
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Bảng báo giá
                                    <div class="sb-sidenav-collapse-arrow"></i></div>
                                </a>
                            </nav>
                        </div>
                        {{-- /// --}}
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Quản lý hỗ trợ khách hàng
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Hỗ trợ khách hàng
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                            </nav>
                        </div>
                        {{-- ///// --}}
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Quản lý trang tĩnh
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Giới thiệu
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Thanh lý phòng net
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Slogan tin tức & video
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Liên hệ
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Footer
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                            </nav>
                        </div>
                        {{-- //// --}}
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Quản lý hình ảnh - video
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Hình ảnh chia sẻ trang chủ
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Logo
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Favicon
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Banner quảng cáo
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Slideshow
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Tiêu chí
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Mạng xã hội
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Video
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                            </nav>
                        </div>
                        {{-- //// --}}

                        {{-- //// --}}

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Quản lý bài viết
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Tin tức
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Chính sách
                                    <div class="sb-sidenav-collapse-arrow"></i></div>
                                </a>
                            </nav>
                        </div>

                        {{-- ///// --}}
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Quản lý SEO page
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Sản phẩm
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Bảng báo giá
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Tin tức
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Video
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                            </nav>
                        </div>
                        {{-- //// --}}

                        {{-- /// --}}
                        <div class="sb-sidenav-menu-heading">Cài đặt</div>
                        <a class="nav-link" href="/setting">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Thiết lập thông tin
                        </a>
                        {{-- <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a> --}}
                    </div>

                    {{--  --}}
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div id="" class="container-fluid px-4">

                    <section class="content">
                        <form class="validation-form" novalidate method="post"
                            action="{{ route('update.setting', $setting) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div>
                                <button type="submit"
                                    class="btn mt-3"style="background-color:#65B741; color:#fff">Lưu</button>
                                <button type="button" class="btn btn-warning mt-3"><a href="">Làm
                                        lại</a></button>
                                <button type="button" class="btn btn-danger mt-3"><a
                                        href="">Thoát</a></button>
                            </div>
                            <div class="card card-primary card-outline text-sm mb-4 mt-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    Thông tin chung
                                </div>
                                <div class="card-body">
                                    <div class="card card-primary card-outline card-outline-tabs">
                                        <div class="card-header p-0 border-bottom-0">
                                            <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="tabs-lang" data-toggle="pill"
                                                        href="#tabs-lang-vi" role="tab"
                                                        aria-controls="tabs-lang-vi" aria-selected="true">Tiếng
                                                        Việt</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body card-article">
                                            <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                                                <div class="tab-pane fade show active" id="tabs-lang-vi"
                                                    role="tabpanel" aria-labelledby="tabs-lang">
                                                    <div class="form-group">
                                                        <label for="tenvi">Tiêu đề (vi):</label>
                                                        <input type="text" class="form-control for-seo"
                                                            name="tittle" id="tenvi" placeholder="Tiêu đề (vi)"
                                                            value="{{ old('tittle') ?? $setting->tittle }}" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="diachi">Địa chỉ (vi):</label>
                                                        <input type="text" class="form-control" name="address"
                                                            id="diachivi" placeholder="Địa chỉ (vi)"
                                                            value="{{ old('address') ?? $setting->address }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="copyvi">Tên copyright (vi):</label>
                                                        <input type="text" class="form-control" name="name"
                                                            id="copyvi" placeholder="Tên copyright (vi)"
                                                            value="{{ old('name') ?? $setting->name }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Email" value="{{ old('email') ?? $setting->email }}">
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label for="hotline">Hotline:</label>
                                            <input type="text" class="form-control" name="holine" id="hotline"
                                                placeholder="Hotline" value="{{ old('holine') ?? $setting->holine }}">
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label for="dienthoai">Điện thoại:</label>
                                            <input type="text" class="form-control" name="phone" id="dienthoai"
                                                placeholder="Điện thoại"
                                                value="{{ old('phone') ?? $setting->phone }}">
                                        </div>
                                        <div
                                            class="form-group
                                                col-md-4 col-sm-6">
                                            <label for="zalo">Zalo:</label>
                                            <input type="text" class="form-control" name="zalo" id="zalo"
                                                placeholder="Zalo" value="{{ old('zalo') ?? $setting->zalo }}">
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label for="website">Website:</label>
                                            <input type="text" class="form-control" name="website" id="website"
                                                placeholder="Website"
                                                value="{{ old('website') ?? $setting->website }}">
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label for="fanpage">Fanpage:</label>
                                            <input type="text" class="form-control" name="fanpage" id="fanpage"
                                                placeholder="Fanpage"
                                                value="{{ old('fanpage') ?? $setting->fanpage }}">
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label for="toado">Tọa độ google map:</label>
                                            <input type="text" class="form-control" name="map" id="toado"
                                                placeholder="Tọa độ google map"
                                                value="{{ old('map') ?? $setting->map }}">
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label for="hethong">Link chỉ đường:</label>
                                            <input type="text" class="form-control" name="link" id="hethong"
                                                placeholder="Link chỉ đường"
                                                value="{{ old('link') ?? $setting->link }}">
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label for="thoigian">Thời gian làm việc:</label>
                                            <input type="text" class="form-control" name="time" id="thoigian"
                                                placeholder="Thời gian làm việc"
                                                value="{{ old('time') ?? $setting->time }}">
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label for="sp">Số sản phẩm / Trang:</label>
                                            <input type="number" class="form-control" name="product_number"
                                                id="sp" placeholder=""
                                                value="{{ old('product_number') ?? $setting->product_number }}">
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label for="sp1">Số sản phẩm liên quan / Trang:</label>
                                            <input type="number" class="form-control" name="related_product_number"
                                                id="sp1" placeholder=""
                                                value="{{ old('related_product_number') ?? $setting->related_product_number }}">
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label for="tt">Số bài viết / Trang:</label>
                                            <input type="number" class="form-control" name="posts" id="tt"
                                                placeholder="" value="{{ old('posts') ?? $setting->posts }}">
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label for="tt1">Số bài viết liên quan / Trang:</label>
                                            <input type="number" class="form-control" name="related_posts"
                                                id="tt1" placeholder=""
                                                value="{{ old('related_posts') ?? $setting->related_posts }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="toado_iframe">
                                            <span>Tọa độ google map iframe:</span>
                                            <a class="text-sm font-weight-normal ml-1"
                                                href="https://www.google.com/maps/@10.8264021,106.6173419,14z?entry=ttu"
                                                target="_blank" title="Lấy mã nhúng google map">(Lấy mã nhúng)</a>
                                        </label>
                                        <textarea class="form-control" name="map_iframe" id="toado_iframe" rows="5"
                                            placeholder="Tọa độ google map iframe"><iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="analytics">Google analytics:</label>
                                        <textarea class="form-control" name="gg_analytic" id="analytics" rows="5" placeholder="Google analytics"><script async src=""></script>
                    <script>
                        window.dataLayer = window.dataLayer || [];

                        function gtag() {
                            dataLayer.push(arguments);
                        }
                        gtag('js', new Date());

                        gtag('config', 'G-4D6T9J3L9J');
                    </script></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="mastertool">Google Webmaster Tool:</label>
                                        <textarea class="form-control" name="gg_webmaster_tool" id="mastertool" rows="5"
                                            placeholder="Google Webmaster Tool"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="headjs">Head JS:</label>
                                        <textarea class="form-control" name="head_js" id="headjs" rows="5" placeholder="Head JS"><script type="text/javascript" src="//erasoft.vn/frame/default/js/snow.js"></script>
                    <!-- Meta Pixel Code -->
                    <script>
                        ! function(f, b, e, v, n, t, s) {
                            if (f.fbq) return;
                            n = f.fbq = function() {
                                n.callMethod ?
                                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                            };
                            if (!f._fbq) f._fbq = n;
                            n.push = n;
                            n.loaded = !0;
                            n.version = '2.0';
                            n.queue = [];
                            t = b.createElement(e);
                            t.async = !0;
                            t.src = v;
                            s = b.getElementsByTagName(e)[0];
                            s.parentNode.insertBefore(t, s)
                        }(window, document, 'script',
                            'https://connect.facebook.net/en_US/fbevents.js');
                        fbq('init', '734190170889666');
                        fbq('track', 'PageView');
                    </script>
                    <noscript><img height="1" width="1" style="display:none"
                    src="https://www.facebook.com/tr?id=734190170889666&ev=PageView&noscript=1"
                    /></noscript>
                    <!-- End Meta Pixel Code --></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="bodyjs">Body JS:</label>
                                        <textarea class="form-control" name="body_js" id="bodyjs" rows="5" placeholder="Body JS"><style>
                    .mobile-hotline{display:none}

                    .hotline {position: fixed;
                        left: 10px;
                        bottom: 10px;
                        z-index: 9000;
                        display: block;
                        background: #fac100;
                        color: red;
                        padding-top: 5px;padding-bottom:5px; padding-left:12px; padding-right: 12px;
                        border-radius: 99px;}
                    .hotline .hotline-number{font-size:20px; color: #b20000; font-weight: bold}

                    @media  (max-width: 767px) {

                        .hotline{

                            display :none;

                        }
                    .mobile-hotline{display: block; bottom: 0; width: 100%; background:rgba(0,0,0,0.8); height: 60px; position: fixed; z-index:9999999}
                    .mobile-hotline .mobile-hotline-left{width: 45%; float: left; text-align: center; background: #00a502; margin-left: 10px; margin-right:5px; margin-top: 7px; height: 45px; border-radius: 4px}
                    .mobile-hotline .mobile-hotline-left a{color: white; line-height: 46px; font-size:16px; font-weight: bold}

                    .mobile-hotline .mobile-hotline-right{width: 45%; float: right; text-align: center; background: #fac100; margin-left: 5px; margin-right: 10px; margin-top: 7px; height: 45px; border-radius: 4px}
                    .mobile-hotline .mobile-hotline-right a{color: red; line-height: 46px; font-size: 16px; font-weight: bold}
                    }
                    </style>
                    <a href="tel:+84938 948 862"><div class="hotline">
                    <span class="before-hotline">Hotline:</span>
                    <span class="hotline-number">0938.948.862</span>
                    </div></a>
                    <div class="mobile-hotline">
                    <div class="mobile-hotline-left">
                    <a href="https://phatnang.com/bang-gia" target="blank">Bảng Báo Giá</a>
                    </div>
                    <div class="mobile-hotline-right"><a href="tel:+84938 948 862" target="blank">Gọi điện ngay</a></div>
                    </div></textarea>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="card card-primary card-outline text-sm">
                                <div class="card-header">
                                    <h3 class="card-title">Nội dung SEO</h3>
                                    <a class="btn btn-sm bg-gradient-success d-inline-block text-white float-right create-seo"
                                        title="Tạo SEO">Tạo SEO</a>
                                </div>
                                <div class="card-body">
                                    <!-- SEO -->
                                    <div class="card-seo">
                                        <div class="card card-primary card-outline card-outline-tabs">
                                            <div class="card-header p-0 border-bottom-0">
                                                <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="tabs-lang" data-toggle="pill"
                                                            href="#tabs-seolang-vi" role="tab"
                                                            aria-controls="tabs-seolang-vi" aria-selected="true">SEO
                                                            (Tiếng
                                                            Việt)</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                                                    <div class="tab-pane fade show active" id="tabs-seolang-vi"
                                                        role="tabpanel" aria-labelledby="tabs-lang">
                                                        <div class="form-group ">
                                                            <div class="label-seo">
                                                                <label for="titlevi">SEO Title (vi):</label>
                                                                <strong class="count-seo"><span>67</span>/70 ký
                                                                    tự</strong>
                                                            </div>
                                                            <input type="text"
                                                                class="form-control check-seo title-seo"
                                                                name="dataSeo[titlevi]" id="titlevi"
                                                                placeholder="SEO Title (vi)"
                                                                value="VI TÍNH PHÁT NĂNG | Vi Tính Bình Dương | Thanh Lý Phòng Net Giá Cao">
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="label-seo">
                                                                <label for="keywordsvi">SEO Keywords (vi):</label>
                                                                <strong class="count-seo"><span>0</span>/70 ký
                                                                    tự</strong>
                                                            </div>
                                                            <input type="text"
                                                                class="form-control check-seo keywords-seo"
                                                                name="dataSeo[keywordsvi]" id="keywordsvi"
                                                                placeholder="SEO Keywords (vi)" value="">
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="label-seo">
                                                                <label for="descriptionvi">SEO Description
                                                                    (vi):</label>
                                                                <strong class="count-seo"><span>196</span>/160 ký
                                                                    tự</strong>
                                                            </div>
                                                            <textarea class="form-control check-seo description-seo" name="dataSeo[descriptionvi]" id="descriptionvi"
                                                                rows="5" placeholder="SEO Description (vi)">VI TÍNH PHÁT NĂNG | Vi Tính Bình Dương chuyên linh kiện máy tính giá tốt, linh kiện vi tính chất lượng nguồn sẵn, thanh lý phòng net, thanh lý phòng net giá cao, thanh lý phòng nét giá tốt nhất...</textarea>
                                                        </div>

                                                        <!-- SEO preview -->
                                                        <div
                                                            class="form-group form-group-seo-preview callout callout-warning mb-0 d-none">
                                                            <label class="label-seo-preview"><i
                                                                    class="fas fa-info mr-2"></i>Khi lên top, page này
                                                                sẽ hiển
                                                                thị theo dạng mẫu như sau:</label>
                                                            <div class="seo-preview">
                                                                <p class="slug-seo-preview" id="seourlpreviewvi"
                                                                    data-seourlstatic="0">
                                                                    https://phatnang.com/<strong></strong></p>
                                                                <p class="title-seo-preview text-split"
                                                                    id="title-seo-previewvi">VI TÍNH PHÁT NĂNG | Vi
                                                                    Tính Bình
                                                                    Dương | Thanh Lý Phòng Net Giá Cao</p>
                                                                <p class="description-seo-preview text-split"
                                                                    id="description-seo-previewvi">VI TÍNH PHÁT NĂNG |
                                                                    Vi Tính
                                                                    Bình Dương chuyên linh kiện máy tính giá tốt, linh
                                                                    kiện vi
                                                                    tính chất lượng nguồn sẵn, thanh lý phòng net, thanh
                                                                    lý
                                                                    phòng net giá cao, thanh lý phòng nét giá tốt
                                                                    nhất...</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" id="seo-create" value="vi">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="card-footer text-sm">
                                <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i
                                        class="far fa-save mr-2"></i>Lưu</button>
                                <button type="reset" class="btn btn-sm bg-gradient-secondary"><i
                                        class="fas fa-redo mr-2"></i>Làm lại</button>
                                <input type="hidden" name="id" value="18">
                            </div>
                        </form>
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
