<?php


namespace Home\Model;
use Think\Model;

/**
* @下单
*/
class ShopModel extends Model{
	//自动映射
	protected $_map = array(
        'Y3_Media' =>'media', //映射来源
        'Y3_RealName'  =>'name',//映射订单姓名
        'Y3_Address'  =>'add',//映射地址
        'Y3_Phone'  =>'phone',//映射手机
        'Y3_Message'  =>'message',//映射留言
        'Y3_Mobile'  =>'tel',//映射电话
        'Y3_Product'  =>'pro', //映射产品
    	);



	//自动验证表单信息
	protected $_validate = array(
	    array('name','3,12','姓名长度不够！',1,'length',3), //验证姓名长度
	    );

}

/*

<li><span>{$a.name}</span><span>{$a.add}</span><span>{$a.media}</span><span>{$a.phone}</span><span>{$a.tel}</span><span>{$a.message}</span><span>{$a.pro}</span></li>
 */