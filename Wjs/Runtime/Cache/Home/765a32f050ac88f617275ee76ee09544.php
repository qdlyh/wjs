<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>慈园阁</title>
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/nav.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/gouwuche/gwsuccessful.css">
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
					<li><a href="#"><img src="/Public/Home/images/gouwu.jpg" alt="" style="float: left;"> 购物车0件</a></li>
				<li class="head-nav"><a href="#">会员中心 <img src="/Public/Home/images/xiala.jpg" alt=""></a>
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
  <div class="section-1">
    <div class="section-1-top">
		  <ul>
		 	<li>购物车</li>
		 	<li>填写收货地址</li>
		 	<li>支付订单</li>
		 	<li>支付成功</li>
		  </ul>
	 </div>
  </div> 
  <div class="content">   <!--内容白色背景-->
    <div class="section-2">
        <div class="section-2-box">
            <div class="section-2-left">
            <img src="/Public/Home/images/15166664.jpg" alt="">
            </div>
                <h4>订单提交成功</h4>
                <p>我们将在24小时内电核实您的资料</p>
                <p>请保持电话畅通。</p>
        </div>        
     </div>   
         <div class="money-btn"><a href="<?php echo U('Index/index');?>">返回首页</a></div> 
   </div>
</div>
<div style="height: 80px;background:#F5F5F5;"></div>
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
           <div class="footer-box2">
              <h4>添加大师微信号 【icyycch845836】</h4>
               <div class="footer-box2-wx">
                   <span class="footer-wx-span">享受一对一大师服务，咨询更多运程，改善个人运势</span>
                    <img src="/Public/Home/images/20170506151701.png" alt="">
               </div>
           </div>
		  </div>
		 </footer>
		 <p class="footer-end">慈园阁十二生肖本命佛</p><br/>
	<script type="text/javascript" src="/Public/Home/js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="/Public/Home/js/index.js"></script>
</body>
</html>