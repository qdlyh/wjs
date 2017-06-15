<?php

namespace Wjsadmin\Model;
use Think\Model;

class Admin_wjsController extends Controller{
		protected $_map = array(
	        'username' =>'admin_user', //映射账号
	        'pass'  =>'admin_pass',
	        'phone'  =>'admin_phone',//映射手机
	        'wechat'  =>'admin_wechat',//映射微信QQ
	        'email'  =>'admin_email',//映射邮箱
	        'name'  =>'admin_name',//映射姓名
	    	);

		//自动验证表单信息
	protected $_validate = array(
	    array('admin_user','5,12','姓名长度不够！',1,'length',3), //验证姓名长度
	    );	

	}
