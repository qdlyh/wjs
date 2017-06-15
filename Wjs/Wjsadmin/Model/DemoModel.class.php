<?php


namespace Wjsadmin\Model;
use Think\Model;

/**
* @下单
*/
class DemoModel extends Model{
	//自动映射
	protected $_map = array(
        'username' =>'admin_user', //映射来源
        'password'  =>'admin_pass',//映射订单姓名
        'phone'  =>'admin_phone',//映射地址
        'wechat'  =>'admin_wechat',//映射手机
        'email'  =>'admin_email',//映射留言
        'name'  =>'admin_name',//映射电话

    	);



	//自动验证表单信息
	protected $_validate = array(
	    array('admin_user','3,12','Demo姓名长度不够！',1,'length',3), //验证姓名长度
	    );

}

/*

<li><span>{$a.name}</span><span>{$a.add}</span><span>{$a.media}</span><span>{$a.phone}</span><span>{$a.tel}</span><span>{$a.message}</span><span>{$a.pro}</span></li>
 */