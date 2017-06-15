<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>慈园阁</title>
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/nav.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/gouwuche/gwcart.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/gouwuche/gwform.css">
</head>
<body>
<!--所有主体内容开始-->
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
				<li class="head-nav"><a href="">联系客服 <img src="/Public/Home/images/xiala.jpg" alt=""></a>
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

  <!--页面主体内容开始-->
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
<!--表单购物车开始-->
<div class="content-2">
<!--表单开始-->
<div class="section-2">

   <!--填写信息-->
     <div class="xinxi">
     <form action="xinxi-from">
      <span>您的姓名:</span><input class="xinxi-box" name="username" id="username" type="text" placeholder=" 姓名"> 
          <span class='colour-input1'>请输入姓名</span><br/>
      <span>手机号码:</span><input class="xinxi-box xinxi-sj" name="number" id="number" type="text" placeholder=" 手机号码">
          <span class='colour-input1'>请输入手机号码</span><br/>
        
         <div class="control-group" >
                  <span>生肖:</span> 
              <select name="sx" id="sx">
                <option value="鼠">鼠</option>
                <option value="牛">牛</option>
                <option value="虎">虎</option>
                <option value="兔">兔</option>
                <option value="龙">龙</option>
                <option value="蛇">蛇</option>
                <option value="马">马</option>
                <option value="羊">羊</option>
                <option value="猴">猴</option>
                <option value="鸡">鸡</option>
                <option value="狗">狗</option>
                <option value="猪">猪</option>
              </select>
         </div><br/>

   <!--城市地区-->
         <div class="control-group" name="city" id="city">
             <span>所在地区:</span> 
            <select name="location_p" id="location_p"></select>
            <select name="location_c" id="location_c"></select>
            <select name="location_a" id="location_a"></select>
         </div>
   <!--详细地址-->
     <span>详细地址:</span><input class="xinxi-box xinxi-dz" id="address" name="address" type="text" placeholder=" 请填写街道信息">
              <span class='colour-input1'>请填写具体的地址信息</span><br/>
   <!--留言-->
      <span class="liuyan">留言:</span>
      <textarea class="xinxi-word" name="word" id="word" type="text" placeholder="如奉请多尊，请在此处留言"></textarea>
    </form>
 </div>
</div>
<!--表单结束-->
<!--购物车开始-->
<div class="section-3">
	<div class="section-3-box">
 <table id="cartTable">
    <thead>
      <tr>
       
        <th>商品</th>
        <th>单价</th>
        <th>数量</th>
        <th>金额</th>
        <th>操作</th>
      </tr>
    </thead>
    <h4>确认产品信息</h4>
    <tbody>
    
  	<?php if(is_array($ka)): foreach($ka as $k=>$ka): ?><tr>
      	
        <td class="checkbox"><input class="check-one check" name="check-one1" type="checkbox"/></td>
        <td class="goods"><img src="<?php echo ($ka['goods_img60']); ?>" alt=""/></a><span><?php echo ($ka['goods_name']); ?></span></td>
        <td class="price">￥<?php echo ($ka['goods_price']); ?></td>

        <td class="count"><?php echo ($ka['num']); ?></td>
        
        <td class="subtotal">￥<?php echo ($ka['goods_price']*$ka['num']); ?></td>


       <td class="operation"><span class="delete"></span></td>

      </tr><?php endforeach; endif; ?> 

    </tbody>
  </table>
  <div class="foot" id="foot">
    <input type="hidden" id="cartTotalPrice" />
    <div class="fr total">合计：<span class="bhyf">(不含邮费) </span><span  class="color-red"><?php echo ($zj); ?>元</span></div>
    <div class="fr selected" id="selected">商品共<span id="selectedTotal"><?php echo ($jian); ?></span>件</div> 
  </div>
</div>
</div>
<!--购物车结束-->

 </div>	 
<!--表单购物车结束--> 

       <!--支付方式-->
        <div class="money-zf">
          <form action="#" method="get"> 
                    <!--<label><input name="Sex" type="radio" value="" /> <img src="images/wxzf.jpg" alt="">微信支付 </label>-->
                    <label><input name="Sex" type="radio" checked="checked" id="pay" value="1" /> <img src="/Public/Home/images/hdfk.jpg" alt="">货到付款 </label> 
          </form>
        </div>
         <!--支付按钮-->

    <div class="money-btn"><a href="#" onClick="tianjia()">提交订单</a></div>
 </div>
<!--页面主体内容结束-->
</div>
<!--所有主体内容结束-->

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

	<script type="text/javascript" src="/Public/Home/js/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="/Public/Home/js/index.js"></script>
 
  <script type="text/javascript" src="/Public/Home/js/gouwuche/chengshi.js"></script>
  <script>new PCAS('location_p', 'location_c', 'location_a', '北京市', '', '');　</script>
  <script>
          function tianjia(){
            var username = $("#username").val();
            var number = $("#number").val();
            var city= $("select[name='location_p']").val() +  $("select[name='location_c']").val() + $("select[name='location_a']").val();
            var address = $("#address").val();
            var area = city + address;
            var word = $("#word").val();
            var pay = $("#pay").val();            
            var FormSite2 = window.location.host;
            var sx = $("#sx").val();
             
            $.post("<?php echo U('order_add');?>",{username:username,number:number,area:area,word:word,pay:pay,FormSite2:FormSite2,sx:sx},function(msg){
                    //alert(msg);//window="<?php echo U('/Home/Cart/gwcart');?>";
            			  //alert(msg['code']);
                    if(msg['code']=='ok'){
                      alert(msg['msg'])
                      window.location.href="http://wjs.com/index.php/Home/Cart/gwsuccess";
                    }else{
                      alert(msg)
                     // alert('下单失败，请添加商品下单')
                    }
                   
            })
          }
  </script>
</body>
</html>