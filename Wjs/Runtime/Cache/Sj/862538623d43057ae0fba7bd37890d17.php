<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <link rel="stylesheet" href="/Public/Sj/css/index.css">
        <link rel="stylesheet" href="/Public/Sj/css/swiper.min.css">
    <title>慈园阁</title>
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
    
    <!-- 导航按钮 -->
    <!--<div class="swiper-button-prev swiper-button-white"></div>
    <div class="swiper-button-next swiper-button-white"></div>-->
    </div>
  </div>
</section>
    <section class="section2">
             <div class="section2-box-1">

                  <div class="section2-box">
                        <a href=""><img src="/Public/Sj/images/1.jpg"></a> 
                        <a href="">电视</a>
                  </div>

                    <div class="section2-box">
                        <a href=""><img src="/Public/Sj/images/1.jpg"></a> 
                        <a href="">电视</a>
                    </div>
                    
                    <div class="section2-box">
                        <a href=""><img src="/Public/Sj/images/1.jpg"></a> 
                        <a href="">电视</a>
                    </div>
            
                </div>

               <div class="section2-box-2">

                    <div class="section2-box">
                        <a href=""><img src="/Public/Sj/images/1.jpg"></a> 
                        <a href="">电视</a>
                    </div>

                    <div class="section2-box">
                        <a href=""><img src="/Public/Sj/images/1.jpg"></a> 
                        <a href="">电视</a>
                    </div>
                    
                    <div class="section2-box">
                        <a href=""><img src="/Public/Sj/images/1.jpg"></a> 
                        <a href="">电视</a>
                    </div>
            
                </div>
    </section>
        <section class="section3">
                <div class="section3-box">
                  <div class="section3-tab"> 
                    <ul id="section3-tab">  
                      <li class="section3-active">最新资讯</li>
                      <!--<li>新闻</li>
                      <li>新闻</li>-->
                    </ul> 
                    <div id="section3-tab-box"> 
                    <div>
                         <ul>
                           <li><a href="javascript:;">朝鲜副外相访华是否谈及金正男遇害？中方回应</a></li>
                           <li><a href="javascript:;">曾俊华、胡国兴、林郑月娥成为香港特首选举候选人</a></li>
                           <li><a href="javascript:;">特朗普称中国让美丢了6万个工厂 中方回应</a></li>
                           <li><a href="javascript:;">“十三五”将布局“十纵十横”高铁 看看有你家吗？</a></li>
                           <li><a href="javascript:;">道指涨超200点 史上首次突破21000点</a></li>
                         </ul>
                    </div> 
                    <!--<div class="section3-tab-li">
                          <ul>
                            <li><a href="javascript:;">女子中1.3亿大奖 分闺蜜一半</a></li>
                            <li><a href="javascript:;">漫画《丞相拐走我皇上》，看文学大神如何玩转跨</a></li>
                            <li><a href="javascript:;">宁波美女迪拜工作 独行36个国家</a></li>
                            <li><a href="javascript:;">4岁女童因出言顶撞遭老人掌掴 老人：打你怎么了</a></li>
                            <li><a href="javascript:;">中国古董鱼盆在英拍得700万元 曾被当赝品估价1.5</a></li>
                          </ul>
                    </div>
                    <div class="section3-tab-li">
                          <ul>
                            <li><a href="javascript:;">台军爱国者导弹将进驻花东 台媒：为应对大陆</a></li>
                            <li><a href="javascript:;">日媒：美国为对抗中国增加国防费 安倍喜忧参半</a></li>
                            <li><a href="javascript:;">环球时报：中国制裁韩国要让它内伤 准备与韩长期僵持</a></li>
                            <li><a href="javascript:;">他们为保两会进驻宾馆，未丢“豆腐块”</a></li>
                            <li><a href="javascript:;">叙库尔德武装联盟获美国军援打击IS</a></li>
                          </ul>
                    </div>-->
                  </div>
                </div> 
              </div>
        </section>
        <section class="section4">
                        <h2>猜您喜欢</h2>
                  <?php if(is_array($go)): foreach($go as $key=>$go): ?><div class="section4-box">
                   <a href="">
                            <img src="<?php echo ($go["goods_img60"]); ?>"/>
                        <div class="section4-box-content">
                            <div class="section4-box-content-top">
                            <p class="section4-box-content-name"><a href="javascript:;"><?php echo ($go["goods_name"]); ?></a></p>
                            <p class="section4-box-content-ms"><a href=""><?php echo ($go["goods_effect"]); ?></a></p>
                            </div>
                            <div class="section-4-content-btn">
                            <p>结缘价 ￥<span><?php echo ($go["goods_price"]); ?></span></p>
                            <a href="<?php echo U('Sjj/Sjcp',array('id'=>$go['goods_id']));?>"> 立即奉请</a>
                            </div>
                        </div>
                        </a>
                    </div><?php endforeach; endif; ?>         
        </section>
        <footer class="footer">
            <div class="footer-box">

            </div>
        </footer>
    </div>
         <script src="js/swiper.min.js"></script>
         <script type="text/javascript">
         /*window.onload = function(){ 
          var section3_tab_t = document.getElementById("section3-tab"); 
          var section3_tab_li = section3_tab_t.getElementsByTagName("li"); 
          var section3_tab_box = document.getElementById("section3-tab-box"); 
          var tab_div = section3_tab_box.getElementsByTagName("div"); 
             for(i=0; i < section3_tab_li.length; i++){ 
                  section3_tab_li[i].index = i;
                  section3_tab_li[i].onclick = function(){  
                    for(i=0; i < section3_tab_li.length; i++){ 
                        section3_tab_li[i].className = ''; 
                        tab_div[i].className = 'section3-tab-li'; 
                    }   
                        section3_tab_li[this.index].className = 'section3-active';
                        tab_div[this.index].className = '';  
                } 
            }
        } */

      var swiper = new Swiper('.swiper-container', {
        pagination : '.swiper-pagination',
        paginationClickable :true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        autoplayDisableOnInteraction : false,
        spaceBetween: 30,
        autoplay:2500
    });
  $('.arrow-left').on('click', function(e){
    e.preventDefault()
    mySwiper.swipePrev()
  })
  $('.arrow-right').on('click', function(e){
    e.preventDefault()
    mySwiper.swipeNext()
  })
    </script>
</body>
</html>