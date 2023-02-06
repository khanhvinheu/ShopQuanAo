<template>
  <div>
    <main class="site-homepage">       
                <HomePageBannerVue/>         
                <section class="homepage-search">
                    <div class="container container--medium">
                        <div class="homepage-search__wrapper">
                            <h2 class="homepage-search__heading">Bạn tìm gì hôm nay?</h2>
                            <div class="homepage-search__inner">
                                <form action="/spotlight" method="GET"><input type="text" name="keyword"
                                        placeholder="Hãy thử bắt đầu với &quot;Quần đen&quot; xem sao"
                                        rel-script="spotlight-search-control-home" class="homepage-search__control">
                                </form>
                                <div class="homepage-search__spotlight">
                                    <div rel-script="spotlight-search-home" class="homepage-search__spotlight-content">
                                        <img src="https://www.coolmate.me/images/icons/loading.svg" class="loading">
                                    </div> <a href="#" class="homepage-search__more">Xem toàn bộ kết quả</a>
                                </div>
                            </div>
                            <div class="homepage-search__content">
                                <p class="homepage-search__description">Hãy thử tìm bất kỳ từ khoá nào nhé. Coolmate gợi
                                    ý nè:</p>
                                <div class="homepage-search__buttons"><a href="#" rel-script="homepage-search-button"
                                        class="homepage-search__button">áo thun</a> <a href="#"
                                        rel-script="homepage-search-button" class="homepage-search__button"> hoodie</a>
                                    <a href="#" rel-script="homepage-search-button" class="homepage-search__button">
                                        oversize</a> <a href="#" rel-script="homepage-search-button"
                                        class="homepage-search__button"> cm24</a> <a href="#"
                                        rel-script="homepage-search-button" class="homepage-search__button"> promax</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <HomePageProduct/>
                <!-- <div class="container container--full mgt--20">
                    <div class="home-collection__banner"><a href="/cm24?itm_source=homepage-section">
                            <picture style="width: 100%;">
                                <source media="(max-width:768px)"
                                    srcset="https://mcdn.coolmate.me/image/February2023/mceclip1_28.jpg"> <img
                                    src="https://mcdn.coolmate.me/image/February2023/mceclip0_88.jpg" alt="Image"
                                    width="100%" style="">
                            </picture>
                        </a></div>
                </div>            -->
                <!-- <section class="homepage-excool">
                    <div class="container">
                        <div class="about-card">
                            <div class="about-card__content">
                                <h2 class="about-card__heading">
                                    Dòng sản phẩm công nghệ EXCOOL
                                </h2>
                                <div class="about-card__description">
                                    <p>
                                        Công nghệ Việt cho người Việt.<br>
                                        Với hơn <b>100.000</b> sản phẩm đã được gửi đến tay khách hàng sử dụng và hài
                                        lòng
                                    </p>
                                </div>
                                <div class="about-card__button"><a href="/lp/dong-san-pham-excool?itm_source=home"
                                        class="btn btn--white">
                                        Tìm hiểu thêm
                                    </a></div>
                            </div>
                            <div class="about-card__image">
                                <picture>
                                    <source media="(min-width:768px)"
                                        srcset="https://mcdn.coolmate.me/uploads/January2022/ao_(1)_1_(1)_(1).jpg"> <img
                                        src="https://mcdn.coolmate.me/uploads/February2022/ao_1_(1).jpg" alt="Image"
                                        style="">
                                </picture>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="homepage-coolclub animations-active">
                    <div class="container container--medium">
                        <div class="coolclub-abouts">
                            <h2 class="coolclub-abouts__heading">
                                Coolmate Basics
                            </h2>
                            <div class="coolclub-abouts__wrapper">
                                <div class="coolclub-abouts__content">
                                    <div class="coolclub-abouts__box"><a
                                            href="/product/ao-thun-nam-cotton-coolmate-basics-200gsm?color=mau-den&amp;itm_source=home_basics"><img
                                                src="https://mcdn.coolmate.me/image/January2023/mceclip9_22.png"
                                                alt="Coolmate Basics 1" style=""></a></div>
                                    <div class="coolclub-abouts__box"><a
                                            href="/product/ao-ba-lo-cotton-100-coolmate-basics-v2?color=trang&amp;itm_source=home_basics"><img
                                                src="https://mcdn.coolmate.me/image/September2022/mceclip1_11.png"
                                                alt="Coolmate Basics 2" style=""></a></div>
                                    <div class="coolclub-abouts__box"><a
                                            href="/product/ao-the-thao-nam-promax-recycle-basics1?itm_source=home_basics"><img
                                                src="https://mcdn.coolmate.me/uploads/January2022/CoolmateBasic3.png"
                                                alt="Coolmate Basics 3" style=""></a></div>
                                    <div class="coolclub-abouts__box"><a
                                            href="/product/quan-short-mac-nha-coolmate-basics?itm_source=home_basics"><img
                                                src="https://mcdn.coolmate.me/uploads/February2022/Mask_Group_(2).png"
                                                alt="Coolmate Basics 4" style=""></a></div>
                                    <div class="coolclub-abouts__box coolclub-abouts__box--last"><a
                                            href="/product/quan-lot-nam-brief-coolmate-basics?itm_source=home_basics&amp;color=xanh-navy"><img
                                                src="https://mcdn.coolmate.me/uploads/January2022/CoolmateBasic4.png"
                                                alt="Coolmate Basics 5" style=""></a></div>
                                </div> <a href="#" rel-script="coolclub-abouts-scroll"
                                    class="coolclub-abouts__scroll"><img
                                        src="https://www.coolmate.me/images/arrow-right.svg" alt="Arrow rigth"></a>
                            </div>
                            <p class="text--center" style="letter-spacing: 0.03em;">Dòng sản phẩm mặc cơ bản <span
                                    style="color: rgb(47, 90, 207);">chất lượng tốt</span> và <span
                                    style="color: rgb(47, 90, 207);">giá tốt</span>
                                của Coolmate</p>
                            <div class="coolclub-abouts__button"><a href="/collection/coolmate-basics?itm_source=home"
                                    class="btn btn--primary">
                                    Trải nghiệm
                                </a></div>
                        </div>
                    </div>
                </section>
                <section class="homepage-collections">
                    <div class="container container--full">
                        <div class="grid">
                            <div class="grid__column three-twelfths mobile--one-half"><a
                                    href="/collection/do-mac-trong-va-mac-nha?itm_source=home-cat-banner"
                                    class="collection-grid">
                                    <div class="collection-grid__thumbnail"><img
                                            src="https://mcdn.coolmate.me/image/June2022/mceclip0_43.jpg"
                                            alt="Đồ mặc trong" style=""></div> <span class="collection-grid__title">
                                        Đồ Mặc Trong
                                    </span>
                                </a></div>
                            <div class="grid__column three-twelfths mobile--one-half"><a
                                    href="/collection/do-casual?itm_source=home-cat-banner" class="collection-grid">
                                    <div class="collection-grid__thumbnail"><img
                                            src="https://mcdn.coolmate.me/image/June2022/mceclip0_99.jpg"
                                            alt="Đồ mặc trong" style=""></div> <span class="collection-grid__title">
                                        Mặc hàng ngày
                                    </span>
                                </a></div>
                            <div class="grid__column three-twelfths mobile--one-half"><a
                                    href="/collection/coolmate-activewear?itm_source=home-cat-banner"
                                    class="collection-grid">
                                    <div class="collection-grid__thumbnail"><img
                                            src="https://mcdn.coolmate.me/image/June2022/mceclip1_56.jpg"
                                            alt="Đồ mặc trong" style=""></div> <span class="collection-grid__title">
                                        Đồ thể thao
                                    </span>
                                </a></div>
                            <div class="grid__column three-twelfths mobile--one-half"><a
                                    href="/collections?itm_source=home-cat-banner" class="collection-grid">
                                    <div class="collection-grid__thumbnail"><img
                                            src="https://mcdn.coolmate.me/image/June2022/mceclip1_61.jpg"
                                            alt="Đồ mặc trong" style=""></div> <span class="collection-grid__title">
                                        Tất Cả
                                    </span>
                                </a></div>
                        </div>
                    </div>
                </section>
                <section class="homepage-about">
                    <div class="container">
                        <div class="about-card">
                            <div class="about-card__image" style="position: relative; z-index: 1;">
                                <picture>
                                    <source media="(max-width:768px)"
                                        srcset="https://mcdn.coolmate.me/image/June2022/mceclip2_87.png"> <img
                                        src="https://mcdn.coolmate.me/image/June2022/mceclip2_87.png"
                                        alt="Dịch vụ xuất sắc" style="">
                                </picture>
                            </div>
                            <div class="about-card__content">
                                <h2 class="about-card__heading">
                                    Trải nghiệm mua sắm hài lòng với
                                    #Coolmate
                                </h2>
                                <div class="about-card__description">
                                    <p>
                                        Giá cả hợp lý<br>
                                        Dịch vụ 100% hài lòng<br>
                                        60 ngày đổi trả<br>
                                        Tự hào sản xuất tại Việt Nam
                                    </p>
                                </div>
                                <div class="about-card__button"><a
                                        href="/page/11-dich-vu-tai-coolmate-co-the-ban-chua-biet?itm_source=home"
                                        class="btn btn--white">
                                        Tìm hiểu thêm
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="homepage-more">
                    <div class="container">
                        <div class="homepage-more__captions">
                            <marquee>
                                <p><b>CoolClub</b> - Ưu đãi <b>nhiều hơn</b>, mua sắm vui hơn. Nhận ngay <b>ưu đãi
                                        7%</b> cho
                                    lần mua sắm tiếp theo</p>
                            </marquee> <a
                                href="/page/coolclub-chuong-trinh-khach-hang-than-thiet-cua-coolmate?itm_source=home"
                                class="homepage-more__button">
                                Gia nhập ngay
                            </a>
                        </div>
                        <div class="grid">
                            <div class="grid__column one-half mobile--one-whole" style="position: relative;">
                                <div class="infomation-card">
                                    <div class="infomation-card__thumbnail"><a
                                            href="/page/coolmate-story?itm_source=home"><img
                                                src="https://mcdn.coolmate.me/image/January2023/mceclip3_94.jpg"
                                                alt="Dịch vụ xuất sắc" style=""></a></div>
                                </div>
                            </div>
                            <div class="grid__column one-half mobile--one-whole">
                                <div class="infomation-card">
                                    <div class="infomation-card__thumbnail"><a
                                            href="/page/11-dich-vu-tai-coolmate-co-the-ban-chua-biet?itm_source=home"><img
                                                src="https://mcdn.coolmate.me/image/January2023/mceclip2_30.jpg"
                                                alt="Dịch vụ xuất sắc" style=""></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
            </main>
  </div>
</template>
<script>
import HomePageBannerVue from './HomePageBanner.vue';    
import HomePageProduct from './HomePageProduct.vue';    

export default {
    name: 'HomePage',
    components: {
        HomePageBannerVue,HomePageProduct
    },
}
 
</script>