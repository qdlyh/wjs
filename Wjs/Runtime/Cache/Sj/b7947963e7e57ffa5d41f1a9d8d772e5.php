<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <link rel="stylesheet" href="/Public/Sj/css/sjcp/sjcp.css">
        <link rel="stylesheet" href="/Public/Sj/css/cpnav.css">
        <link rel="stylesheet" href="/Public/Sj/css/swiper.min.css">
    <title>Document</title>
</head> 
<body>
<div class="home">
   <header class="head-top">
    <h2>慈园阁</h2>
   </header>

<section class="section1">
 <div class="device">
    <a class="arrow-left" href="#"></a> 
    <a class="arrow-right" href="#"></a>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide"> <img src="/Public/Sj/images/25162826.jpg"> </div>
        <div class="swiper-slide"> <img src="/Public/Sj/images/25162826.jpg"> </div>
        <div class="swiper-slide"> <img src="/Public/Sj/images/25162826.jpg"> </div>
        <div class="swiper-slide"> <img src="/Public/Sj/images/25162826.jpg"> </div>
      </div>
           <!-- 分页器 -->
    <div class="swiper-pagination swiper-pagination-black"></div>
    
    <!-- 导航按钮 
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>-->
    </div>
  </div>
 </section>
        <section class="section2">
             <div class="section2-top">  
                <h4><?php echo ($goods["goods_name"]); ?></h4>
                 <p><?php echo ($goods["goods_effect"]); ?></p>   
            <div class="section2-box">
                  <span>
                  <span class="section-rmb">￥</span><span class="section-jg"><?php echo ($goods["goods_price"]); ?></span>
                  </span>
                  <span class="section-yj">￥<?php echo ($goods["goods_prices"]); ?></span>
             </div>   
             </div>
                   <div id="section2-sx">
                        <span class="section2-span-sx">鼠</span>
                        <span class="section2-span-sx">牛</span>
                        <span class="section2-span-sx">虎</span>
                        <span class="section2-span-sx">兔</span>
                        <span class="section2-span-sx">龙</span>
                        <span class="section2-span-sx">蛇</span><br/>
                        <span class="section2-span-sx">马</span>
                        <span class="section2-span-sx">羊</span>
                        <span class="section2-span-sx">猴</span>
                        <span class="section2-span-sx">鸡</span>
                        <span class="section2-span-sx">狗</span>
                        <span class="section2-span-sx">猪</span>
                   </div>
        </section>

        <section class="section3">
                <?php echo ($goods["goods_remark"]); ?>     
        </section>

        <div class="section-bottom-btn">
             <a class="section-bottom-btn-kf" href="">
             <img src="/Public/Sj/images/151561615.png" alt="">
             <span>客服</span>
             </a>
             <a class="section-bottom-btn-gw" href="">
                 <img src="/Public/Sj/images/1561561561.png" alt="">
                 <span>购物车</span>
             </a>
             <span class="section-bottom-btn3">
             <a href="<?php echo U('/Sj/Cart/gwcart',array('id'=>$goods['goods_id']));?>">加入购物车</a>
             </span>
             <span class="section-bottom-btn4">
             <a class="section-bottom-btn4-a" href="" >立即奉请</a>
             </span>
        </div>

    </div>
         <script type="text/javascript" src="/Public/Sj/js/jquery-3.1.1.js"></script>
         <script src="/Public/Sj/js/swiper.min.js"></script>
         <script type="text/javascript">
            /* 生肖选择框 */
          var section2_sx = document.getElementById("section2-sx"); 
          var section2_span = section2_sx.getElementsByTagName("span"); 
             for(i = 0; i < section2_span.length; i++){ 
                  section2_span[i].index = i;
                  section2_span[i].onclick = function(){  
                    for(i = 0; i < section2_span.length; i++){ 
                        section2_span[i].className = '';                      
                    }   
                        section2_span[this.index].className = 'section2-sx-border';                  
                } 
            }

         $('.section-bottom-btn4-a').click(function(){
           if ($('#section2-sx').children('span').hasClass('section2-span-sx')){ 
               alert("请选择商品");
               return false;
           }else if ($('#section2-sx').children('span').hasClass('section2-sx-border')) {}
               alert('选择成功')
        })


    //轮播
      var swiper = new Swiper('.swiper-container', {
        pagination : '.swiper-pagination',
        paginationClickable :true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        autoplayDisableOnInteraction : false
    });
  /*$('.arrow-left').on('click', function(e){
    e.preventDefault()
    mySwiper.swipePrev()
  })
  $('.arrow-right').on('click', function(e){
    e.preventDefault()
    mySwiper.swipeNext()
  })*/
    </script>
</body>
</html>