<?php
//后台数据模型命名空间
namespace Wjsadmin\Model;
use Think\Model;

//管理员数据模型
class AdminModel extends Model{


    //字段映射
    protected $_map = array(
        'username' =>'admin_user', // 把表单中name映射到数据表的username字段
        'email'  =>'admin_email', // 把表单中的mail映射到数据表的email字段
        'password'=>'admin_pass',
        'phone'=>'admin_phone',
        'wechat'=>'admin_wechat',
        'name'=>'admin_name'   
     );


    //检查表单输入合法性,不在数据库字段将过滤
    protected $insertFields = array(
        'admin_user',
        'admin_pass',
        'admin_phone',
        'admin_wechat',
        'admin_email',
        'admin_yan',
        'admin_name'
    );
   

    //  array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
    protected $_validate = array(
        array('admin_user','require','账号必须填'),
        array('admin_pass','require','密码必须填'),  
        array('admin_phone','require','手机必须填'),
        array('admin_name','require','姓名必须填'),  

        array('admin_user','5,15','账号长度最少5位数',1,'length',3), 
        array('admin_pass','5,15','密码最少5位数',1,'length',3),

        array('admin_user','','账号已经存在！',1,'unique',1),//验证是否存在
        array('admin_phone','','手机号已经存在！',1,'unique',1),//验证是否存在

        array('pwd','admin_pass','自动验证两次密码不一致',0,'confirm'),//验证两次密码是否一直 
        //array('pwd','admin_pass','自动验证两次密码不一致',0,'confirm'),//验证两次密码是否一直 
        array('admin_email','email','email邮箱格式错误'),
       );

  
    //自动完成
    protected $_auto = array (       
        //array(完成字段1,完成规则,[完成条件,附加规则]), 
        // / array('update_time','time',2,'function'), // 对update_time字段在更新的时候写入当前时间戳
        array('admin_lastime','time',1,'function'),
        array('admin_time','time',1,'function'),
        array('admin_num','adminNum',1,'callback'),
        array('admin_token','adminToken',1,'callback'),

     );

    
    //return 员工号
    public function adminNum(){
            $admin=M('admin');
            $no=$admin->order('admin_id desc')->find();
            return ++$no['admin_num'];
        }

    //加密token    
    public function adminToken(){
       // echo yan()."我是token<br>";
        echo $_auto['admin_yan'];
        return md5(sha1($date['username'].$date['password'].$date['phone']));
    }


      
}