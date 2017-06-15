<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>个人中心</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/Public/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/Public/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/Public/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/Public/assets/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="/Public/assets/css/app.css">
    <script src="/Public/assets/js/jquery.min.js"></script>

</head>

<body data-type="login">
    <script src="/Public/assets/js/theme.js"></script>
    <div class="am-g tpl-g">
        <!-- 风格切换 -->
        <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div>
        <div class="tpl-login">
            <div class="tpl-login-content">
                <div class="tpl-login-title">个人中心</div>
                <span class="tpl-login-content-info">
                  个人中心
              </span>

           
                <form class="am-form tpl-form-line-form">
              
                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" id="user-name" value="<?php echo ($admin["admin_user"]); ?>">

                    </div>

                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" id="user-name" value="<?php echo ($admin["admin_phone"]); ?>">
                    </div>

                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" id="user-name" value="<?php echo ($admin["admin_email"]); ?>">
                    </div>
                    
                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" id="user-name" value="<?php echo ($admin["admin_num"]); ?>">
                    </div>
                    
                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" id="user-name" value="<?php echo ($admin["admin_name"]); ?>">
                    </div>
                    
                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" id="user-name" value="<?php echo ($admin["admin_class"]); ?>">
                    </div>

                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" id="user-name" value="<?php echo ($admin["admin_lastime"]); ?>">
                    </div>
                    

                    <div class="am-form-group">

                        <button type="button" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">提交</button>

                    </div>

                    <div class="am-form-group">

                       <a href="<?php echo U('Index/index');?>"> <button type="button" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">首页</button></a>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/Public/assets/js/amazeui.min.js"></script>
    <script src="/Public/assets/js/app.js"></script>

</body>

</html>