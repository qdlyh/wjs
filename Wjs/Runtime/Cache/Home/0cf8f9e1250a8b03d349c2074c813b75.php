<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>慈园阁</title>
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/lunbo.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css">
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
					<li><a href="">手机版 <img src="/Public/Home/images/shouji.jpg" alt=""></a></li>
				<li class="head-nav"><a href="">联系客服 <img src="/Public/Home/images/xiala.jpg" alt=""></a>
					    <ul>
					    	<li><a href="">联系客服</a></li>
					    	<li><a href="">联系客服</a></li>
					    </ul>
			   </li>
					<li><a href=""><img src="/Public/Home/images/gouwu.jpg" alt="" style="float: left;"> 购物车0件</a></li>
				<li class="head-nav"><a href="">会员中心 <img src="/Public/Home/images/xiala.jpg" alt=""></a>
					   <ul>
					    	<li><a href="">会员中心</a></li>
					    	<li><a href="">会员中心</a></li>
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
		 		<li class="active"><a href="">本命佛</a></li>
		 		<li><a href="<?php echo U('Sxjxw/index');?>">生肖吉祥物</a></li>
		 		<li><a href="<?php echo U('Sxyunshi/index');?>">生肖运势</a></li>
		 		<li><a href="<?php echo U('Zcpixiu/index');?>">开运貔貅</a></li>
		 		<li><a href="<?php echo U('jiaju/index');?>">风水家具</a></li>
		 		<li><a href="<?php echo U('Love/index');?>">爱情姻缘</a></li>
		 	</ul>
		 </div>
		 <div class="section-1">
		 	<!--主页图-->
             <div class="slider">
	              <ul class="slides">
		             <li class="slide">
			     <div class="section-1-box-1"></div>
		             </li>
		             <li class="slide">
			     <div class="section-1-box-2"></div>
		             </li>
		             <li class="slide">
			     <div class="section-1-box-3"></div>
		             </li>
		              <li class="slide">
			     <div class="section-1-box-4"></div>
		             </li>
	             </ul>
               </div>
		 </div>
   <div class="content">
		 <div class="section-2">
		 	<!--主页图-->
		 </div>
		 <div class="section-3">
		 	<!--主页图-->
		 	<div class="section-3-box">
		 	<?php if(is_array($list)): foreach($list as $key=>$list): ?><div class="section-cp-box">
		 	  
		 	       <a href="<?php echo U('cpproduct/index',array('id'=>$list['goods_id']));?>"><img src="<?php echo ($list['goods_img340']); ?>" style="width:290px;height:300px;" alt=""></a>  <!--产品图-->
		 	       
		 	       <div class="section-cp-box-jg">    <!--产品价格背景图-->               
		 	       	  <a href="<?php echo U('cpproduct/index',array('id'=>$list['goods_id']));?>"><?php echo ($list['goods_name']); ?></a><br/>
		 	       	  <a href="<?php echo U('cpproduct/index',array('id'=>$list['goods_id']));?>"><?php echo ($list['goods_price']); ?></a>
		 	       </div>
		 	    
		 	   </div><?php endforeach; endif; ?>
		 	  
		 	 </div>
		 </div>
		 <div class="section-4">
		 	<!--主页图-->
		 </div>
		 <div class="section-5">
		 	<!--主页图-->
		 </div>
		 <div class="section-6">
		 	<!--主页图-->
		 </div>
		 <div class="section-7">
		 	<!--主页图-->
		 </div>
		 <div class="section-8">
		      <div class="section-8-logo">
		           <img src="/Public/Home/images/1566561.png" alt="">
		      </div>
		 	<div class="section-8-box">
		 	     <div class="section-8-left">
		 	          <div class="section-8-left-box">
		 	          <div class="section-8-cpt">
		 	                <div class="section-8-cp-time">
		 	                <span>08</span>
		 	                <p style="color: #ffffff;">2017-05</p>
		 	                </div>
		 		            <img src="/Public/Home/images/6450654.jpg" alt="">
		 		      </div>
		 		      <h4>2017年慈园阁三周年庆典</h4>
		 		      <p>2017年慈园阁三周年庆典2017年慈园阁三周年庆典2017年慈园阁三周年庆典2017年慈园阁三周年庆典2017年慈园阁三周年庆典</p><br/>
		 		      <a href=""><img src="/Public/Home/images/156516.jpg" alt=""></a>
		 		      </div>
		 	     </div>
		 	     <div class="section-8-right">
	
		 	          <div class="section-8-time">
		 	          <span>08</span>
		 	          <p>2017-05</p>
		 	          </div>
		 	     	  <h4>2017年慈园阁三周年庆典</h4>
		 		      <p>2017年慈园阁三周年庆典2017年慈园阁三周年庆典2017年慈园阁三周年庆典</p>
		 		      <div class="section-8-right-box"></div>
                      
                      <div class="section-8-time">
                      <span>08</span>
		 	          <p>2017-05</p>
		 	          </div>
		 	     	  <h4>2017年慈园阁三周年庆典</h4>
		 		      <p>2017年慈园阁三周年庆典2017年慈园阁三周年庆典2017年慈园阁三周年庆典</p>
		 	          <div class="section-8-right-box"></div>

		 		      <div class="section-8-time">
		 		      <span>08</span>
		 	          <p>2017-05</p>
		 	          </div>
		 	     	  <h4>2017年慈园阁三周年庆典</h4>
		 		      <p>2017年慈园阁三周年庆典2017年慈园阁三周年庆典2017年慈园阁三周年庆典</p>
		 		      <div class="section-8-right-box"></div>

		 		      <div class="section-8-time">
		 		      <span>08</span>
		 	          <p>2017-05</p>
		 	          </div>
		 	     	  <h4>2017年慈园阁三周年庆典</h4>
		 		      <p>2017年慈园阁三周年庆典2017年慈园阁三周年庆典2017年慈园阁三周年庆典</p>
		 		      <div class="section-8-right-box"></div>

		 		      <div class="section-8-time">
		 		      <span>08</span>
		 	          <p>2017-05</p>
		 	          </div>
		 	     	  <h4>2017年慈园阁三周年庆典</h4>
		 		      <p>2017年慈园阁三周年庆典2017年慈园阁三周年庆典2017年慈园阁三周年庆典</p>
		 		      <div class="section-8-right-box"></div>
		 	     </div>
		 	</div>
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
	<script type="text/javascript" src="/Public/Home/js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="/Public/Home/js/jquery.glide.min.js"></script>
	<script type="text/javascript" src="/Public/Home/js/index.js"></script>
	<script type="text/javascript">
			var glide = $('.slider').glide({
					//autoplay:true,//是否自动播放 默认值 true如果不需要就设置此值
					animationTime:500, //动画过度效果，只有当浏览器支持CSS3的时候生效
					arrows:true, //是否显示左右导航器
					arrowsWrapperClass: "arrowsWrapper",//滑块箭头导航器外部DIV类名
					arrowMainClass: "slider-arrow",//滑块箭头公共类名
					arrowRightClass:"slider-arrow--right",//滑块右箭头类名
					arrowLeftClass:"slider-arrow--left",//滑块左箭头类名
					arrowRightText:">",//定义左右导航器文字或者符号也可以是类
					arrowLeftText:"<",

					nav:true, //主导航器也就是本例中显示的小方块
					navCenter:true, //主导航器位置是否居中
					navClass:"slider-nav",//主导航器外部div类名
					navItemClass:"slider-nav__item", //本例中小方块的样式
					navCurrentItemClass:"slider-nav__item--current" //被选中后的样式
				});	
	</script>
</body>
</html>