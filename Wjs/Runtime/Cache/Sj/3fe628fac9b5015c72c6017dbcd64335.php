<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>慈园阁</title>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="stylesheet" type="text/css" href="/Public/Sj/css/gouwuche/gwcart.css">
</head>
<body>
<!--所有主题内容开始-->
    <div class="home">
<!--主体内容开始-->
        <section class="section4">
                        <h2>购物车</h2>
            
                    
                  
                    <?php if(is_array($ka)): foreach($ka as $k=>$ka): ?><div class="section4-box">
                        <label>
                           <input class="section4-box-check" name="check1" type="checkbox"/> 
                           <img src="<?php echo ($ka['goods_img60']); ?>"/ style="vertical-align:middle;">
                        </label>
                        <div class="section4-box-content">
                            <div class="section4-box-content-top">
                            <p class="section4-box-content-name"><a href="javascript:;"><?php echo ($ka['goods_name']); ?></a></p>
                            <p class="section4-box-content-ms"><a href=""><?php echo ($ka['goods_name']); ?></a></p>
                            </div>
                        
                            <div class="section-4-content-btn">
                            <p class="section-4-content-rmb"><span class="section-li-cp-rmb">￥</span><?php echo ($ka['goods_price']); ?></p>
                            <div class="section-4-delete"><a href="<?php echo U('Cart/cart_del',array('id'=>$k));?>">删除</a></div>
                            </div>

                            <div class="section4-input-number">
                            <span><a href="">-</a></span>
                            <span><?php echo ($ka['num']); ?></span>
                            <span><a href="">+</a></span>
                           <!-- <p class="section-4-cp-number">x1</p>-->
                            </div>                           
                        </div>
                        
                      </div><?php endforeach; endif; ?>
                    <div class="section4-bottom">
                    <span class="section4-bottom-qx">
                    <input class="section4-bottom-check" name="qx" type="checkbox"/> 全选
                    </span>

                    <span class="section-4-bottom-box">
                    <span class="section4-bottom-hj">合计:</span>
                    <span class="section4-bottom-box-money">
                    <span class="section4-bottom-money"><span class="section4-li-cp-rmb">￥</span>
                    <span class="section4-li-cp-money"><?php echo ($zj); ?></span>
                    </span>                   
                    <span class="section4-bottom-bhyf">(不含邮费)</span>
                    </span>
                    <span class="section4-box-js"><a href="<?php echo U('/Sj/Cart/gwform');?>">结算</a></span>                    
                    </span>

                    </div>
        </section>
</div>
<!--所有主题内容结束-->

    <script type="text/javascript" src="/Public/Sj/js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="/Public/Sj/js/gouwuche/gwcart.js"></script>
</body>
</html>