<template>
     <section class="homepage-banner">
        <el-carousel indicator-position="outside" height="750px">            
            <el-carousel-item v-for="(item,i) in SlideData" :key="i" v-bind:style="{'background-image': 'url('+item.img+')'}" style="background-repeat: repeat; background-position: center; background-size: cover;">
                <div style="width: 100%;">
                    <!-- <img
                    width="100%"
                    :src="item.img"
                    alt="Home banner slide 1" class="home-banner"
                    style="object-fit: cover;">        -->
                </div>                
                <div class="banner-policy">
                    <div class="banner-policy__wrapper">
                        <a href="#" class="banner-policy__item" style="background-color: rgb(0,0,0,0.1);">
                            Miễn phí vận chuyển cho<br>
                            đơn hàng trên 200K
                        </a> <a href="#" class="banner-policy__item" style="background-color: rgb(0,0,0,0.1);">
                            60 ngày đổi trả vì<br>
                            bất kì lý do gì
                        </a> <a href="#" class="banner-policy__item" style="background-color: rgb(0,0,0,0.1);">
                            Đến tận nơi nhận hàng trả,<br>
                            hoàn tiền trong 24h
                        </a>
                    </div>
                </div>              
            </el-carousel-item>       
    </el-carousel>
    </section>
</template>
<script>
export default {
   data(){
        return {
            SlideData:[
                {img:'https://media.coolmate.me/cdn-cgi/image/width=1920,quality=90,format=auto/uploads/November2022/Banner-Coolmate-Active-opt-1s.jpg'},
                {img:'https://media.coolmate.me/cdn-cgi/image/width=1920,quality=90,format=auto/uploads/October2022/Hero-BST-Dong-ppp_21.jpeg'},
            ]
        }
   }
}
</script>

<style scoped>
  .el-carousel__item h3 {
    color: #475669;
    font-size: 18px;
    opacity: 0.75;
    line-height: 300px;
    margin: 0;
  }

  .el-carousel__item:nth-child(2n) {
    background-color: #99a9bf;
  }

  .el-carousel__item:nth-child(2n+1) {
    background-color: #d3dce6;
  }
</style>