<template>
    <div style="padding-left: 40px; padding-right: 40px">
        <VueSlickCarousel v-bind="setting">
            <div v-for="item in 10">
                <div class="home__page-product">
                    <div class="product__item">
                    </div>
                    <div class="product-list__size">
                        <div class="product-size__item">X</div>
                        <div class="product-size__item">XL</div>
                        <div class="product-size__item">XXL</div>
                        <div class="product-size__item">S</div>
                    </div>
                    <div data-collection-tag="" class="product-grid__content">
                        <div class="product-grid__options">
                            <div class="options-color">
                                <div class="option-color__item">
                                    <span class="checkmark"></span>
                                </div>
                                <div class="option-color__item">
                                    <span class="checkmark"></span>
                                </div>
                                <div class="option-color__item">
                                    <span class="checkmark"></span>
                                </div>
                                <div class="option-color__item">
                                    <span class="checkmark"></span>
                                </div>
                            </div>
                        </div>
                        <h3 class="product-grid__title"><a
                                href="https://www.coolmate.me/product/quan-ni-nam-jogger-casual-co-gian?itm_source=home-highlight-product"
                                rel-script="product-title" tabindex="0">
                                Quần nỉ nam Jogger Casual co giãn
                            </a></h3>
                        <div class="product-grid__prices">
                            <div rel-script="product-price" data-price="299000" data-compare-price="299000" data-sale="1"
                                class="product-prices"><span style="color: red; margin-left: 10px;">-27%</span>
                                <del>299.000đ</del>
                                <ins>219.000đ </ins>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </VueSlickCarousel>        
    </div>
</template>

<script>
  import VueSlickCarousel from 'vue-slick-carousel'
//   optional style for arrows & dots
  import 'vue-slick-carousel/dist/vue-slick-carousel.css'
//   optional style for arrows & dots
  import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'
export default {
    components:{
        VueSlickCarousel
    },
    data(){
        return{
            setting:{
                "dots": false,
                "infinite": false,
                "speed": 500,
                "slidesToShow": 4,
                "slidesToScroll":4,
                "initialSlide":2,
                "swipeToSlide": true,
                "responsive": [
                     {
                    "breakpoint": 1600,
                    "settings": {
                        "slidesToShow": 3,
                        "slidesToScroll": 3,
                        "infinite": true,
                        "dots": true
                    }
                    },
                    {
                    "breakpoint": 1024,
                    "settings": {
                        "slidesToShow": 2,
                        "slidesToScroll": 2,
                        "infinite": true,
                        "dots": true
                    }
                    },
                   
                    {
                    "breakpoint": 600,
                    "settings": {
                        "slidesToShow": 1,
                        "slidesToScroll": 1,
                        "initialSlide":1
                    }
                    },
                    {
                    "breakpoint": 480,
                    "settings": {
                        "slidesToShow": 1,
                        "slidesToScroll": 1
                    }
                    }
                ]
            }
        }
    }
}
</script>

<style>
.slick-prev:before, .slick-next:before {
    color: black;
}
.home__page-product:hover .product-list__size  {
    visibility: visible;
    pointer-events: visible;
    transform: translateZ(0);
    opacity: 1;
}

.product-list__size{
    width: 100%;
    padding: 5px;
    position: absolute;
    z-index: 9;
    bottom: 80px;
    display: flex;
    visibility: hidden;
    transform: translate3d(0,20px,0);
    transition: all .3s;
    opacity: 0;
}

.product-size__item{
    width: 40px;
    height: 30px;
    background-color: #fff;    
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    border-radius: 5px;
    margin-right: 5px;
}
.home__page-product{
    height: 700px;
    /* width: 250px; */
    position: relative;
    z-index: 1;
}
.product__item{   
    width: 100%;
    height: calc(100% - 60px);
    background-color: beige;
    background-image: url('https://media.coolmate.me/cdn-cgi/image/width=672,height=990,quality=85,format=auto/uploads/January2023/jogger-casual-xam-nhat2_60.jpg');
    background-size: cover;
    background-position: center;
    border-radius: 10px;
    transition: all linear;
}
.product__item:hover{  
    background-image: url('https://media.coolmate.me/cdn-cgi/image/width=672,height=990,quality=85,format=auto/uploads/September2022/jogger-casual-xam-nhat1_79.jpg') ;
}

.home__page-product{
    padding: 10px;
}
.product__list-color{
    margin-top: 10px;
    height: 20px;
    width: 100%;  
    display: flex;
}
.color__item{
    height: 20px;
    width:35px;
    background-color: black;
    border: 1px solid rgb(0, 0, 0, 0.2);
    border-radius: 8px;
    margin-right: 5px;
}
.product-size__item:hover{
    background-color: #000;
    color: #fff;
}
</style>