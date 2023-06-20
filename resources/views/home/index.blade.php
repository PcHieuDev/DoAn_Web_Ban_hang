<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levu01 - thương hiệu 10 năm các sản phẩm công nghệ</title>
    <link rel="icon" href="img/logo-icon.png" type="image/x-icon" />
    <link rel="preload" href="https://web.nvnstatic.net/css/fontAwesome/fontawesome.5.15.3.min.css?v=2" as="style">
    <link rel="stylesheet" href="https://web.nvnstatic.net/css/fontAwesome/fontawesome.5.15.3.min.css?v=2"
          type="text/css">
    <link rel="preload" href="https://web.nvnstatic.net/css/owlCarousel/owl.carousel.min.2.3.4.css?v=2" as="style">
    <link rel="stylesheet" href="https://web.nvnstatic.net/css/owlCarousel/owl.carousel.min.2.3.4.css?v=2"
          type="text/css">
    <link rel="preload" href="https://web.nvnstatic.net/css/bootstrap/bootstrap5/bootstrap.min.css?v=2" as="style">
    <link rel="stylesheet" href="https://web.nvnstatic.net/css/bootstrap/bootstrap5/bootstrap.min.css?v=2"
          type="text/css">
    <link rel="preload" href="https://web.nvnstatic.net/css/bootstrap/bootstrap-theme.css?v=2" as="style">
    <link rel="stylesheet" href="https://web.nvnstatic.net/css/bootstrap/bootstrap-theme.css?v=2" type="text/css">
    <link rel="preload" href="https://web.nvnstatic.net/css/font.css?v=2" as="style">
    <link rel="stylesheet" href="https://web.nvnstatic.net/css/font.css?v=2" type="text/css">
    <link rel="stylesheet"
          href="/min/f=v29_L3RwL1QwNDE1L2Nzcy9zdHlsZS5jc3MsL3RwL1QwNDE1L2Nzcy9yZXNwb25zaXZlLmNzcywvdHAvVDA0MTUvY3NzL3N0b3JlLzEx/OTg4OC5jc3M=/"
          type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="../fonts/fontawesome-free-5.15.3-web/css/all.min.css">

</head>

<body>
<input type="hidden" value="119888" id="storeId">
<header class="header-top">
    <div class="top-navigation">
        <div class="container">
            <ul>
                <li><a href="/admin">Admin</a></li>
                <li><a href="/gioithieu">Giới Thiệu</a></li>
                <li><a href="/combo-khuyen-mai-pc579185.html">Sản Phẩm Khuyến Mại</a></li>
                <li><a href="/chinh-sach-bao-hanh-n110655.html">Chính Sách Bảo Hành</a></li>
                <li><a href="">Nền Tảng Bán Hàng</a></li>
                <li><a href="">Tuyển dụng</a></li>
                <li><a href="/order/search">Tra cứu đơn hàng</a></li>
                @if(session()->has('name'))
                    <span class="account-user-name" style="padding-left: 7px;"><strong>{{ session()->get('name') }}</strong></span>
                    <a style="color: whitesmoke; padding-left: 7px;" href="{{ route('logout') }}">Đăng Xuất</a>


                @else
                    <li><a id="login-modal" class="js-buy-ticker" href="/login" data-bs-toggle="modal" data-bs-target="#getMember">Đăng nhập</a></li>
                @endif
            </ul>
        </div>
    </div>
    <div class="heading">
        <div class="container">
            <div class="logo">
                <div class="menu">
                    <a href="javascript:;" id="menuToggle"><i class="icon-menu1"></i></a>
                </div>
                <a href="/" title="vuabanlo.vn">
                    <img src="https://pos.nvncdn.net/5f3840-119888/store/20220504_nmfwjYvNgs1nQMyuG5dtunhC.png"
                         alt="vuabanlo.vn">
                </a>
                <div class="cart cart-mb">
                    <a href="/cart"><i class="fal fa-shopping-cart"></i><span class="cartCount"
                                                                              id="cart-total">0</span></a>
                </div>
            </div>
            <div class="search-box">
                <form method="get" action="/search" class="formSearchSuggest"
                      enctype="application/x-www-form-urlencoded">
                    <div class="border">
                        <input type="text" id="kwd" name="q" placeholder="Hôm nay bạn cần tìm gì?"
                               autocomplete="off">
                        <button type="submit" class="search"><i class="fas fa-search"></i></button>
                    </div>
                    <div class="searchFolding search-box"></div>
                </form>
            </div>
            <div class="order-tools">
                <div class="item check-order">
                    <a id="btnCheckOrder" href="/order/search">
                        <span class="icon"><i class="fas fa-truck"></i></span>
                        <span class="text">Kiểm tra đơn hàng</span>
                    </a>
                </div>
                <div class="item cart cart-desktop">
                    <a href="/cart">
                        <i class="far fa-shopping-cart"
                           style="color: #d63c00;margin-top: 5px;margin-right: 5px;"></i>
                        <label><span class="cartCount" id="cart-total">0</span></label>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <nav style="" class="">
        <div class="container color-menu">
            <ul class="root">
                <li id="cate-item" class="item-cate menu-item-mb "><a href="/" target="_self" class="link-item"><img
                            src="https://pos.nvncdn.net/5f3840-119888/menu/20230510_Oi3ao8te.png" alt=""><span>Trang
                                chủ</span></a></li>
                <li id="cate-item" class="item-cate menu-item-mb has_c"><a href="/tai-nghe-pc587304.html"
                                                                           target="_self" class="link-item custom-item-link lv0"><img
                            src="https://pos.nvncdn.net/5f3840-119888/pc/20221024_tiVN7ucR2NBOE1CJj5L0ZJES.png"
                            alt=""><span>TAI NGHE</span></a><i class="fas fa-caret-right"></i>
                    <div class="sub-container">
                        <div class="sub">
                            <div class="menu g2">
                                <ul class="display-column format_3">
                                    <li><a href="/tai-nghe-co-day-pc587312.html">TAI NGHE CÓ DÂY </a></li>
                                    <li><a href="/tai-nghe-khong-day-pc587311.html">TAI NGHE KHÔNG DÂY </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li id="cate-item" class="item-cate menu-item-mb "><a href="/combo-khuyen-mai-pc579185.html"
                                                                      target="_self" class="link-item custom-item-link lv0"><img
                            src="https://pos.nvncdn.net/5f3840-119888/pc/20220513_Rulr9mZf217YB6uJ3vtd75Al.png"
                            alt=""><span>COMBO KHUYẾN MÃI</span></a></li>
                <li id="cate-item" class="item-cate menu-item-mb has_c"><a href="/sac-cap-pc587306.html"
                                                                           target="_self" class="link-item custom-item-link lv0"><img
                            src="https://pos.nvncdn.net/5f3840-119888/pc/20221024_JVBw3XEBFjqWOFfewQRgw1QW.png"
                            alt=""><span>SẠC CÁP</span></a><i class="fas fa-caret-right"></i>
                    <div class="sub-container">
                        <div class="sub">
                            <div class="menu g2">
                                <ul class="display-column format_3">
                                    <li><a href="/cu-sac-pc587317.html">CỦ SẠC</a></li>
                                    <li><a href="/cap-pc587318.html">CÁP</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li id="cate-item" class="item-cate menu-item-mb has_c"><a href="/phu-kien-pc587310.html"
                                                                           target="_self" class="link-item custom-item-link lv0"><img
                            src="https://pos.nvncdn.net/5f3840-119888/pc/20221024_zObAAG30Lcq7fwIPNucGQrVI.png"
                            alt=""><span>PHỤ KIỆN</span></a><i class="fas fa-caret-right"></i>
                    <div class="sub-container">
                        <div class="sub">
                            <div class="menu g2">
                                <ul class="display-column format_3">
                                    <li><a href="/phu-kien-may-tinh-pc590846.html">PHỤ KIỆN MÁY TÍNH</a></li>
                                    <li><a href="/phu-kien-dien-thoai-pc590847.html">PHỤ KIỆN ĐIỆN THOẠI</a></li>
                                    <li><a href="/phu-kien-the-thao-pc590848.html">PHỤ KIỆN THỂ THAO</a></li>
                                    <li><a href="/chuot-phim-pc587390.html">CHUỘT, PHÍM </a></li>
                                    <li><a href="/op-lung-cuong-luc-pc587314.html">ỐP LƯNG, CƯỜNG LỰC </a></li>
                                    <li><a href="/khac-pc587326.html">KHÁC </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li id="cate-item" class="item-cate menu-item-mb "><a href="/don-kho-pc590851.html" target="_self"
                                                                      class="link-item custom-item-link lv0"><img
                            src="https://pos.nvncdn.net/5f3840-119888/pc/20230523_1UlyjZoJ.png" alt=""><span>DỌN
                                KHO</span></a></li>
                <li id="cate-item" class="item-cate menu-item-mb "><a href="/pin-du-phong-pc587307.html"
                                                                      target="_self" class="link-item custom-item-link lv0"><img
                            src="https://pos.nvncdn.net/5f3840-119888/pc/20221024_sD0fg2AOA48BwZiclv6efqU8.png"
                            alt=""><span>PIN DỰ PHÒNG</span></a></li>
                <li id="cate-item" class="item-cate menu-item-mb has_c"><a
                        href="/thoi-trang-cong-nghe-pc587393.html" target="_self"
                        class="link-item custom-item-link lv0"><img
                            src="https://pos.nvncdn.net/5f3840-119888/pc/20221026_UjRLITEXaiHRlywRQsv4LUkS.png"
                            alt=""><span>THỜI TRANG CÔNG NGHỆ</span></a><i class="fas fa-caret-right"></i>
                    <div class="sub-container">
                        <div class="sub">
                            <div class="menu g2">
                                <ul class="display-column format_3">
                                    <li><a href="/dep-pc590850.html">DÉP</a></li>
                                    <li><a href="/giay-pc587395.html">GIÀY</a></li>
                                    <li><a href="/balo-tui-deo-pc587394.html">BALO, TÚI ĐEO </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li id="cate-item" class="item-cate menu-item-mb "><a href="/99k-pc590852.html" target="_self"
                                                                      class="link-item custom-item-link lv0"><img
                            src="https://pos.nvncdn.net/5f3840-119888/pc/20230526_wMUnEOgl.png"
                            alt=""><span>99K</span></a></li>
                <li id="cate-item" class="item-cate menu-item-mb has_c"><a href="/dong-ho-pc587308.html"
                                                                           target="_self" class="link-item custom-item-link lv0"><img
                            src="https://pos.nvncdn.net/5f3840-119888/pc/20221024_fjWQJOprYPotLd5t7zBTrpXe.png"
                            alt=""><span>ĐỒNG HỒ</span></a><i class="fas fa-caret-right"></i>
                    <div class="sub-container">
                        <div class="sub">
                            <div class="menu g2">
                                <ul class="display-column format_3">
                                    <li><a href="/dong-ho-thong-minh-pc587388.html">ĐỒNG HỒ THÔNG MINH </a></li>
                                    <li><a href="/dong-ho-thoi-trang-pc587387.html">ĐỒNG HỒ THỜI TRANG </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li id="cate-item" class="item-cate menu-item-mb "><a href="/gia-dung-thong-minh-pc587305.html"
                                                                      target="_self" class="link-item custom-item-link lv0"><img
                            src="https://pos.nvncdn.net/5f3840-119888/pc/20221024_YWnTuYgcGDyCVSZdPXSg5xwD.png"
                            alt=""><span>GIA DỤNG THÔNG MINH</span></a></li>
                <li id="cate-item" class="item-cate menu-item-mb "><a href="/loa-pc587320.html" target="_self"
                                                                      class="link-item custom-item-link lv0"><img
                            src="https://pos.nvncdn.net/5f3840-119888/pc/20221024_BFBUDcMNT6gtKk2bZfKb5RwZ.png"
                            alt=""><span>LOA</span></a></li>
                <li id="cate-item" class="item-cate menu-item-mb "><a href="/camera-the-nho-pc587386.html"
                                                                      target="_self" class="link-item custom-item-link lv0"><img
                            src="https://pos.nvncdn.net/5f3840-119888/pc/20221026_eIzN2fYsAr3hICEeFzkaYcTi.png"
                            alt=""><span>CAMERA, THẺ NHỚ</span></a></li>
            </ul>
        </div>
    </nav>
    <div class="sidebar mb-version-menu">
        <nav class="global">
            <div class="user-info">
                <div class="user-avatar">
                    <div class="no-avt">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <div class="user-name">
                    <p><a href="route={{'login'}}"><strong>Đăng nhập</strong></a></p>
                </div>
            </div>
            <div class="menu">
                <ul class="cate-custom menu-list-mb">
                    <li id="cate-item" class="item-cate menu-item-mb "><a href="/" target="_self"
                                                                          class="link-item"><img
                                src="https://pos.nvncdn.net/5f3840-119888/menu/20230510_Oi3ao8te.png"
                                alt=""><span>Trang chủ</span></a></li>
                    <li id="cate-item" class="item-cate menu-item-mb has_c"><a href="/tai-nghe-pc587304.html"
                                                                               target="_self" class="link-item custom-item-link lv0"><img
                                src="https://pos.nvncdn.net/5f3840-119888/pc/20221024_tiVN7ucR2NBOE1CJj5L0ZJES.png"
                                alt=""><span>TAI NGHE</span></a><i class="fas fa-caret-right"></i>
                        <div class="sub-container">
                            <div class="sub">
                                <div class="menu g2">
                                    <ul class="display-column format_3">
                                        <li><a href="/tai-nghe-co-day-pc587312.html">TAI NGHE CÓ DÂY </a></li>
                                        <li><a href="/tai-nghe-khong-day-pc587311.html">TAI NGHE KHÔNG DÂY </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="cate-item" class="item-cate menu-item-mb "><a href="/combo-khuyen-mai-pc579185.html"
                                                                          target="_self" class="link-item custom-item-link lv0"><img
                                src="https://pos.nvncdn.net/5f3840-119888/pc/20220513_Rulr9mZf217YB6uJ3vtd75Al.png"
                                alt=""><span>COMBO KHUYẾN MÃI</span></a></li>
                    <li id="cate-item" class="item-cate menu-item-mb has_c"><a href="/sac-cap-pc587306.html"
                                                                               target="_self" class="link-item custom-item-link lv0"><img
                                src="https://pos.nvncdn.net/5f3840-119888/pc/20221024_JVBw3XEBFjqWOFfewQRgw1QW.png"
                                alt=""><span>SẠC CÁP</span></a><i class="fas fa-caret-right"></i>
                        <div class="sub-container">
                            <div class="sub">
                                <div class="menu g2">
                                    <ul class="display-column format_3">
                                        <li><a href="/cu-sac-pc587317.html">CỦ SẠC</a></li>
                                        <li><a href="/cap-pc587318.html">CÁP</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="cate-item" class="item-cate menu-item-mb has_c"><a href="/phu-kien-pc587310.html"
                                                                               target="_self" class="link-item custom-item-link lv0"><img
                                src="https://pos.nvncdn.net/5f3840-119888/pc/20221024_zObAAG30Lcq7fwIPNucGQrVI.png"
                                alt=""><span>PHỤ KIỆN</span></a><i class="fas fa-caret-right"></i>
                        <div class="sub-container">
                            <div class="sub">
                                <div class="menu g2">
                                    <ul class="display-column format_3">
                                        <li><a href="/phu-kien-may-tinh-pc590846.html">PHỤ KIỆN MÁY TÍNH</a></li>
                                        <li><a href="/phu-kien-dien-thoai-pc590847.html">PHỤ KIỆN ĐIỆN THOẠI</a>
                                        </li>
                                        <li><a href="/phu-kien-the-thao-pc590848.html">PHỤ KIỆN THỂ THAO</a></li>
                                        <li><a href="/chuot-phim-pc587390.html">CHUỘT, PHÍM </a></li>
                                        <li><a href="/op-lung-cuong-luc-pc587314.html">ỐP LƯNG, CƯỜNG LỰC </a></li>
                                        <li><a href="/khac-pc587326.html">KHÁC </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="cate-item" class="item-cate menu-item-mb "><a href="/don-kho-pc590851.html"
                                                                          target="_self" class="link-item custom-item-link lv0"><img
                                src="https://pos.nvncdn.net/5f3840-119888/pc/20230523_1UlyjZoJ.png" alt=""><span>DỌN
                                    KHO</span></a></li>
                    <li id="cate-item" class="item-cate menu-item-mb "><a href="/pin-du-phong-pc587307.html"
                                                                          target="_self" class="link-item custom-item-link lv0"><img
                                src="https://pos.nvncdn.net/5f3840-119888/pc/20221024_sD0fg2AOA48BwZiclv6efqU8.png"
                                alt=""><span>PIN DỰ PHÒNG</span></a></li>
                    <li id="cate-item" class="item-cate menu-item-mb has_c"><a
                            href="/thoi-trang-cong-nghe-pc587393.html" target="_self"
                            class="link-item custom-item-link lv0"><img
                                src="https://pos.nvncdn.net/5f3840-119888/pc/20221026_UjRLITEXaiHRlywRQsv4LUkS.png"
                                alt=""><span>THỜI TRANG CÔNG NGHỆ</span></a><i class="fas fa-caret-right"></i>
                        <div class="sub-container">
                            <div class="sub">
                                <div class="menu g2">
                                    <ul class="display-column format_3">
                                        <li><a href="/dep-pc590850.html">DÉP</a></li>
                                        <li><a href="/giay-pc587395.html">GIÀY</a></li>
                                        <li><a href="/balo-tui-deo-pc587394.html">BALO, TÚI ĐEO </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="cate-item" class="item-cate menu-item-mb "><a href="/99k-pc590852.html" target="_self"
                                                                          class="link-item custom-item-link lv0"><img
                                src="https://pos.nvncdn.net/5f3840-119888/pc/20230526_wMUnEOgl.png"
                                alt=""><span>99K</span></a></li>
                    <li id="cate-item" class="item-cate menu-item-mb has_c"><a href="/dong-ho-pc587308.html"
                                                                               target="_self" class="link-item custom-item-link lv0"><img
                                src="https://pos.nvncdn.net/5f3840-119888/pc/20221024_fjWQJOprYPotLd5t7zBTrpXe.png"
                                alt=""><span>ĐỒNG HỒ</span></a><i class="fas fa-caret-right"></i>
                        <div class="sub-container">
                            <div class="sub">
                                <div class="menu g2">
                                    <ul class="display-column format_3">
                                        <li><a href="/dong-ho-thong-minh-pc587388.html">ĐỒNG HỒ THÔNG MINH </a></li>
                                        <li><a href="/dong-ho-thoi-trang-pc587387.html">ĐỒNG HỒ THỜI TRANG </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="cate-item" class="item-cate menu-item-mb "><a href="/gia-dung-thong-minh-pc587305.html"
                                                                          target="_self" class="link-item custom-item-link lv0"><img
                                src="https://pos.nvncdn.net/5f3840-119888/pc/20221024_YWnTuYgcGDyCVSZdPXSg5xwD.png"
                                alt=""><span>GIA DỤNG THÔNG MINH</span></a></li>
                    <li id="cate-item" class="item-cate menu-item-mb "><a href="/loa-pc587320.html" target="_self"
                                                                          class="link-item custom-item-link lv0"><img
                                src="https://pos.nvncdn.net/5f3840-119888/pc/20221024_BFBUDcMNT6gtKk2bZfKb5RwZ.png"
                                alt=""><span>LOA</span></a></li>
                    <li id="cate-item" class="item-cate menu-item-mb "><a href="/camera-the-nho-pc587386.html"
                                                                          target="_self" class="link-item custom-item-link lv0"><img
                                src="https://pos.nvncdn.net/5f3840-119888/pc/20221026_eIzN2fYsAr3hICEeFzkaYcTi.png"
                                alt=""><span>CAMERA, THẺ NHỚ</span></a></li>
                </ul>
            </div>
        </nav>
        <div class="close">
            <a href="javascript:;" id="closeMenu">
                <span></span>
                <span></span>
            </a>
        </div>
    </div>
</header>

<div class="modal js-modal modal-1 ">
    <div class="modal-dialog modal-dialog-centered container ">
        <div class="modal-content ">
            <div class="modal-body  js-modal-container ">
                <div class="jquery-modal blocker current ">
                    <div  class="login-form">
                        <div class="login-bg">
                            <img src="img/login-bg.png">
                        </div>
                        <div class="form">
                            <h1>Đăng nhập</h1>
                            <div class="external">
                                <form method="post">
                                    <button class="btn-extlogin btn-facebook" title="Đăng nhập qua Facebook"
                                            type="submit" id="Facebook" name="provider" value="Facebook">
                                        <a href="/user/fbsignin?redirect=/">
                                            <i class="fab fa-facebook-square"></i>
                                            Tiếp tục với Facebook
                                        </a>
                                    </button>
                                    <button class="btn-extlogin btn-google" type="submit"
                                            title="Đăng nhập qua Google+" id="Google" name="provider" value="Google">
                                        <a href="/user/ggsignin">
                                            <i class="fab fa-google-plus-square"></i>
                                            Đăng nhập với Google
                                        </a>
                                    </button>
                                </form>
                            </div>
                            <div class="split">
                                <p>Hoặc</p>
                            </div>
                            <div class="internal">
                                <form id="formAcount" method="post"  action="{{ route('process_login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="label">Tài khoản</div>
                                        <div class="input">
                                            <input type="text" name="email" id="emailModal">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="label">Mật khẩu</div>
                                        <div class="input">
                                            <input type="password" name="password" id="passwordModal">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="button-group">
                                            <button class="btn btn-submit" id="btnsignin" type="submit">ĐĂNG
                                                NHẬP</button>
                                            <a class="btn btn-link ajax-content js-toggle-modal" href="javascript:void(0)"
                                               data-bs-toggle="modal" data-bs-target="#signup"
                                               style="background: #FFFFFF;">ĐĂNG KÝ</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="forgotpass"><a class="ajax-content" href="/user/getpassword">Quên
                                                mật khẩu?</a></p>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-modal-close">
                    <a href="javascript:void(0)" class="close-modal icon-minutes close" ><i class="fad fa-do-not-enter"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="modal fade login signup-content" id="signup" data-bs-toggle="modal" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> -->
<div class="modal js-modal modal-2">
    <div class="modal-dialog modal-dialog-centered container">
        <div class="modal-content">
            <div class="modal-body js-modal-container">
                <div class="jquery-modal blocker current">
                    <div class="login-form">
                        <div class="login-bg">
                            <img src="img/login-bg.png">
                        </div>
                        <div class="form">
                            <div class="center" style="text-align:center;">
                                <h2>Đăng ký tài khoản</h2>
                                <p>Chú ý các nội dung có dấu * bạn cần phải nhập</p>
                            </div>
                            <div class="hh-form">
                                <form id="formSignUp" action="{{ route('process_register') }}" method="post">
                                    @csrf
                                    <div class="form-controls">
                                        <label>Họ tên:</label>
                                        <div class="controls">
                                            <input type="text" name="name" id="fullName"
                                                   placeholder="Họ tên *" />
                                        </div>
                                    </div>
                                    <div class="form-controls">
                                        <label>Mật khẩu:</label>
                                        <div class="controls">
                                            <input type="password" name="password" id="password"
                                                   placeholder="Mật khẩu *" />
                                        </div>
                                    </div>

                                    <div class="form-controls">
                                        <label>Email:</label>
                                        <div class="controls">
                                            <input type="text" name="email" id="email" placeholder="Email *" />
                                        </div>
                                    </div>
                                    <div class="form-controls">
                                        <label>Điện thoại:</label>
                                        <div class="controls">
                                            <input type="tel" name="phone" id="mobile" placeholder="Điện thoại *"
                                                   data-required="1">
                                        </div>
                                    </div>
                                    <div class="form-controls">
                                        <label>Địa chỉ:</label>
                                        <div class="controls">
                                            <input type="text" name="address" id="address" placeholder="Địa chỉ *"
                                                   data-required="1">
                                        </div>
                                    </div>
                                    <div class="form-controls">
                                        <div class="controls submit-controls js-toggle-modal">
                                            <button  type="submit" id="btnSignup">ĐĂNG KÝ TÀI KHOẢN</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-modal-close">
                    <a href="javascript:void(0)" class="close-modal icon-minutes close" ><i class="fad fa-do-not-enter"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="slider-top">
    <div class="container">
        <div class="top-slider">
            <div id="sync1" class="owl-carousel owl-theme tp_banner_main" style="display: block;">
                <div class="item">
                    <a href="javascript:void(0);" target="_self"><img
                            src="https://pos.nvncdn.net/5f3840-119888/bn/20230518_Mfne8Pe4.png" class=""
                            alt="banner" /></a>
                </div>
                <!-- <div class="item">
                    <a href="/sam-tet-cung-lo-vu-pm127511.html" target="_blank"><img data-sizes="auto"
                            src="img/lazyLoading.gif"
                            data-src="https://pos.nvncdn.net/5f3840-119888/bn/20230607_TbgXwdn4.png"
                            class="lazyload" alt="banner" /></a>
                </div>
                <div class="item">
                    <a href="/tai-nghe-35mm-urbeats-2-p39103934.html" target="_blank"><img data-sizes="auto"
                            src="img/lazyLoading.gif"
                            data-src="https://pos.nvncdn.net/5f3840-119888/bn/20221102_FhgR7UIncMfdgOGmxQUixx16.png"
                            class="lazyload" alt="banner" /></a>
                </div>
                <div class="item">
                    <a href="/dong-ho-thong-minh-hw67-plus-p39852510.html" target="_blank"><img data-sizes="auto"
                            src="img/lazyLoading.gif"
                            data-src="https://pos.nvncdn.net/5f3840-119888/bn/20221101_mze7hkJxEz7IJn1ohG1RMcpo.png"
                            class="lazyload" alt="banner" /></a>
                </div>
                <div class="item">
                    <a href="/tai-nghe-bluetooth-aukey-epn5-anc-p39012029.html" target="_blank"><img
                            data-sizes="auto" src="/img/lazyLoading.gif"
                            data-src="https://pos.nvncdn.net/5f3840-119888/bn/20230410_Wt3ugys7.png"
                            class="lazyload" alt="banner" /></a>
                </div>
                <div class="item">
                    <a href="javascript:void(0);" target="_self"><img data-sizes="auto" src="/img/lazyLoading.gif"
                            data-src="https://pos.nvncdn.net/5f3840-119888/bn/20221029_RdzMjPNTdf7VJsCaF08R8p9K.png"
                            class="lazyload" alt="banner" /></a>
                </div>
                <div class="item">
                    <a href="javascript:void(0);" target="_self"><img data-sizes="auto" src="/img/lazyLoading.gif"
                            data-src="https://pos.nvncdn.net/5f3840-119888/bn/20221029_8nTOmmI2KwGmFWJnlgkNn2zI.png"
                            class="lazyload" alt="banner" /></a>
                </div>
                <div class="item">
                    <a href="/pin-du-phong-velasboost-x1-10k-mah-p39688520.html" target="_blank"><img
                            data-sizes="auto" src="/img/lazyLoading.gif"
                            data-src="https://pos.nvncdn.net/5f3840-119888/bn/20230417_SRZeVELV.png"
                            class="lazyload" alt="banner" /></a>
                </div>
                <div class="item">
                    <a href="javascript:void(0);" target="_self"><img data-sizes="auto" src="/img/lazyLoading.gif"
                            data-src="https://pos.nvncdn.net/5f3840-119888/bn/20221102_aVXPNnYk8FGaEIesIOrvMvUG.png"
                            class="lazyload" alt="banner" /></a>
                </div>
                <div class="item">
                    <a href="/bo-am-tra-gom-su-nobuhiro-cam-6-chen-p39075135.html" target="_blank"><img
                            data-sizes="auto" src="/img/lazyLoading.gif"
                            data-src="https://pos.nvncdn.net/5f3840-119888/bn/20230411_ljcJebzv.png"
                            class="lazyload" alt="banner" /></a>
                </div>
                <div class="item">
                    <a href="/o-dien-thong-minh-ldnio-sc-5415-p39673122.html" target="_blank"><img data-sizes="auto"
                            src="/img/lazyLoading.gif"
                            data-src="https://pos.nvncdn.net/5f3840-119888/bn/20221104_d6ZgQB6QAeVRyX614P72NQ3q.png"
                            class="lazyload" alt="banner" /></a>
                </div> -->
            </div>
            <div id="sync2" class="owl-carousel owl-theme" style="display: -webkit-inline-box;">
                <div class="item">THÔNG BÁO</div>
                <div class="item">Sale hot ngập tràn</div>
                <div class="item">Tai nghe Urbeasts 3,5 mm</div>
                <div class="item">Đồng hồ thông minh HW67 Plus</div>
                <div class="item">Camera IMOU Ranger 2</div>
                <div class="item">Shark Tank - Thương Vụ Bạc Tỷ</div>
                <div class="item">Tai Nghe Gaming Vleasboost G1X</div>
                <!-- <div class="item">Loa đèn led chữ G</div>
                <div class="item">Combo Sạc 18w và cáp 27w</div>
                <div class="item">Bếp Nướng Lẩu Bear</div>
                <div class="item">Ổ điện thông minh LDNIO</div> -->
            </div>
        </div>
    </div>
</section>
<section class="banner-promotion">
    <div class="container">
        <div class="quick-sales">
            <div class="item col-md-3">
                <a href="/combo-cu-sac-velasboost-18w-cap-27w-xam-p39654648.html" target="_blank">
                    <img class="sales-img"
                         src="https://pos.nvncdn.net/5f3840-119888/bn/20230128_sTkPcRlSqRUoAn7R.jpeg" alt="Sac cap">
                </a>
            </div>
            <div class="item col-md-3">
                <a href="javascript:void(0);" target="_blank">
                    <img class="sales-img" src="https://pos.nvncdn.net/5f3840-119888/bn/20230608_FOBC9hUu.png"
                         alt="Sản Phẩm Hot">
                </a>
            </div>
            <div class="item col-md-3">
                <a href="/pin-du-phong-velasboost-dynamic-1-10k-mah-p38846640.html" target="_blank">
                    <img class="sales-img" src="https://pos.nvncdn.net/5f3840-119888/bn/20230607_m2zz5VuV.png"
                         alt="Pin dự Phòng Dynamic">
                </a>
            </div>
            <div class="item col-md-3">
                <a href="/combo-khuyen-mai-pc579185.html" target="_blank">
                    <img class="sales-img" src="https://pos.nvncdn.net/5f3840-119888/bn/20230607_9yUDKksS.png"
                         alt="Siêu sale khuyễn mãi">
                </a>
            </div>
        </div>
    </div>
</section>
<section class="category-section homeProductCategory">
    <div class="container">
        <div class="box-product-home box-home">
            <div class="header">
                <h4>
                    <a href="">TAI NGHE</a>
                </h4>
            </div>
            <div class="col-content lts-product">
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
            </div>
            <div class="ads">
                <img src="https://pos.nvncdn.net/5f3840-119888/pc/20221024_O86azyj9XR3DQroyGjjqpafa.png"
                     style="width: 100%;">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="box-product-home box-home">
            <div class="header">
                <h4>
                    <a href="">COMBO KHUYẾN MÃI</a>
                </h4>
            </div>
            <div class="col-content lts-product">
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
            </div>
            <div class="ads">
                <img src="https://pos.nvncdn.net/5f3840-119888/pc/20220513_zkpCCVP6eEXSjLqlcKNuWCy4.png"
                     style="width: 100%;">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="box-product-home box-home">
            <div class="header">
                <h4>
                    <a href="">SẠC CÁP</a>
                </h4>
            </div>
            <div class="col-content lts-product">
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
            </div>
            <div class="ads">
                <img src="https://pos.nvncdn.net/5f3840-119888/pc/20221024_72dUQ662z6tY2ayj4eI82qKO.png"
                     style="width: 100%;">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="box-product-home box-home">
            <div class="header">
                <h4>
                    <a href="">PHỤ KIỆN</a>
                </h4>
            </div>
            <div class="col-content lts-product">
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
            </div>
            <div class="ads"></div>
        </div>
    </div>
    <div class="container">
        <div class="box-product-home box-home">
            <div class="header">
                <h4>
                    <a href="">PHỤ KIỆN</a>
                </h4>
            </div>
            <div class="col-content lts-product">
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>DỌN KHO</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
            </div>
            <div class="ads">
                <img src="https://pos.nvncdn.net/5f3840-119888/pc/20221024_bdeIWlfnpS7fHSIdICgwW3IW.png"
                     style="width: 100%;">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="box-product-home box-home">
            <div class="header">
                <h4>
                    <a href="">PIN DỰ PHÒNG</a>
                </h4>
            </div>
            <div class="col-content lts-product">
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>DỌN KHO</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
                <div class="item">
                    <div class="insurance"></div>
                    <div class="item_icon_box"></div>
                    <div class="checkInv">
                        <span>Hết hàng</span>
                    </div>
                    <div class="img __web-inspector-hide-shortcut__">
                        <a href="">
                            <img class="ls-is-cached lazyloaded"
                                 src="https://pos.nvncdn.net/5f3840-119888/ps/20230531_BHOU46DKsx.webp">
                        </a>
                    </div>
                    <div class="info">
                        <a class="title">Tai nghe Sinaaudio T20</a>
                        <span class="price">
                                <strong>329,000 ₫</strong>
                                <strike>529,000 ₫</strike>
                            </span>
                    </div>
                </div>
            </div>
            <div class="ads"></div>
        </div>
    </div>
</section>
<section class="news-section">
    <div class="container">
        <div class="news-home box-home">
            <div class="header">
                <h4><a href="/news">Tin công nghệ</a></h4>
            </div>
            <div class="col-content">
                <div class="item">
                    <div class="img col-md-4">
                        <a href="/chinh-sach-bao-hanh-n110655.html"><img
                                src="https://pos.nvncdn.net/5f3840-119888/art/20221101_eBQ5s9C1O3dJ0E3ITd80Uk07.png"
                                alt="Chính sách bảo hành"></a>
                    </div>
                    <p class="col-md-8">
                        <a href="/chinh-sach-bao-hanh-n110655.html">Chính sách bảo hành</a>
                    </p>
                </div>
                <div class="item">
                    <div class="img col-md-4">
                        <a href="/chinh-sach-chung-n119544.html"><img
                                src="https://pos.nvncdn.net/5f3840-119888/art/20230430_mtAaldJj.webp"
                                alt="CHÍNH SÁCH CHUNG"></a>
                    </div>
                    <p class="col-md-8">
                        <a href="/chinh-sach-chung-n119544.html">CHÍNH SÁCH CHUNG</a>
                    </p>
                </div>
                <div class="item">
                    <div class="img col-md-4">
                        <a href="/gioi-thieu-ve-lo-vu-n110821.html"><img
                                src="https://pos.nvncdn.net/5f3840-119888/art/20221104_9DTKas8XGQHJoR4Ld85xmgTz.png"
                                alt="Giới thiệu về Lỗ vũ"></a>
                    </div>
                    <p class="col-md-8">
                        <a href="/gioi-thieu-ve-lo-vu-n110821.html">Giới thiệu về Lỗ vũ</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="feedback-customer">
    <div class="container">
        <div class="news-home box-home">
            <div class="header">
                <h4><a href="javascript:;">FEEDBACK KHÁCH HÀNG</a></h4>
            </div>
        </div>
        <div class="testimonial">
            <div class="owl-carousel equaHeight testimonial-slider">
                <div class="testimonial-item">
                    <div class="item">
                        <div class="img col-md-5 col-3">
                            <img
                                src="https://pos.nvncdn.net/5f3840-119888/bn/20221115_j2d5PysdS79Pwt9fjpGYjihM.png">
                        </div>
                        <div class="info col-md-7 col-9">
                            <h3>Feedback2</h3>
                            <h4>
                                <p>Dịch vụ hậu mãi tuyệt vời</p>
                            </h4>
                            <div class="note"></div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="item">
                        <div class="img col-md-5 col-3">
                            <img
                                src="https://pos.nvncdn.net/5f3840-119888/bn/20221115_WpTFKRkHyFECLT1MpvCpoCRD.png">
                        </div>
                        <div class="info col-md-7 col-9">
                            <h3>Feedback1</h3>
                            <h4>
                                <p>Chất lượng sản phẩm tốt, giá thành hợp lý</p>
                            </h4>
                            <div class="note"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="policy-section">
    <div class="container">
        <div class="corevalue">
            <div class="item col-md-3">
                    <span class="icon">
                        <i class="far fa-check-circle"></i>
                    </span>
                <div class="text">
                    <span>Sản phẩm</span>
                    <strong>CHÍNH HÃNG</strong>
                </div>
            </div>
            <div class="item col-md-3">
                    <span class="icon">
                        <i class="fas fa-luggage-cart"></i>
                    </span>
                <div class="text">
                    <span>BẢO HÀNH 1 ĐỔI 1</span>
                    <strong>TOÀN QUỐC</strong>
                </div>
            </div>
            <div class="item col-md-3">
                    <span class="icon">
                        <i class="fas fa-user-headset"></i>
                    </span>
                <div class="text">
                    <span>Hotline hỗ trợ</span>
                    <strong>0333.15.15.15</strong>
                </div>
            </div>
            <div class="item col-md-3">
                    <span class="icon">
                        <i class="fas fa-sync"></i>
                    </span>
                <div class="text">
                    <span>Thủ tục đổi trả</span>
                    <strong>DỄ DÀNG</strong>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="newsletter-section">
    <div class="container">
        <div class="subscript">
            <div class="icon-text">
                <img src="img/sub-logo.png">
                <div class="text text-desktop">
                    <h4>Đăng ký nhận tin</h4>
                    <p>Đăng ký để nhận những chương trình khuyến mại hot nhất của Nhanh.vn</p>
                </div>
            </div>
            <div class="form">
                <div class="text text-mb">
                    <h4>Đăng ký nhận tin khuyến mãi</h4>
                </div>
                <form>
                    <div class="input">
                        <input type="email" id="contactFormEmail" placeholder="Nhập E-mail của bạn">
                    </div>
                    <button type="submit" id="contactFormSubmit"><i class="fab fa-telegram-plane"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>
<input type="hidden" class="checkCookies" value=''>
<footer>
    <div class="container">
        <div class="bg">
            <div class="col-content">
                <div class="link-content col-md-2">
                    <h4>
                        <a>
                            <p>VỀ CHÚNG TÔI</p>
                        </a>
                    </h4>
                    <p><span style="font-size:14px;"><a href="https://www.facebook.com/nguoibanlo">FANPAGE</a><br />
                                <a href="https://www.facebook.com/groups/651525088359345">CỘNG ĐỒNG KHÁCH HÀNG</a><br />
                                <a href="https://shope.ee/7zc7yW7KRW">SHOPEE</a><br />
                                <a href="https://www.tiktok.com/@vuabanlo"
                                   style="font-size:15px;text-indent:10px;">TIKTOK</a><br />
                                <a
                                    href="https://www.youtube.com/channel/UCYvKHkoXCGq1XA2nWFo-NDw">YOUTUBE</a></span><br />
                    </p>
                </div>
                <div class="link-content col-md-2">
                    <h4><a>HỖ TRỢ</a></h4>
                    <p><a href="/chinh-sach-chung-n119544.html">CHÍNH SÁCH CHUNG</a></p>
                    <p><a href="/chinh-sach-bao-hanh-n110655.html">BẢO HÀNH</a></p>
                    <p><a href="/giao-hang-doi-tra-n110656.html">GIAO HÀNG </a></p>
                    <p><a href="/chinh-sach-doi-tra-hoan-tien-n110658.html">TRẢ HÀNG HOÀN TIỀN</a></p>
                    <p><a href="/phuong-thuc-thanh-toan-n110657.html">THANH TOÁN</a></p>
                    <p><a href="/chinh-sach-bao-mat-thong-tin-n110659.html">BẢO MẬT THÔNG TIN</a></p>
                    <p><a href="/dieu-khoan-su-dung-website-n110660.html">ĐIỀU KHOẢN SỬ DỤNG</a></p>
                    <p><br /><br /></p>
                </div>
                <div class="link-content col-md-2">
                    <h4><a href="">LIÊN HỆ</a></h4>
                    <p>MUA HÀNG:<br /> 0333.15.15.15
                        <br /> KỸ THUẬT, BẢO HÀNH:<br /> 0816.00.88.00
                    </p>
                </div>
                <div class="col-md-2">
                    <h4>HOTLINE</h4>
                    <a class="hotline" href="tel:0333.15.15.15">0333.15.15.15</a>
                </div>
                <div class="col-md-2">
                    <h4>Thanh toán miễn phí</h4>
                    <div class="list-logo">
                        <img src="img/payment/logo-visa.png">
                        <img src="img/payment/logo-master.png">
                        <img src="img/payment/logo-jcb.png">
                        <img src="img/payment/logo-samsungpay.png">
                        <img src="img/payment/logo-atm.png">
                        <img src="img/payment/logo-vnpay.png">
                    </div>
                </div>
                <div class="mg-top20">
                    <a href="http://online.gov.vn/Home/WebDetails/101621" target="_blank">
                        <img src="img/bocongthuong.png">
                    </a>
                </div>
            </div>
        </div>
        <div class="about-bt-footer">
            <p style="text-align:center;"><span style="background-color:#FFFFFF;color:#000000;"><span
                        style="text-align:center;">Copyright © 2021 VELASBOOST</span></span><br /><span
                    style="background-color:#FFFFFF;color:#000000;"><span style="text-align:center;">Công ty TNHH
                            Velasboost - GPĐKKD 0109597994 tại Sở Kế Hoạch Đầu Tư Thành Phố HN ngày 15-4-2021. Địa chỉ:
                            Housing Office, số 17 ngõ 575 Đường Kim Mã, Phường Ngọc Khánh, Quận Ba Đình, Hà
                            Nội.</span></span><br /><span style="background-color:#FFFFFF;color:#000000;"><span
                        style="text-align:center;">Số điện thoại: 0368.123.123</span></span><br /><span
                    style="background-color:#FFFFFF;color:#000000;"><span style="text-align:center;">Người chịu
                            trách nhiệm: Lê Hải Vũ</span></span>
            </p>
        </div>
    </div>
    <div id="navSocial">
            <span class="social">
                <ul>
                    <li>
                        <span class="blue social-block">
                            <div class="face-block">
                                <p><a href="https://www.facebook.com/nguoibanlo">https://www.facebook.com/nguoibanlo</a>
                                </p>
                            </div>
                            <a href="">
                                <span><i class="icon-facebook"></i></span>
                            </a>
                        </span>
                    </li>
                    <li>
                        <span class="red social-block">
                            <div class="face-block">
                                <p><a href="">https://youtube.com/</a></p>
                            </div>
                            <a href="">
                                <span><i class="icon-youtube"></i></span>
                            </a>
                        </span>
                    </li>
                    <li>
                        <span class="rainbow social-block">
                            <div class="face-block">
                                <p><a href="">https://instagram.com/</a></p>
                            </div>
                            <a href="">
                                <span><i class="icon-instagram"></i></span>
                            </a>
                        </span>
                    </li>
                    <li>
                        <span class="black social-block">
                            <div class="face-block">
                                https://www.tiktok.com/@vuabanlo</div>
                            <a href="">
                                <span><i class="icon-tiktok"></i></span>
                            </a>
                        </span>
                    </li>
                </ul>
    </div>
    </div>
    <div class="phonering-alo-phone phonering-alo-green phonering-alo-show" id="phonering-alo-phoneIcon">
        <div class="phonering-alo-ph-circle"></div>
        <div class="phonering-alo-ph-circle-fill"></div>
        <a href="tel:0333.15.15.15" class="pps-btn-img" title="Liên hệ">
            <div class="phonering-alo-ph-img-circle"></div>
        </a>
    </div>
    </div>
</footer>
<div class="search-bg"></div><input type="hidden" class="fanpageId" value="">
<div id="fb-root"></div>
<div id="fb-customer-chat" class="fb-customerchat"></div>
<!-- <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "103005398881881");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v15.0'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script><input type="hidden" id="bussinessId" value="119888"><input type="hidden"
    value="K178aIDfNaPqoK7uDblJY9QxCqhRj9b0FjRjxHWj5SFuzCPrDITY4NbXq3J0enamPThkJLkVlVNEaJdTBMNpFsOE44F3o1q9Qas1N6GokFeJWeOKMN93Ah9qyrWCO26Kp7PHq2S9lMX8ke"
    id="uctk" name="uctk" /><input type="hidden" id="clienIp" value="113.185.110.118"><input type="hidden" value=""
    id="hasIdentity"> -->

<script>
    const buyBtns = document.querySelectorAll('.js-buy-ticker')
    const modal = document.querySelector('.js-modal')
    const modalContainer = document.querySelector('.js-modal-container')
    const modalClose = document.querySelector('.js-modal-close')

    const toggleModalBtn = document.querySelector('.js-toggle-modal');
    let currentModal = 1;
    const modal1 = document.querySelector('.modal-1');
    const modal2 = document.querySelector('.modal-2');
    // ham hien thi modal mua ve ( them class open vao modal)
    function showBuyTicket() {
        if (currentModal === 1) {
            modal1.classList.add('open');
        } else if (currentModal === 2) {
            modal2.classList.add('open');
        }
    }

    // ham an modal mua ve ( go bo class open vao modal)
    function hidenBuyTicket() {
        if (currentModal === 1) {
            modal1.classList.remove('open');
        } else if (currentModal === 2) {
            modal2.classList.remove('open');
        }
    }

    // lap qua từng thẻ button và nghe hành vi click
    for (const buyBtn of buyBtns) {
        buyBtn.addEventListener('click', showBuyTicket)
    }

    // nghe hanh vi click vaò nút button clode
    toggleModalBtn.addEventListener('click', function () {
        if (currentModal === 1) {
            hidenBuyTicket();
            currentModal = 2;
            showBuyTicket();
        } else if (currentModal === 2) {
            hidenBuyTicket();
            currentModal = 1;
            showBuyTicket();
        }
    });
    modalClose.addEventListener('click', hidenBuyTicket)

    modal.addEventListener('click', hidenBuyTicket)

    modalContainer.addEventListener('click', function (event) {
        event.stopPropagation()
    })
</script>
</body>

</html>
