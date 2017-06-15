<?php


namespace Home\Model;
use Think\Model;

class Wjs_adminModel extends Model{
	protected $_map = array(
        'username' =>'admin_user', // 把表单中name映射到数据表的admin_user字段
        'password'  =>'admin_pass', 
     	'phone'  =>'admin_phone',
     	'wechat'  =>'admin_wechat',
     	'email'  =>'admin_email',
     	'name'  =>'admin_name',

     );
	//自动验证表单信息
	protected $_validate = array(
	    array('admin_user','5,12','账号长度不够',1,'length',3), //验证姓名长度
	    );

}

