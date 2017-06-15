<?php if (!defined('THINK_PATH')) exit();?>          <!DOCTYPE html>
          <html lang="en">
          <head>
            <meta charset="UTF-8">
            <title>慈园阁</title>
            <link rel="stylesheet" type="text/css" href="/Public/Home/css/nav.css">
            <link rel="stylesheet" type="text/css" href="/Public/Home/css/gouwuche/gwcart.css">
          </head>
          <body>
          <!--所有主题内容开始-->
            <div class="home">
              <!--引入头部-->
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
                <!--引入导航条-->
                   	
 	<ul>
		 		<li class="active"><a href="<?php echo U('Index/index');?>">本命佛</a></li>
		 		<li><a href="<?php echo U('Sxjxw/index');?>">生肖吉祥物</a></li>
		 		<li><a href="<?php echo U('Sxyunshi/index');?>">生肖运势</a></li>
		 		<li><a href="<?php echo U('Zcpixiu/index');?>">开运貔貅</a></li>
		 		<li><a href="<?php echo U('Jiaju/index');?>">风水家具</a></li>
		 		<li><a href="<?php echo U('Love/index');?>">爱情姻缘</a></li>
		 	
	</ul> 
               </div>
          <!--主体内容开始-->
            <div class="content-1">
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
          <!--购物车开始-->
          <div class="content-2">
              <!--<div class="section-2"></div>-->

          <div class="section-3">  <!--购物车列表开始-->
             <div class="section-3-box">
           <table id="cartTable">
              <thead>
                <tr>
                  <th><label>
                      <input class="check-all check" type="checkbox"/>&nbsp;&nbsp;全选</label></th>
                  <th>商品</th>
                  <th>单价</th>
                  <th>数量</th>
                  <th>金额</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>

              <?php if(is_array($ka)): foreach($ka as $k=>$ka): ?><tr>
                  
                  <td class="checkbox"><input class="check-one check" name="check-one1" 

          type="checkbox"/></td>
                  <td class="goods"><img src="<?php echo ($ka['goods_img60']); ?>" alt=""/></a><span><?php echo ($ka ['goods_name']); ?></span></td>
                  <td class="price">￥<?php echo ($ka['goods_price']); ?></td>

                  <td class="count"><span><a href="<?php echo U('cart_decr',array(id=>$k));?>"> - 

          </a></span>&nbsp;&nbsp;&nbsp;<span><?php echo ($ka['num']); ?></span>&nbsp;&nbsp;&nbsp;<span><a 

          href="<?php echo U('gwcart',array(id=>$k));?>">+</a></span></td>
                  
                  <td class="subtotal">￥<?php echo ($ka['goods_price']*$ka['num']); ?></td>


                 <td class="operation"><span class="delete"><a href="<?php echo U('Cart/cart_del',array ('id'=>$k));?>">删除</a></span></td>

                </tr><?php endforeach; endif; ?> 
            
              </tbody>
            </table>

              <div class="foot" id="foot">
              <label class="fl select-all"><input type="checkbox" class="check-all 

          check"/>&nbsp;&nbsp;全选</label>
              <a class="fl delete" id="deleteAll" href="<?php echo U('cart_clear');?>">清空购物车</a>
              <!--<div class="fr closing" onclick="getTotal();">进入支付页面</div>-->
                <input type="hidden" id="cartTotalPrice" />
                <div class="fr total">合计：<span class="bhyf">(不含邮费) </span><span 

          class="color-red"><?php echo ($zj); ?></span></div>
                <div class="fr selected" id="selected">已选<span id="selectedTotal"><?php echo ($zong); ?>种</span>

          商品&nbsp;&nbsp;<span id="selectedTotal">共<?php echo ($jian); ?></span>件</div>
                <div class="selected-view">
                <div id="selectedViewList" class="clearfix">
                  <div><img src="/Public/Home/images/1.jpg"><span>取消选择</span></div>
                </div>
              </div>
              </div>
              </div>
            </div>
          </div>  
          <!--购物车结束-->
                   <!--支付按钮-->
                 <div class="money-btn"><a href="<?php echo U('gwform');?>">下一步</a></div>
          </div>    
          <!--主体内容结束-->
          </div>
          <!--所有主题内容结束-->
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
            <script type="text/javascript" src="/Public/Home/js/gouwuche/gwcart.js"></script>
             
          </body>
          </html>