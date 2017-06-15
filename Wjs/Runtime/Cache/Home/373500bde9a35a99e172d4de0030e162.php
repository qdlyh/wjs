<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>慈园阁</title>
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/login/login.css">
</head>
<body>
	<div class="home">
		<div class="section-1">
		   <div class="section-1-box">
		      <h1><img src="/Public/Home/images/login/15615616.png" alt="">慈园阁会员登录注册</h1>
              <!--登录注册表开始-->
		      <div class="section-1-box-left">        
		      <h4>已是会员请直接登录</h4>
              <form action="<?php echo U('Login/index');?>" method="post">
                  <span><img src="/Public/Home/images/login/11635151.png" alt="">&nbsp;帐号:&nbsp;&nbsp;</span>
                  <input  name="username" type="text" placeholder=" 帐号"> <br/>
                  <span><img src="/Public/Home/images/login/13132131.png" alt="" style="">&nbsp;密码:&nbsp;&nbsp;</span>
                  <input  name="pwd" type="password" placeholder=" 密码">
                  <br>
                  <img src="/Public/Home/images/login/13132131.png" alt="" style="">&nbsp;验证码:&nbsp;&nbsp;
                  <input  name="yzm" type="text" placeholder="验证码">
                  <img src="<?php echo U('Home/Login/yzm');?>" onclick="this.src=this.src+'?'" />
                  <input type="submit" value="立即登陆">
              </form>
               
		      </div>
		      <div class="section-1-box-right">        
		      <h4>非会员请注册</h4>
              <form action="<?php echo U('Login/relogin');?>" method="post">
                    <span><img src="/Public/Home/images/login/11635151.png" alt="">&nbsp;账号:&nbsp;&nbsp;</span>
                    <input  name="username" type="text" placeholder=" 帐号"> <br/>
                    <span><img src="/Public/Home/images/login/13132131.png" alt="" style="">&nbsp;&nbsp;登录密码:&nbsp;&nbsp;</span>
                    <input  name="pwd" type="password" placeholder=" 登录密码"><br/>
                    <img src="/Public/Home/images/login/13132131.png" alt="" style="">&nbsp;验证码:&nbsp;&nbsp;
                    <input  name="reyzm" type="text" placeholder="验证码">
                    <img src="<?php echo U('Home/Login/reyzm');?>" onclick="this.src=this.src+'?'" />
                    <input type="submit" value="立即注册" id="">
              </form>
              
		      </div>
               <!--登录注册表结束-->
            </div>
		</div>
   </div>
    <!--所有主页内容结束-->
	</div>
	<script type="text/javascript" src="/Public/Home/js/jquery-3.1.1.js"></script>
</body>
</html>