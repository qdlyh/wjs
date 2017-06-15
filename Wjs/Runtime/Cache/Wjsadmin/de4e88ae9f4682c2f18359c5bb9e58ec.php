<?php if (!defined('THINK_PATH')) exit();?>       <!-- 包含头部 -->
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>伟锦士后台管理系统</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/Public/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/Public/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <script src="/Public/assets/js/echarts.min.js"></script>
    <link rel="stylesheet" href="/Public/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/Public/assets/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="/Public/assets/css/app.css">
    <script src="/Public/assets/js/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/plugins/kindeditor/kindeditor.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/plugins/kindeditor/lang/zh_CN.js"></script>
    <script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });
       
       $('#sea').keydown(function(e){
        if(e.keyCode==13){
           $('#sae').submit();
        }
        });
</script>

</head>

<body data-type="index">
    <script src="/Public/assets/js/theme.js"></script>
    <div class="am-g tpl-g">
        <!-- 头部 -->
        <header>
            <!-- logo -->
            <div class="am-fl tpl-header-logo">
                <a href="javascript:;">伟锦士后台管理系统</a>
            </div>
            <!-- 右侧内容 -->
            <div class="tpl-header-fluid">
                <!-- 侧边切换 -->
                <div class="am-fl tpl-header-switch-button am-icon-list">
                </div>
                <!-- 搜索 -->
                <div class="am-fl tpl-header-search">
                    <form class="tpl-header-search-form" action="<?php echo U('Order/order_seach');?>" method="post">
                        <button class="tpl-header-search-btn am-icon-search"></button>
                        <input class="tpl-header-search-box" type="text" name="sea" id="sea" placeholder="请输入手机号码查询">
                        <input type="hidden" name="phone" value="12580" />
                    </form>
                </div>
                

                <!-- 其它功能-->
                <div class="am-fr tpl-header-navbar">
                    <ul>
                        <!-- 欢迎语 -->
                        <li class="am-text-sm tpl-header-navbar-welcome">
                            <a href="javascript:;">欢迎你  :  <span> <?php echo (session('login_name')); ?> </span> </a>
                        </li>

                        <!-- 新邮件 -->
                        <li class="am-dropdown tpl-dropdown" data-am-dropdown>
                            <a href="javascript:;" class="am-dropdown-toggle tpl-dropdown-toggle" data-am-dropdown-toggle>
                                <i class="am-icon-envelope"></i>
                                <span class="am-badge am-badge-success am-round item-feed-badge"><?php echo ($a[0]['count(order_excel)']); ?></span>
                            </a>
                            <!-- 弹出列表 -->
                            <ul class="am-dropdown-content tpl-dropdown-content">
                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <div class="menu-messages-ico">
                                            <img src="/Public/assets/img/user04.png" alt="">
                                        </div>
                                        <div class="menu-messages-time">
                                            3小时前
                                        </div>
                                        <div class="menu-messages-content">
                                            <div class="menu-messages-content-title">
                                                <i class="am-icon-circle-o am-text-success"></i>
                                                <span>新订单<?php echo ($a[0]['count(order_excel)']); ?></span>
                                            </div>
                                            <div class="am-text-truncate"></div>
                                            <div class="menu-messages-content-time">2016-09-16 </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <div class="menu-messages-ico">
                                            <img src="/Public/assets/img/user02.png" alt="">
                                        </div>
                                        <div class="menu-messages-time">
                                            5天前
                                        </div>
                                        <div class="menu-messages-content">
                                            <div class="menu-messages-content-title">
                                                <i class="am-icon-circle-o am-text-warning"></i>
                                                <span>未导出订单<?php echo ($a[0]['count(order_excel)']); ?></span>
                                            </div>
                                            <div class="am-text-truncate"></div>
                                            <div class="menu-messages-content-time">2016-09-16 上午 09:23</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <i class="am-icon-circle-o"></i> 进入列表…
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- 退出 -->
                        <li class="am-text-sm">
                            <a href="<?php echo U('Index/out');?>">
                                <span class="am-icon-sign-out"></span> 退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </header>
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
        <!-- 侧边导航栏 -->
         <div class="left-sidebar">
            <!-- 用户信息 -->
            <div class="tpl-sidebar-user-panel">
                <div class="tpl-user-panel-slide-toggleable">
                    <div class="tpl-user-panel-profile-picture">
                        <img src="/Public/assets/img/user04.png" alt="">
                    </div>
                    <span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
              禁言小张
          </span>
                    <a href="<?php echo U('Admin/index');?>" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 个人中心</a>
                </div>
            </div>

            <!-- 菜单 -->
            <ul class="sidebar-nav">
                 <li class="sidebar-nav-link">
                    <a href="<?php echo U('Index/index');?>">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 首页
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 商品
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="<?php echo U('Goods/goods_add');?>">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 添加商品
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="<?php echo U('Goods/goods_list');?>">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 商品列表
                            </a>
                        </li>
                    </ul>
                </li>

                 <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 订单
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="<?php echo U('Order/order_add');?>">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 添加订单
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="<?php echo U('Order/order_list');?>">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 订单列表
                            </a>
                        </li>
                    </ul>
                </li>
                     <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 分类
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="<?php echo U('Class/class_add');?>">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 添加大分类
                            </a>
                        </li>
                         <li class="sidebar-nav-link">
                            <a href="<?php echo U('Class/index');?>">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 大分类列表
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="<?php echo U('Class/any_add');?>">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 添加产品规格或生肖
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="<?php echo U('Class/any_list');?>">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 产品规格或生肖列表
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="sidebar-nav-link">
                    <a href="#">
                        <i class="am-icon-clone sidebar-nav-link-logo"></i> 用户列表
                        <span class="am-badge am-badge-secondary sidebar-nav-link-logo-ico am-round am-fr am-margin-right-sm">6</span>
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="#">
                        <i class="am-icon-clone sidebar-nav-link-logo"></i> 评论列表
                        <span class="am-badge am-badge-secondary sidebar-nav-link-logo-ico am-round am-fr am-margin-right-sm">6</span>
                    </a>
                </li>

            </ul>
        </div>


        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">

            <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 添加商品<small></small></div>
                        <p class="page-header-description">请注意格式</p>
                    </div>
                </div>

            </div>

            <div class="row-content am-cf">


               
                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">添加商品</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-border-form tpl-form-border-br" action="<?php echo U('goods_add');?>" method="post" enctype="multipart/form-data">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">商品名 <span class="tpl-form-line-small-title">goods_name</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input"  name="name" id="name" placeholder="请输入商品名称">
                                            <small>必填,最长20字。</small>
                                        </div>
                                    </div>
                                 
                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">商品号<span class="tpl-form-line-small-title">请输入商品号|唯一不能重复</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="num" placeholder="输入商品号">

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">材质<span class="tpl-form-line-small-title">goods_material</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="caizhi" placeholder="输入材质">

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">市场价格 <span class="tpl-form-line-small-title">goods_prices</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="shichangjia" placeholder="输入市场价格">
                                        </div>
                                    </div>

                                     <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">结缘价格 <span class="tpl-form-line-small-title">goods_price</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="jia" placeholder="输入结缘价格">
                                        </div>
                                    </div>

                                     <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">库存 <span class="tpl-form-line-small-title">goods_price</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text"  name="kucun" placeholder="输入结缘价格">
                                        </div>
                                    </div>
                                    
                                     <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">分类<span class="tpl-form-line-small-title">goods_class</span></label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" style="display: none;" name="class">
                                                <?php if(is_array($classname)): $i = 0; $__LIST__ = $classname;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classname): $mod = ($i % 2 );++$i;?><option value="<?php echo ($classname["class_name"]); ?>"><?php echo ($classname["class_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>  
                                            </select>
                                        </div>
                                    </div>

                                     <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">功效<span class="tpl-form-line-small-title">goods_effect</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="gongxiao" placeholder="输入功效">
                                        </div>
                                    </div>

                                      <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">热卖<span class="tpl-form-line-small-title">goods_hot</span></label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" style="display: none;" name="remai">
                                              <option value="1">热卖</option>
                                              <option value="0">不热卖</option>
                                            </select>

                                        </div>
                                    </div>

                                       <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">是否上架<span class="tpl-form-line-small-title">goods_state</span></label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" style="display: none;" name="shangjia">
                                              <option value="1">上架</option>
                                              <option value="0">下架</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">商品详情</label>
                                        <div class="am-u-sm-9">
                                            <textarea name="beizhu" id="editor_id" style="width:100%;height:500px;"></textarea>
                                        </div>
                                    </div>

                                      <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">商品图 <span class="tpl-form-line-small-title">goods_img</span></label>
                                        <div class="am-u-sm-9">
                                                <input type="file" name="tu" id="tu"/>
                                        </div>
                                    </div>

                                      <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">发布者<span class="tpl-form-line-small-title">goods_admin</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text"  name="fabuzhe" value="<?php echo (session('login_name')); ?>">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

               


            </div>
        </div>
    </div>
    </div>
    <script src="/Public/assets/js/amazeui.min.js"></script>
    <script src="/Public/assets/js/amazeui.datatables.min.js"></script>
    <script src="/Public/assets/js/dataTables.responsive.min.js"></script>
    <script src="/Public/assets/js/app.js"></script>

</body>

</html>