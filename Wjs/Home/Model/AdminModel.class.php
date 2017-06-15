<?php

namespace Home\Model;
use Think\Model;
//管理员数据模型
class AdminModel extends Model{
	//字段映射
	protected $_map = array(
        'username' =>'admin_user', // 把表单中name映射到数据表的username字段
        'mail'  =>'admin_email', // 把表单中的mail映射到数据表的email字段
    	'password'=>'admin_pass',
    	'phone'=>'admin_phone',
    	'wechat'=>'admin_wechat',
    	'name'=>'admin_name',
     );

	//字段验证
    protected $_validate = array(
    	array('admin_user','require','账号必须填'),
    	array('admin_pass','require','密码必须填'),	
    	array('admin_phone','require','手机必须填'),
    	array('admin_name','require','姓名必须填'),	    
	    array('admin_user','5,15','账号长度最少5位数',1,'length',3), // 当值不为空的时候判断是否在一个范围内
	   	array('admin_user','','账号已经存在！',1,'unique',1),//验证是否存在
	  	array('admin_pass','6,15','密码最少6位数',1,'length',3),
	  	array('pwd','admin_pass','自动验证两次密码不一致',0,'confirm'),//验证两次密码是否一直 
     	//array('password','checkPwd','密码格式不正确',0,'function'), // 自定义函数验证密码格式
     	array('email','email','邮箱格式可能不对','1','',3),//验证邮箱
	   );

  
    //自动验证
    protected $_auto = array (       
       
        array('admin_yan','yan',1,'callback'), // 对name字段在新增和编辑的时候回调getName方法
        // / array('update_time','time',2,'function'), // 对update_time字段在更新的时候写入当前时间戳
     

     );




   
}