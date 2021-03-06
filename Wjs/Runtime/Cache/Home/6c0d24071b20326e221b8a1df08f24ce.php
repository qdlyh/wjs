<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>慈园阁</title>
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/cp/cp1.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/cp/cpzoom.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/nav.css">
</head>
<body>
	<div class="home">
		<div class="head">
			<div class="head-left">
				<ul>
					<li>欢迎<?php echo (session('user_name')); ?>来到慈园阁！</li>
					<li><a href="<?php echo U('Login/index');?>">登录</a></li>
					<li><a href="<?php echo U('Login/index');?>">免费注册</a></li>
				</ul>
			</div>
			<div class="head-right">
				<ul>
					<li><a href="#">手机版 <img src="/Public/Home/images/shouji.jpg" alt=""></a></li>
				<li class="head-nav"><a href="#">联系客服 <img src="/Public/Home/images/xiala.jpg" alt=""></a>
					    <ul>
					    	<li><a href="#">联系客服</a></li>
					    	<li><a href="#">联系客服</a></li>
					    </ul>
			   </li>
					<li><a href=""><img src="/Public/Home/images/gouwu.jpg" alt="" style="float: left;"> 购物车0件</a></li>
				<li class="head-nav"><a href="">会员中心 <img src="/Public/Home/images/xiala.jpg" alt=""></a>
					   <ul>
					    	<li><a href="#">会员中心</a></li>
					    	<li><a href="#">会员中心</a></li>
					   </ul>
				</li>
				</ul>
			</div>
		 </div>	
		 <div class="head-top">
		 	<div class="head-logo">
		 		<!--奉请热线文字图-->
		 	</div>
		 </div>	
		 <div class="nav">
		 	 	
 	<ul>
		 		<li class="active"><a href="<?php echo U('Index/index');?>">本命佛</a></li>
		 		<li><a href="<?php echo U('Sxjxw/index');?>">生肖吉祥物</a></li>
		 		<li><a href="<?php echo U('Sxyunshi/index');?>">生肖运势</a></li>
		 		<li><a href="<?php echo U('Zcpixiu/index');?>">开运貔貅</a></li>
		 		<li><a href="<?php echo U('Jiaju/index');?>">风水家具</a></li>
		 		<li><a href="<?php echo U('Love/index');?>">爱情姻缘</a></li>
		 	
	</ul> 
		 </div>
<div class="content-1">
   <div class="section-1">
        <div class="section-1-box">
            <div class="section-1-left">
                 <div class="container"> 
  <!--大图-->
                 <div id="preview" class="spec-preview"> <span class="jqzoom">
                 <img jqimg="<?php echo ($list['goods_img800']); ?>" src="<?php echo ($list['goods_img800']); ?>" /></span> 
                 </div>
  <!--大图end -->
                  <div class="spec-scroll"> 
                  <!--左右按钮-->
                  <a class="prev">&lt;</a> <a class="next">&gt;</a>
                    <!--图片选择-->
                     <div class="items">
                      <ul>
                         <li><img bimg="<?php echo ($list['goods_img800']); ?>" src="<?php echo ($list['goods_img800']); ?>" onmousemove="preview(this);"></li>
                         <li><img bimg="<?php echo ($list['goods_img800']); ?>" src="<?php echo ($list['goods_img800']); ?>" onmousemove="preview(this);"></li>
                         <li><img bimg="<?php echo ($list['goods_img800']); ?>" src="<?php echo ($list['goods_img800']); ?>" onmousemove="preview(this);"></li>
                         <li><img bimg="<?php echo ($list['goods_img800']); ?>" src="<?php echo ($list['goods_img800']); ?>" onmousemove="preview(this);"></li>
                         <li><img bimg="<?php echo ($list['goods_img800']); ?>" src="<?php echo ($list['goods_img800']); ?>" onmousemove="preview(this);"></li>
                         <li><img bimg="<?php echo ($list['goods_img800']); ?>" src="<?php echo ($list['goods_img800']); ?>" onmousemove="preview(this);"></li>
                         <li><img bimg="<?php echo ($list['goods_img800']); ?>" src="<?php echo ($list['goods_img800']); ?>" onmousemove="preview(this);"></li>
                         <li><img bimg="<?php echo ($list['goods_img800']); ?>" src="<?php echo ($list['goods_img800']); ?>" onmousemove="preview(this);"></li>


                      </ul>
                     </div>
                   </div>
                 </div>           	
               </div>
        	<div class="section-1-right">
        		<div class="section-1-top">
        			<h4><?php echo ($list['goods_name']); ?></h4>
        		</div>
        		<div class="section-1-right-box">
        			<p><span class="section-1-right-color">材质</span> : <?php echo ($list['goods_material']); ?></p>
        			<p><span class="section-1-right-color">开光</span> : 佛教圣地华峰寺</p>
        			<p><span class="section-1-right-color">选择生肖</span> :
        			
        			<div id="section-1-right-span">	
        			
        			</div>
        			</p>
        			<p class="section-1-right-color"><span>价格</span> : <span class="color-red" style="font-size: 20px;"><?php echo ($list['goods_price']); ?></span>元</p>
        			<p class="section-1-right-color">功效　:<span style="font-size: 14.5px;"><?php echo ($list['goods_effect']); ?></span></p>
        			    <div class="section-1-btn">
        			    <a class="section-1-btnsx" href="<?php echo U('/Home/Cart/gwcart',array('id'=>$list['goods_id']));?>">加入购物车</a></div>
        		</div>
        	</div>
        </div>
     </div>
     <div class="content-2">
		 <div class="section-2">
		 	<!--主页图-->
		 	 <?php echo (htmlspecialchars_decode($list['goods_remark'])); ?>
		 </div>
		 <!--<div class="section-3">
		 	主页图
		 </div>-->
	 </div>

	   <div class="section-4"><!--主页背景图-->
	        <div class="section4-box">
		 	    <!--主页图-->
		 	    <img src="/Public/Home/images/cp/1651561.jpg" alt="">
		    </div>
	   </div>
	   <div class="section-5">
		 	<div class="section-5-box">
		 	<!--主页图-->
	        </div>
	   </div>
  </div>
		 <footer class="footer">
		 	 <div class="footer-box">
		 	 	<ul>
		 	 		<li>
		 	 			<h4>走进慈园阁</h4>
		 	 			<a href="">最新动态</a><br/>
		 	 			<a href="">品牌介绍</a><br/>
		 	 			<a href="">法师结缘</a><br/>
		 	 			<a href="">联系方式</a><br/>
		 	 		</li>
		 	 		<li>
		 	 			<h4>品质保证</h4>
		 	 			<a href="">开光证书</a>
		 	 		</li>
		 	 		<li>
		 	 			<h4>服务体系</h4>
		 	 			<a href="">最新动态</a><br/>
		 	 			<a href="">退换货条款</a><br/>
		 	 			<a href="">法师结缘</a><br/>
		 	 			<a href="">联系方式</a><br/>
		 	 		</li>
		 	 		<li>
		 	 			<h4>其他说明</h4>
		 	 			<a href="">配送说明及包装方式</a><br/>
		 	 			<a href="">本命佛包装及附件</a><br/>
		 	 			<a href="">常见问题解答</a><br/>
		 	 		</li>
		 	 	</ul>
		 	 </div>
		 	 <div class="footer-box2">
		 	 	<h4>添加大师微信号 【icyycch845836】</h4>
		 	 	<div class="footer-box2-wx">
		 	 		<span class="footer-wx-span">享受一对一大师服务，咨询更多运程，改善个人运势</span>
		 	 		<img src="/Public/Home/images/20170506151701.png" alt="">
		 	 	</div>
		 	 </div>
		 </footer>
		 <p class="footer-end">慈园阁十二生肖本命佛</p><br/>
  </div>
	<script type="text/javascript" src="/Public/Home/js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="/Public/Home/js/index.js"></script>
	<script type="text/javascript" src="/Public/Home/js/cp/jquery.jqzoom.js"></script>
	<script type="text/javascript" src="/Public/Home/js/cp/cp.js"></script>
</body>
</html>