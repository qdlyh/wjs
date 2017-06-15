<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>慈园阁</title>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<link rel="stylesheet" type="text/css" href="/Public/Sj/css/login/login.css">
</head>
<body>
	<div class="home">
     <header class="head-top">
      <h2>慈园阁</h2>
     </header>
		<div class="section-1">
        <div class="section-1-box-tab">
            <span class="active">慈园阁帐号登录</span>
            <span>慈园阁帐号注册</span>
        </div>
 <div class="section-1-box">
    <div class="content">
              <!--登录注册表开始-->
		      <div class="section-1-box-left content1">     
		      <h4>已是会员请直接登录</h4>
              <form action="form-logon">
                  &nbsp;<span><img src="/Public/Sj/images/icon/11635151.png" alt="">&nbsp;帐号:&nbsp;&nbsp;</span>
                  <input  name="username" type="text" placeholder=" 帐号名/手机号"> <br/>
                  <span><img src="/Public/Sj/images/icon/13132131.png" alt="">&nbsp;密码:&nbsp;&nbsp;</span>
                  <input  name="number" type="text" placeholder=" 密码">
              </form>
               <div class="login-btn"><a href="">立即登录</a></div>
		      </div>
          
		      <div class="section-1-box-right content1" style="display: none;">    
		      <h4>非会员请注册</h4>
              <form action="form-logon">
                   &nbsp;<span><img src="/Public/Sj/images/icon/11635151.png" alt="">&nbsp;邮箱/手机:&nbsp;&nbsp;</span>
                    <input  name="username" type="text" placeholder=" 帐号"> <br/>
                    <span><img src="/Public/Sj/images/icon/13132131.png" alt="" style="">&nbsp;&nbsp;登录密码:&nbsp;&nbsp;</span>
                    <input  name="number" type="text" placeholder=" 登录密码"><br/>
                    <span><img src="/Public/Sj/images/icon/13132131.png" alt="" style="">&nbsp;&nbsp;确认密码:&nbsp;&nbsp;</span>
                    <input  name="number" type="text" placeholder=" 确认密码">
              </form>
               <div class="login-btn"><a href="">立即注册</a></div>
		      </div>
               <!--登录注册表结束-->
     </div>
   </div>
 </div>
</div>
    <!--所有主页内容结束-->
	</div>
	<script type="text/javascript" src="/Public/Sj/js/jquery-3.1.1.js"></script>
  <script type="text/javascript">
          $('.section-1-box-tab span').click(function() {
            var i = $(this).index();
            $(this).addClass('active').siblings().removeClass('active');
            $('.content1').eq(i).show().siblings().hide();
        });
  </script>
</body>
</html>