<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>慈园阁</title>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<link rel="stylesheet" type="text/css" href="/Public/Sj/css/gouwuche/gwform.css">
</head>
<body>
<!--所有主题内容开始-->
	<div class="home">
<!--主体内容开始-->

<!--表单开始-->
<div class="section-2">
 <h2>填写收货地址</h2>
   <!--填写信息-->
  <div class="xinxi">
     <form action="xinxi-from">
      <span>您的姓名:</span><input class="xinxi-box" name="username" type="text" placeholder=""> 
      <div class='color-input colour-input1'>请输入姓名</div>
      <span>手机号码:</span><input class="xinxi-box xinxi-sj" name="number" type="text" placeholder=" ">
          <div class='color-input colour-input1'>请输入手机号码</div>

   <!--城市地区-->
      
         <div class="control-group"> 
        <span>所在地区:</span>  
         <span>    
            <select name="location_p" id="location_p"></select>
            <select name="location_c" id="location_c" style="margin: 10px 0;"></select>
            <select name="location_a" id="location_a"></select>
          </span>   
         </div>
   <!--详细地址-->
     <span>详细地址:</span><input class="xinxi-box xinxi-dz" name="address" type="text" placeholder="">
              <div class='color-input colour-input1'>请填写具体的地址信息</div>
   <!--留言-->
      <span class="liuyan">留言给我:</span>
      <textarea class="xinxi-word" name="word" type="text" placeholder="如奉请多尊，请在此处留言"></textarea>
    </form>
  </div>
</div>
<!--购物车开始-->
        <section class="section4">
                        <h2>确认商品</h2>
    
               
                        
              <?php if(is_array($ka)): foreach($ka as $k=>$ka): ?><div class="section4-box">
                        <label>
                           <input class="section4-box-check" name="check1" type="checkbox"/> 
                           <img src="<?php echo ($ka['goods_img60']); ?>"/ style="vertical-align:middle;">
                        </label>
                        <div class="section4-box-content">
                            <div class="section4-box-content-top">
                            <p class="section4-box-content-name"><a href="javascript:;"><?php echo ($ka['goods_name']); ?></a></p>
                            <p class="section4-box-content-ms"><a href=""><?php echo ($ka['goods_name']); ?></a></p>
                            </div>
                        
                            <div class="section-4-content-btn">
                            <p class="section-4-content-rmb"><span class="section-li-cp-rmb">￥</span><?php echo ($ka['goods_price']); ?></p>
                            <div class="section-4-delete"><a href="javascript:;">删除</a></div>
                            </div>

                            <div class="section4-input-number">
                            <span><a href="">-</a></span>
                            <span><?php echo ($ka['num']); ?></span>
                            <span><a href="">+</a></span>
                           <!-- <p class="section-4-cp-number">x1</p>-->
                            </div>                           
                        </div>
                        
                      </div><?php endforeach; endif; ?>

                    <div class="section4-bottom">

                                  <!--支付方式-->
                    <div class="money-zf">
                          <form action="" method="get"> 
                    <!--<label><input name="Sex" type="radio" value="" /> <img src="images/wxzf.jpg" alt="">微信支付 </label>-->
                    <label><input name="Sex" type="radio" checked="checked" value="" /> <img src="/Public/Sj/images/hdfk.jpg" alt="" style="vertical-align:middle;">货到付款 </label> 
                          </form>
                    </div>          
                    <span class="section-4-bottom-box">
                    <span class="section4-bottom-hj">合计:</span><span class="section4-bottom-box-money"><span class="section4-bottom-money"><span class="section4-li-cp-rmb">￥</span><span class="section4-li-cp-money"><?php echo ($zj); ?></span>
                    </span>                   
                    <span class="section4-bottom-bhyf">(不含邮费)</span>
                    </span>
                    <span class="section4-box-js"><a href="">结算</a></span>                    
                    </span>

                    </div>
        </section>

</div>
<br/>
<!--所有主题内容结束-->

	<script type="text/javascript" src="/Public/Sj/js/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="/Public/Sj/js/gouwuche/chengshi.js"></script>
	<script type="text/javascript" src="/Public/Sj/js/gouwuche/gwform.js"></script>
</body>
</html>