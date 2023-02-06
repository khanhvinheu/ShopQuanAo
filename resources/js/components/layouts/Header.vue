<template>         
    <header class="site-header">
        <div class="header">
            <div class="header__inner">
                <div class="header__toggle">
                    <div class="">
                        <a href="#" rel-script="menu-toggle" @click="showMenuMobile=!showMenuMobile" class="menu-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="header__logo" style="display: flex; align-items: center;">
                    <a href="#">
                        <!-- LOGO -->
                        <img src="/img/logo.png" style="height: 50px;" alt="Logo Coolmate">
                    </a>
                </div>
                <div class="header__menu-mobile" rel-script="header-menu" v-bind:style="{'display':showMenuMobile?'none':'block', 'visibility':showMenuMobile?'unset':'unset','opacity':showMenuMobile?1:1}">
                    <div class="mobile--visible tablet--visible" style="display: none">
                        <div class="header-search-mobile" rel-script="header-search-content">
                            <form action="/collections" method="GET">
                                <div class="header-search__wrapper">
                                    <label class="header-search__field">
                                        <input type="text" name="keyword" rel-script="spotlight-search-control"
                                            placeholder="Tìm kiếm sản phẩm..."
                                            class="header-search__control one-whole" autocomplete="off">
                                    </label>
                                    <div class="header-search__filter">
                                        <button class="header-search__submit">
                                            <img src="https://www.coolmate.me/images/header/icon-search.svg"
                                                alt="Icon Search">
                                        </button>
                                    </div>
                                    <a href="#" class="header-search__close"
                                        rel-script="spotlight-search-close">
                                    </a>
                                </div>
                            </form>
                            <div class="spotlight-search">
                                <div class="spotlight-search__wrapper" rel-script="spotlight-search">
                                    <img src="https://www.coolmate.me/images/icons/loading.svg" class="loading">
                                </div>
                            </div>
                        </div>
                        <div class="nav-tab">
                            <div class="nav-tab__head">
                                <a href="#san-pham" class="nav-tab__title is-current" rel-script="nav-tab">
                                    Thời trang
                                </a>
                             
                            </div>
                            <div class="nav-tab__content" data-nav-tab="#san-pham">
                                <div class="nav-tab__label"
                                    style="flex-flow: column;align-items: flex-start;padding-bottom: 10px">
                                    <a href="/collections?itm_source=navbar">
                                        <b>Tất cả sản phẩm</b>
                                    </a>
                                </div>
                                <ul class="nav-tab__menu">
                                    <li class="nav__item">
                                        <a href="/collection/care-and-share?itm_source=navbar">
                                            <b>Care & Share</b>
                                        </a>
                                    </li>
                                    <li class="nav__item nav__item--has-child" rel-script="mobile-menu-toggle">
                                        <a href="#">
                                            Áo nam
                                        </a>
                                        <ul class="nav-child-menu" style="display: none;margin-top: 10px">
                                            <li>
                                                <a href="/collection/ao-nam1?itm_source=navbar">
                                                    <b>Áo nam</b>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/collection/ao-nam-dai-tay?itm_source=navbar">
                                                    Áo dài tay
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/collection/ao-thun-nam?itm_source=navbar">
                                                    Áo T-shirt
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/collection/ao-polo-nam?itm_source=navbar">
                                                    Áo Polo
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/collection/ao-so-mi-nam?itm_source=navbar">
                                                    Áo Sơ Mi
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/collection/ao-the-thao-nam?itm_source=navbar">
                                                    Áo Thể thao
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/collection/ao-khoac?itm_source=navbar">
                                                    Áo khoác
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav__item nav__item--has-child" rel-script="mobile-menu-toggle">
                                        <a href="#">
                                            Quần nam
                                        </a>
                                        <ul class="nav-child-menu" style="display: none;margin-top: 10px">
                                            <li>
                                                <a href="/collection/quan-nam?itm_source=navbar">
                                                    <b>Quần nam</b>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/collection/quan-lot-nam?itm_source=navbar">
                                                    Quần Lót Nam
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/collection/quan-short-nam?itm_source=navbar">
                                                    Quần Shorts
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/collection/quan-jeans-nam?itm_source=navbar">
                                                    Quần Jeans
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/collection/quan-dai-nam?itm_source=navbar">
                                                    Quần Dài
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav__item nav__item--has-child" rel-script="mobile-menu-toggle">
                                        <a href="#">
                                            Phụ kiện
                                        </a>
                                        <ul class="nav-child-menu" style="display: none;margin-top: 10px">
                                            <li>
                                                <a href="/collection/mu-luoi-trai?itm_source=navbar">
                                                    Mũ (Nón)
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/collection/tat-nam?itm_source=navbar">
                                                    Tất (Vớ)
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav__item nav__item--has-child" rel-script="mobile-menu-toggle">
                                        <a href="#">
                                            Bộ sưu tập
                                        </a>
                                        <ul class="nav-child-menu" style="display: none;margin-top: 10px">
                                            <li>
                                                <a href="/collection/vu-tru-ao-thun-marvel?itm_source=navbar">
                                                    <b>Vũ trụ áo Marvel </b>
                                                    <span class="nav-tab__sub">Bước vào thế giới siêu anh
                                                        hùng</span>
                                                </a>
                                            </li>
                                            <li class="nav-tab__item">
                                                <a href="/page/cleanvn?itm_source=navbar">
                                                    <b>Clean Vietnam</b>
                                                    <span class="nav-tab__sub">
                                                        Sự kết hợp giữa Coolmate & Vietmax
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-tab__item">
                                                <a href="/collection/coolmate-basics?itm_source=navbar">
                                                    <b>Coolmate Basics</b>
                                                    <span class="nav-tab__sub">
                                                        Mua sắm tiết kiệm với giá tốt
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/collection/san-pham-moi-ben-vung?itm_source=navbar">
                                                    <b>Sản phẩm bền vững</b>
                                                    <span class="nav-tab__sub">Sản phẩm thân thiện với môi
                                                        trường</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav__item nav__item--has-child" rel-script="mobile-menu-toggle">
                                        <a href="#">
                                            Nhu cầu
                                        </a>
                                        <ul class="nav-child-menu" style="display: none;margin-top: 10px">
                                            <li>
                                                <a href="/collection/bst-thu-dong1?itm_source=navbar">
                                                    <b>Đồ thu - đông <span
                                                            class="menu-tag menu-tag--sale">SALE</span></b>
                                                    <span class="nav-tab__sub">Fall-Winter Collection</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/collection/do-mac-trong-va-mac-nha?itm_source=navbar">
                                                    <b>Mặc ở nhà & Mặc trong</b>
                                                    <span class="nav-tab__sub">
                                                        Homewear & Underwear
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/collection/do-casual?itm_source=navbar">
                                                    <b>Mặc hằng ngày</b>
                                                    <span class="nav-tab__sub">
                                                        Casualwear
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/collection/coolmate-activewear?itm_source=navbar">
                                                    <b>Đồ thể thao</b>
                                                    <span class="nav-tab__sub">
                                                        Coolmate Active
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/collection/phu-kien-nam?itm_source=navbar">
                                                    <b>Phụ kiện</b>
                                                    <span class="nav-tab__sub">
                                                        Accessories
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav__item nav__item--has-child" rel-script="mobile-menu-toggle">
                                        <a href="#">
                                            Công nghệ
                                        </a>
                                        <ul class="nav-child-menu" style="display: none;margin-top: 10px">
                                            <li>
                                                <a href="/lp/dong-san-pham-excool?itm_source=navbar">
                                                    <b>Excool</b>
                                                    <span class="nav-tab__sub">
                                                        Công nghệ làm mát tối đa
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/page/cleandye#ldp-about?itm_source=navbar">
                                                    <b>Cleandye</b>
                                                    <span class="nav-tab__sub">10%
                                                        Nhuộm không dùng nước
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/lp/dong-san-pham-heiq-viroblock?itm_source=navbar">
                                                    <b>HeiQ Viroblock</b>
                                                    <span class="nav-tab__sub">
                                                        Diệt 99.99% virus SARS-CoV2
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/collection/san-pham-anti-smell?itm_source=navbar">
                                                    <b>Anti-Smell</b>
                                                    <span class="nav-tab__sub">Công nghệ khử mùi từ Nhật
                                                        Bản</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="nav-tab__content" data-nav-tab="#bo-suu-tap" style="display: none">
                                <ul class="nav-tab__menu">
                                    <li>
                                        <a href="/84rising?itm_source=navbar">
                                            <b>Tất cả</b>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/84rising?itm_source=navbar#T-shirt">
                                            <b>Áo Oversize</b><br>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/84rising?itm_source=navbar#Sweatshirt">
                                            <b>Áo Nỉ</b>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/84rising?itm_source=navbar#hoodie">
                                            <b>Áo Hoodie</b>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/84rising?itm_source=navbar#short-pants">
                                            <b>Quần Short</b>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/84rising?itm_source=navbar#Beanie">
                                            <b>Mũ len Beanie Short</b>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="nav-tab__content" data-nav-tab="#nhu-cau" style="display: none">
                                <ul class="nav-tab__menu">
                                    <li>
                                        <a href="/84rising?itm_source=navbar">
                                            <b>Tất cả</b>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/84rising?itm_source=navbar#T-shirt">
                                            <b>Áo Oversize</b><br>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/84rising?itm_source=navbar#Sweatshirt">
                                            <b>Áo Nỉ</b>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/84rising?itm_source=navbar#hoodie">
                                            <b>Áo Hoodie</b>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/84rising?itm_source=navbar#short-pants">
                                            <b>Quần Short</b>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/84rising?itm_source=navbar#Beanie">
                                            <b>Mũ len Beanie Short</b>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="nav-tab__content" data-nav-tab="#cong-nghe" style="display: none">
                                <ul class="nav-tab__menu">
                                    <li class="nav-tab__item">
                                        <a href="/lp/dong-san-pham-excool?itm_source=navbar">
                                            <b>Excool</b>
                                            <span class="nav-tab__sub">
                                                Công nghệ làm mát tối đa
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-tab__item">
                                        <a href="/page/cleandye#ldp-about?itm_source=navbar">
                                            <b>Cleandye</b>
                                            <span class="nav-tab__sub">10%
                                                Nhuộm không dùng nước
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-tab__item">
                                        <a href="/lp/dong-san-pham-heiq-viroblock?itm_source=navbar">
                                            <b>HeiQ Viroblock</b>
                                            <span class="nav-tab__sub">
                                                Diệt 99.99% virus SARS-CoV2
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-tab__item">
                                        <a href="/collection/san-pham-anti-smell?itm_source=navbar">
                                            <b>Anti-Smell</b>
                                            <span class="nav-tab__sub">Công nghệ khử mùi từ Nhật Bản</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="nav pdt--20">
                            <li class="nav__item">
                                <a
                                    href="/lp/coolxprint-mo-hinh-dat-san-xuat-theo-yeu-cau?itm_source=ab_xprint_x">
                                    CoolXPrint - Thiết kế theo yêu cầu
                                </a>
                            </li>
                            <li class="nav__item">
                                <a href="/size-chart?itm_source=navbar">
                                    Chọn Size
                                </a>
                            </li>
                            <li class="nav__item nav__item--has-child" rel-script="mobile-menu-toggle">
                                <a href="#">
                                    Về Coolmate
                                </a>
                                <ul class="nav-child-menu" style="display: none;margin-top: 10px">
                                    <li>
                                        <a href="/lp/coolmate-101?itm_source=navbar">
                                            Coolmate 101 - Gia nhập coolmate
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="/page/11-dich-vu-tai-coolmate-co-the-ban-chua-biet?itm_source=navbar">
                                            Dịch vụ 100% hài lòng
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="/page/coolclub-chuong-trinh-khach-hang-than-thiet-cua-coolmate?itm_source=navbar">
                                            CoolClub - Khách hàng thân thiết
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/page/coolmate-story?itm_source=navbar">
                                            Câu chuyện Coolmate
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav__item" rel-script="mega-menu">
                                <a href="/blog?itm_source=navbar">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </div>              
                </div>
                <div class="header__menu" rel-script="header-menu" style="display: block">
                    <div class="mobile--hidden tablet--hidden">
                        <ul class="nav">
                            <li class="nav__item has-child" rel-script="mega-menu">
                                <a href="/collections?itm_source=navbar" rel-script="mega-menu-open">
                                    Danh mục
                                </a>
                                <div class="mega-menu mega-menu--product">
                                    <a href="#" class="mega-menu__close" rel-script="mega-menu-close">Sản
                                        phẩm</a>
                                    <div class="mega-menu__wrapper">
                                        <div class="mega-menu__inner" style="max-width: 1000px">
                                            <!-- <div class="mega-menu__item" rel-script="mega-menu-item">
                                                <a href="#" class="mega-menu__title"
                                                    rel-script="mega-menu-toggle">Nhu cầu</a>
                                                <ul rel-script="mega-menu-active">
                                                    <li>
                                                        <a href="/collection/bst-thu-dong1?itm_source=navbar">
                                                            Đồ thu - đông <span
                                                                class="menu-tag menu-tag--sale">SALE</span>
                                                            <span
                                                                style="display: block;font-size: 80%;margin-top: -4%;font-weight: normal;width: 100%">Fall-Winter
                                                                Collection</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/collection/care-and-share?itm_source=navbar"
                                                            style="color: #2f5acf">
                                                            Care & Share
                                                            <span
                                                                style="display: block;font-size: 80%;margin-top: -4%;font-weight: normal;width: 100%">10%
                                                                doanh thu dành cho các bé</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="/collection/do-mac-trong-va-mac-nha?itm_source=navbar">
                                                            Mặc nhà & Mặc trong
                                                            <span
                                                                style="display: block;font-size: 80%;margin-top: -4%;font-weight: normal;width: 100%">Homewear
                                                                & Underwear</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/collection/do-casual?itm_source=navbar">
                                                            Mặc hàng ngày
                                                            <span
                                                                style="display: block;font-size: 80%;margin-top: -4%;font-weight: normal;width: 100%">Casualwear</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="/collection/coolmate-activewear?itm_source=navbar">
                                                            Đồ thể thao
                                                            <span
                                                                style="display: block;font-size: 80%;margin-top: -4%;font-weight: normal;width: 100%">Activewear</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/collection/phu-kien-nam?itm_source=navbar">
                                                            Phụ kiện
                                                            <span
                                                                style="display: block;font-size: 80%;margin-top: -4%;font-weight: normal;width: 100%">Accessories</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div> -->
                                            <div class="mega-menu__item" rel-script="mega-menu-item"
                                                style="flex: 0 0 33%">
                                                <a href="#" class="mega-menu__title"
                                                    rel-script="mega-menu-toggle">Danh mục</a>
                                                <div class="grid grid--two-columns">
                                                    <div class="grid__column" style="padding-top: 0">
                                                        <ul rel-script="mega-menu-active">
                                                            <li>
                                                                <a href="/collection/ao-nam1?itm_source=navbar">
                                                                    Áo Nam
                                                                </a>
                                                            </li>
                                                            <li class="mega-menu_child">
                                                                <a
                                                                    href="/collection/ao-nam-dai-tay?itm_source=navbar">
                                                                    Áo dài tay
                                                                </a>
                                                            </li>
                                                            <li class="mega-menu_child">
                                                                <a
                                                                    href="/collection/ao-thun-nam?itm_source=navbar">
                                                                    Áo T-shirt
                                                                </a>
                                                            </li>
                                                            <li class="mega-menu_child">
                                                                <a
                                                                    href="/collection/ao-polo-nam?itm_source=navbar">
                                                                    Áo Polo
                                                                </a>
                                                            </li>
                                                            <li class="mega-menu_child">
                                                                <a
                                                                    href="/collection/ao-so-mi-nam?itm_source=navbar">
                                                                    Áo Sơ Mi
                                                                </a>
                                                            </li>
                                                            <li class="mega-menu_child">
                                                                <a
                                                                    href="/collection/ao-the-thao-nam?itm_source=navbar">
                                                                    Áo Thể Thao
                                                                </a>
                                                            </li>
                                                            <li class="mega-menu_child">
                                                                <a
                                                                    href="/collection/ao-khoac?itm_source=navbar">
                                                                    Áo khoác
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!-- <ul rel-script="mega-menu-active">
                                                            <li>
                                                                <a
                                                                    href="/collection/tat-ca-phu-kien?itm_source=navbar">
                                                                    Phụ Kiện
                                                                </a>
                                                            </li>
                                                            <li class="mega-menu_child">
                                                                <a
                                                                    href="/collection/mu-luoi-trai?itm_source=navbar">
                                                                    Mũ (Nón)
                                                                </a>
                                                            </li>
                                                            <li class="mega-menu_child">
                                                                <a href="/collection/tat-nam?itm_source=navbar">
                                                                    Tất (Vớ)
                                                                </a>
                                                            </li>
                                                        </ul> -->
                                                    </div>
                                                    <!-- <div class="grid__column" style="padding-top: 0">
                                                        <ul rel-script="mega-menu-active">
                                                            <li>
                                                                <a
                                                                    href="/collection/quan-nam?itm_source=navbar">
                                                                    Quần Nam
                                                                </a>
                                                            </li>
                                                            <li class="mega-menu_child">
                                                                <a
                                                                    href="/collection/quan-short-nam?itm_source=navbar">
                                                                    Quần Shorts
                                                                </a>
                                                            </li>
                                                            <li class="mega-menu_child">
                                                                <a
                                                                    href="/collection/quan-jeans-nam?itm_source=navbar">
                                                                    Quần Jeans
                                                                </a>
                                                            </li>
                                                            <li class="mega-menu_child">
                                                                <a
                                                                    href="/collection/quan-dai-nam?itm_source=navbar">
                                                                    Quần Dài
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <ul rel-script="mega-menu-active">
                                                            <li>
                                                                <a
                                                                    href="/collection/quan-lot-nam?itm_source=navbar">
                                                                    Quần Lót Nam
                                                                </a>
                                                            </li>
                                                            <li class="mega-menu_child">
                                                                <a
                                                                    href="/collection/quan-lot-nam-tam-giac-brief?itm_source=navbar">
                                                                    Quần Brief (Tam giác)
                                                                </a>
                                                            </li>
                                                            <li class="mega-menu_child">
                                                                <a
                                                                    href="/collection/quan-lot-nam-boxer-trunk?itm_source=navbar">
                                                                    Quần Trunk (Boxer)
                                                                </a>
                                                            </li>
                                                            <li class="mega-menu_child">
                                                                <a
                                                                    href="/collection/quan-lot-nam-brief-boxer?itm_source=navbar">
                                                                    Quần Brief Boxer (Boxer dài)
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <ul rel-script="mega-menu-active">
                                                            <li>
                                                                <a href="/collections?itm_source=navbar"
                                                                    style="display: flex;align-items: center">
                                                                    <span>Tất cả sản phẩm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <!-- <div class="mega-menu__item" rel-script="mega-menu-item">
                                                <a href="#" class="mega-menu__title"
                                                    rel-script="mega-menu-toggle">Bộ Sưu Tập</a>
                                                <ul rel-script="mega-menu-active">

                                                    <li>
                                                        <a
                                                            href="/collection/vu-tru-ao-thun-marvel?itm_source=navbar">
                                                            Vũ trụ áo Marvel
                                                            <span
                                                                style="display: block;font-size: 80%;margin-top: -4%;font-weight: normal;width: 100%">Bước
                                                                vào thế giới siêu anh hùng</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/page/cleanvn?itm_source=navbar">
                                                            Clean Vietnam
                                                            <span
                                                                style="display: block;font-size: 80%;margin-top: -4%;font-weight: normal;width: 100%">Sự
                                                                kết hợp giữa Coolmate & Vietmax</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/collection/coolmate-basics?itm_source=navbar">
                                                            Coolmate Basics
                                                            <span
                                                                style="display: block;font-size: 80%;margin-top: -4%;font-weight: normal;width: 100%">Mua
                                                                sắm tiết kiệm với giá tốt</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="/collection/san-pham-moi-ben-vung?itm_source=navbar">
                                                            Sản phẩm bền vững
                                                            <span
                                                                style="display: block;font-size: 80%;margin-top: -4%;font-weight: normal;width: 100%">Sản
                                                                phẩm thân thiện với môi trường</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="mega-menu__item" rel-script="mega-menu-item">
                                                <a href="#" class="mega-menu__title"
                                                    rel-script="mega-menu-toggle">Công nghệ</a>
                                                <ul rel-script="mega-menu-active">
                                                    <li>
                                                        <a href="/lp/dong-san-pham-excool?itm_source=navbar">
                                                            Excool
                                                            <span
                                                                style="display: block;font-size: 80%;margin-top: -4%;font-weight: normal;width: 100%">Công
                                                                nghệ làm mát tối đa</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/page/cleandye#ldp-about?itm_source=navbar">
                                                            Cleandye
                                                            <span
                                                                style="display: block;font-size: 80%;margin-top: -4%;font-weight: normal;width: 100%">Nhuộm
                                                                không dùng nước</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="/lp/dong-san-pham-heiq-viroblock?itm_source=navbar">
                                                            HeiQ Viroblock
                                                            <span
                                                                style="display: block;font-size: 80%;margin-top: -4%;font-weight: normal;width: 100%">Diệt
                                                                99.99% virus SARS-CoV2</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="/collection/san-pham-anti-smell?itm_source=navbar">
                                                            Anti-Smell
                                                            <span
                                                                style="display: block;font-size: 80%;margin-top: -4%;font-weight: normal;width: 100%">Công
                                                                nghệ khử mùi từ Nhật Bản</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav__item has-child" rel-script="mega-menu">
                                <a href="/84rising?itm_source=navbar">
                                    Quần áo nam
                                </a>
                            </li>
                            <li class="nav__item has-child" rel-script="mega-menu">
                                <a href="/cm24?itm_source=navbar" style="position: relative">
                                    Sản phẩm bán chạy
                                    <span
                                        style="width: 5px;height: 5px;border-radius: 100vmax;background-color: #2F5ACF;position: absolute;top: 0;left: 100%;margin-left: 2px"></span>
                                </a>
                            </li>
                            <li class="nav__item">
                                <a href="/lp/coolxprint-mo-hinh-dat-san-xuat-theo-yeu-cau?itm_source=navbar">
                                    Giới thiệu
                                </a>
                            </li>
                            <li class="nav__item">
                                <a href="/blog?itm_source=navbar">
                                    Blog
                                </a>
                            </li>
                            <li class="nav__item has-child" rel-script="mega-menu">
                                <a href="/page/coolmate-story?itm_source=navbar" rel-script="mega-menu-open">
                                    Liên hệ
                                </a>
                                <div class="mega-menu">
                                    <a href="#" class="mega-menu__close" rel-script="mega-menu-close">Về
                                        Coolmate</a>
                                    <div class="mega-menu__wrapper">
                                        <div class="mega-menu__inner" style="max-width: 1200px;">
                                            <div class="mega-menu__item" rel-script="mega-menu-item">
                                                <a href="#" class="mega-menu__titles"
                                                    rel-script="mega-menu-toggle">Coolmate</a>
                                                <div rel-script="mega-menu-active">
                                                    <div class="grid">
                                                        <a class="grid__column three-twelfths mobile--one-half"
                                                            href="/lp/coolmate-101?itm_source=navbar">
                                                            <div class="mega-menu__thumbnail"
                                                                style="border-radius: 1.5em;overflow: hidden">
                                                                <img src="https://www.coolmate.me/images/placeholder-image.png"
                                                                    data-src="https://mcdn.coolmate.me/image/August2022/mceclip0_97.jpg"
                                                                    alt="Coolmate 101">
                                                            </div>
                                                            <div style="line-height: 1.25em;margin-top: 10px;">
                                                                <span style="font-size: 13px;">Coolmate 101
                                                                </span><br>
                                                                <span
                                                                    style="font-size: 11px;font-weight: 300">Tất
                                                                    cả những gì bạn muốn biết về
                                                                    Coolmate!<br class="mobile--hidden"> và gia
                                                                    nhập Coolmate</span>
                                                            </div>
                                                        </a>
                                                        <a class="grid__column three-twelfths mobile--one-half"
                                                            href="/page/11-dich-vu-tai-coolmate-co-the-ban-chua-biet?itm_source=navbar">
                                                            <div class="mega-menu__thumbnail"
                                                                style="border-radius: 1.5em;overflow: hidden">
                                                                <img src="https://www.coolmate.me/images/placeholder-image.png"
                                                                    data-src="https://mcdn.coolmate.me/image/August2022/mceclip1_92.jpg"
                                                                    alt="Dịch vụ 100% hài lòng">
                                                            </div>
                                                            <div style="line-height: 1.25em;margin-top: 10px;">
                                                                <span style="font-size: 13px;">Dịch vụ 100% hài
                                                                    lòng</span><br>
                                                                <span
                                                                    style="font-size: 11px;font-weight: 300">Bật
                                                                    mí 11 dịch vụ Coolmate cam
                                                                    kết với khách hàng</span>
                                                            </div>
                                                        </a>
                                                        <a class="grid__column three-twelfths mobile--one-half"
                                                            href="/page/coolclub-chuong-trinh-khach-hang-than-thiet-cua-coolmate?itm_source=navbar">
                                                            <div class="mega-menu__thumbnail"
                                                                style="border-radius: 1.5em;overflow: hidden">
                                                                <img src="https://www.coolmate.me/images/placeholder-image.png"
                                                                    data-src="https://mcdn.coolmate.me/image/August2022/mceclip2_100.jpg"
                                                                    alt="Coolclub - Khách hàng thân thiết">
                                                            </div>
                                                            <div style="line-height: 1.25em;margin-top: 10px;">
                                                                <span style="font-size: 13px;">Coolclub - Khách
                                                                    hàng thân thiết</span><br>
                                                                <span
                                                                    style="font-size: 11px;font-weight: 300">Những
                                                                    ưu đãi hấp dẫn dành cho
                                                                    khách hàng thân thiết</span>
                                                            </div>
                                                        </a>
                                                        <a class="grid__column three-twelfths mobile--one-half"
                                                            href="/page/coolmate-story?itm_source=navbar">
                                                            <div class="mega-menu__thumbnail"
                                                                style="border-radius: 1.5em;overflow: hidden">
                                                                <img src="https://www.coolmate.me/images/placeholder-image.png"
                                                                    data-src="https://mcdn.coolmate.me/image/August2022/mceclip3_34.jpg"
                                                                    alt="Câu chuyện">
                                                            </div>
                                                            <div style="line-height: 1.25em;margin-top: 10px;">
                                                                <span style="font-size: 13px;">Câu
                                                                    chuyện</span><br>
                                                                <span
                                                                    style="font-size: 11px;font-weight: 300">Về
                                                                    Startup với mô hình Online
                                                                    D2C</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
              
                </div>
                <div class="header__actions">
                    <div class="header-actions__button mobile--hidden">
                        <a href="#" rel-script="header-search">
                            <img src="https://www.coolmate.me/images/header/icon-search.svg" alt="Icon Search">
                        </a>
                    </div>
                    <!-- <header-user-icon></header-user-icon> -->
                    <div class="header-actions__button">
                        <a href="https://www.coolmate.me/cart">
                            <!-- <img src="https://www.coolmate.me/images/header/icon-cart-white.svg"
                                alt="Icon mini cart" class="hover"  style="padding-bottom: -10px !important;"> -->
                            <img src="https://www.coolmate.me/images/header/icon-cart.svg" style="padding-bottom: 0px;" alt="Icon mini cart">
                        </a>
                        <span class="counts">2</span>
                        <div class="header-actions__menu">
                            <div class="header-actions__inner">
                                <div class="header-actions__menu">
                                    <div class="header-actions__inner">
                                        <div data-v-5062b04f="" class="mini-cart">
                                            <div data-v-5062b04f="" class="mini-cart__wrapper">
                                                <div data-v-5062b04f="" class="mini-cart__header"><span data-v-5062b04f="">
                                                        2 sản phẩm
                                                    </span> <a data-v-5062b04f="" href="/cart">
                                                        Xem tất cả
                                                    </a></div> <!---->
                                                <div data-v-5062b04f="" class="mini-cart__item">
                                                    <div data-v-5062b04f="" class="mini-cart__item-thumbnail"><img data-v-5062b04f=""
                                                            src="https://media.coolmate.me/cdn-cgi/image/width=160,height=181,quality=80/image/August2022/Polo_v2_xanh_ngoc_1234.jpg"
                                                            alt="Áo Polo thể thao nam Recycle Active V2"></div>
                                                    <div data-v-5062b04f="" class="mini-cart__item-content"><span data-v-5062b04f=""
                                                            class="mini-cart__remove">✕</span>
                                                        <div data-v-5062b04f="" class="mini-cart__item-title"><a data-v-5062b04f=""
                                                                href="/product/ao-polo-the-thao-nam-recycle-active-v2" target="_blank">
                                                                Áo Polo thể thao nam Recycle Active V2
                                                            </a></div>
                                                        <div data-v-5062b04f="" class="mini-cart__item-variant-info">
                                                            Xanh ngọc / S
                                                        </div>
                                                        <div data-v-5062b04f=""><span data-v-5062b04f="" class="mini-cart__item-price">
                                                                249.000đ
                                                            </span> <!----></div>
                                                        <div data-v-5062b04f=""><span data-v-5062b04f="" class="mini-cart__item-quantity">
                                                                x1
                                                            </span></div>
                                                    </div>
                                                </div>
                                                <div data-v-5062b04f="" class="mini-cart__item">
                                                    <div data-v-5062b04f="" class="mini-cart__item-thumbnail"><img data-v-5062b04f=""
                                                            src="https://media.coolmate.me/cdn-cgi/image/width=160,height=181,quality=80/image/September2022/tee_recycle_v2_xanh_navy_4.jpg"
                                                            alt="Áo thun thể thao nam Recycle Active V2"></div>
                                                    <div data-v-5062b04f="" class="mini-cart__item-content"><span data-v-5062b04f=""
                                                            class="mini-cart__remove">✕</span>
                                                        <div data-v-5062b04f="" class="mini-cart__item-title"><a data-v-5062b04f=""
                                                                href="/product/ao-thun-the-thao-nam-recycle-active-v2" target="_blank">
                                                                Áo thun thể thao nam Recycle Active V2
                                                            </a></div>
                                                        <div data-v-5062b04f="" class="mini-cart__item-variant-info">
                                                            Xanh Navy / XL
                                                        </div>
                                                        <div data-v-5062b04f=""><span data-v-5062b04f="" class="mini-cart__item-price">
                                                                159.000đ
                                                            </span> <!----></div>
                                                        <div data-v-5062b04f=""><span data-v-5062b04f="" class="mini-cart__item-quantity">
                                                                x1
                                                            </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <mini-cart></mini-cart> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="header-search mobile--hidden" rel-script="header-search-content">
                    <form action="https://www.coolmate.me/spotlight" method="GET">
                        <div class="header-search__wrapper">
                            <label class="header-search__field">
                                <input type="text" name="keyword" rel-script="spotlight-search-control"
                                    placeholder="Tìm kiếm sản phẩm..." class="header-search__control one-whole"
                                    autocomplete="off">
                            </label>
                            <div class="header-search__filter">
                                <button class="header-search__submit">
                                    <img src="https://www.coolmate.me/images/header/icon-search.svg"
                                        alt="Icon Search">
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="spotlight-search">
                        <div class="spotlight-search__wrapper" rel-script="spotlight-search">
                            <img src="https://www.coolmate.me/images/icons/loading.svg" class="loading">
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </header>   
</template>
<script>
    export default {
        name: 'AppHeader',
        data() {
           return {
            showMenuMobile:true
           }
        },
        methods: {
         
        }
    }
</script>
<style scoped>
.header-actions__menu {
    position: absolute;
    top: 100%;
    right: 0;
    padding-top: 5px;
    opacity: 0;
    pointer-events: none;
    visibility: hidden;
    transition: all .3s;
}
.header-actions__inner {
    background-color: #fff;
    border-radius: 16px;
    box-shadow: 0 0 10px 0 rgb(0 0 0 / 7%);
    border: 1px solid #d9d9d9;
}
.mini-cart {
    padding: 1rem;
    width: 400px;
}
.mini-cart__header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
}
.mini-cart__item{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    cursor: pointer;
    font-size: .8rem;
}
.mini-cart__item-thumbnail{
    margin-right: 1rem;
}
.mini-cart__item-content{
    flex: 1;
    height: 100%;
    position: relative;
    padding-right: 20px;
}
.mini-cart__remove{
    position: absolute;
    top: 0;
    right: 0;
}

.mini-cart__item-title{
    font-weight: bold;
    transition: .2s all;
}
</style>