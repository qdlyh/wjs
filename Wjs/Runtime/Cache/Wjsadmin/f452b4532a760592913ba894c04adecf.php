<?php if (!defined('THINK_PATH')) exit();?>        <!-- 包含头部 -->
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

            
            <div class="row-content am-cf">
                <div class="row  am-cf">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-4">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">平台总订单</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">
                                <div class="am-fl">
                                    <div class="widget-fluctuation-period-text">
                                        &nbsp
                                        <button class="widget-fluctuation-tpl-btn">
                        <i class="am-icon-calendar"></i>
                        更多月份
                      </button>
                                    </div>
                                </div>
                                <div class="am-fr am-cf">
                                    <div class="widget-fluctuation-description-amount text-success" am-cf>
                                         
                                        <?php echo ($order_num); ?> 单            
                                    </div>
                                    <div class="widget-fluctuation-description-text am-text-right">
                                        平台总订单
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                        <div class="widget widget-primary am-cf">
                            <div class="widget-statistic-header">
                                至今订单总收入
                            </div>
                            <div class="widget-statistic-body">
                                <div class="widget-statistic-value">
                                    ￥<?php echo ($order_money); ?>元
                                </div>
                                <div class="widget-statistic-description">
                                    今年比去年多收入 <strong><?php echo ($order_money); ?>元</strong> 人民币
                                </div>
                                <span class="widget-statistic-icon am-icon-credit-card-alt"></span>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                        <div class="widget widget-purple am-cf">
                            <div class="widget-statistic-header">
                                最大单
                            </div>
                            <div class="widget-statistic-body">
                                <div class="widget-statistic-value">
                                    ￥<?php echo ($order_max); ?>
                                </div>
                                <div class="widget-statistic-description">
                                    单个订单最大收入 <strong><?php echo ($order_max); ?>元</strong> 人民币
                                </div>
                                <span class="widget-statistic-icon am-icon-support"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row am-cf">
                    <div class="am-u-sm-12 am-u-md-8">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">月度财务收支计划</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body-md widget-body tpl-amendment-echarts am-fr" id="tpl-echarts">

                            </div>
                        </div>
                    </div>

                    <div class="am-u-sm-12 am-u-md-4">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">专用服务器负载</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body widget-body-md am-fr">

                                <div class="am-progress-title">CPU Load <span class="am-fr am-progress-title-more">28% / 100%</span></div>
                                <div class="am-progress">
                                    <div class="am-progress-bar" style="width: 15%"></div>
                                </div>
                                <div class="am-progress-title">CPU Load <span class="am-fr am-progress-title-more">28% / 100%</span></div>
                                <div class="am-progress">
                                    <div class="am-progress-bar  am-progress-bar-warning" style="width: 75%"></div>
                                </div>
                                <div class="am-progress-title">CPU Load <span class="am-fr am-progress-title-more">28% / 100%</span></div>
                                <div class="am-progress">
                                    <div class="am-progress-bar am-progress-bar-danger" style="width: 35%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row am-cf">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-4 widget-margin-bottom-lg ">
                        <div class="tpl-user-card am-text-center widget-body-lg">
                            <div class="tpl-user-card-title">
                                wjs.com
                            </div>
                            <div class="achievement-subheading">
                                下单来源最多网站
                            </div>
                            <img class="achievement-image" src="/Public/assets/img/user07.png" alt="">
                            <div class="achievement-description">
                                此处测试
                                <strong>此处测试</strong>此处测试
                                <strong>此处测试</strong>此处测试。
                            </div>
                        </div>
                    </div>

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-8 widget-margin-bottom-lg">

                        <div class="widget am-cf widget-body-lg">

                            <div class="widget-body  am-fr">
                                <div class="am-scrollable-horizontal ">
                                    <table width="100%" class="am-table am-table-compact am-text-nowrap tpl-table-black " id="example-r">
                                        <thead>
                                            <tr>
                                                <th>文章标题</th>
                                                <th>作者</th>
                                                <th>时间</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <tr class="gradeX">
                                                <td>新加坡大数据初创公司 Latize 获 150 万美元风险融资</td>
                                                <td>张鹏飞</td>
                                                <td>2016-09-26</td>
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="javascript:;">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr class="even gradeC">
                                                <td>自拍的“政治角色”：观众背对希拉里自拍合影表示“支持”</td>
                                                <td>天纵之人</td>
                                                <td>2016-09-26</td>
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="javascript:;">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                           
                                            <tr class="gradeX">
                                                <td>关于创新管理，我想和你当面聊聊。</td>
                                                <td>王宽师</td>
                                                <td>2016-09-26</td>
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="javascript:;">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr class="even gradeC">
                                                <td>究竟是趋势带动投资，还是投资引领趋势？</td>
                                                <td>着迷</td>
                                                <td>2016-09-26</td>
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="javascript:;">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr class="even gradeC">
                                                <td>Docker领域再添一员，网易云发布“蜂巢”，加入云计算之争</td>
                                                <td>醉里挑灯看键</td>
                                                <td>2016-09-26</td>
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="javascript:;">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- more data -->
                                        </tbody>
                                    </table>
                                </div>
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