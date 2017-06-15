<?php
//命名空间
namespace Wjsadmin\Controller;
use Think\Controller;
//登录注册控制器
class LoginController extends Controller{
	//登录
	public function index(){
		if(IS_POST){
			header("Content-type: text/html; charset=utf-8"); 
			//接收post表单验证码
         	$code = I('post.yzm');
            //实例化验证码
			$Verify = new \Think\Verify();
            //检查验证码
            if(!$Verify->check($code)){
                 $this->error('验证码错误','',2);
                 exit;
             }


   			$date['username']=I('post.username');
   			$date['password']=I('post.password');
			
			if(empty($date['username'])){
				 $this->error('姓名不能为空','',2);
                 exit;
			}

			if(empty($date['password'])){
				 $this->error('密码不能为空','',2);
                 exit;
			}


			$d=D('admin');
			//查询账号
			$yes=$d->where(array('admin_user'=>$date['username']))->find();

			//检测账号是否存在
			if(!$yes){
				exit($this->error('用户名错误','',2));
			}

			
			//检测密码
			if(md5(md5($date['password'].$yes['admin_yan'])) !== $yes['admin_pass']){
				exit($this->error('密码错误','',2));
			}

			if($yes['admin_power'] == 0){
				exit($this->error('暂无权限登录','',2));
				
			}
			
			//全等 success 跳转
			if(md5(md5($date['password'].$yes['admin_yan'])) === $yes['admin_pass']){
				//session('loginuser',$yes["admin_name"]);
				//echo $yes['admin_name'];
				session('login_id',$yes['admin_id']);
				session('login_user',$yes['admin_user']);
				session('login_name',$yes['admin_name']);
				$this->success('恭喜您，登录成功','/Wjsadmin/Index/index',2);
				exit;
			}else{
				session('longin_id',null);
				session('login_user',null);
				session('login_name',null);
				session(null);
				exit;
			}

		}
		$login='login';
		$this->assign('login',$login);
		$this->display();
	}

	//注册
	public function relogin(){
		if(IS_POST){
			header("Content-type: text/html; charset=utf-8"); 
   			
			//接收验证码
			$code = I('post.yzm');
            //实例化验证码
			$Verify = new \Think\Verify();
            //检查验证码
            if(!$Verify->check($code)){
               exit($this->error('验证码错误','',2));
             }		

			//过滤非法数据
			$date['username'] = I('post.username');
			$date['password'] = I('post.password');
			$date['pwd'] = I('post.pwd');
			$date['phone'] = I('post.phone');
			$date['wechat'] = I('post.wechat');
			$date['email'] = I('post.email');
			$date['name'] = I('post.name');
			//两次密码不一致
			if($date['password'] !== $date['pwd']){
				exit($this->error('两次密码不一致','',2));
			}
			//*/
        	$User = D("admin"); // 实例化User对象

			if (!$User->create($date)){
			     // 如果创建失败 表示验证没有通过 输出错误提示信息
			    $this->error($User->getError(),'',2);
			    exit;
			}
			//设置盐值属性
			$User->admin_yan=$this->yan();
			$s=$User->admin_yan;
			
			//加密密码+盐值
			$User->admin_pass=md5(md5($date['password'].$s));
			//插入数据
			if($User->add()){
				$this->success('恭喜您，注册成功','index',2);
				exit;
			}else{
				$this->error('未知错误，请联系技术部',2);
				exit;
			}

		}


		$relogin='注册页面';
		$this->assign('relogin',$relogin);
		$this->display();
	}

	//验证码
	public function yzm(){
		/*
		  //接收验证码
			$code = I('post.yzm');
            //实例化验证码
			$Verify = new \Think\Verify();
            //检查验证码
            if(!$Verify->check($code)){
                 $this->error('验证码错误','',2);
             }
		 */
	        $Verify = new \Think\Verify();
	        $Verify->fontSize = 30;//字体大小
	        $Verify->length   = 4;//验证码长度
	        $Verify->useNoise = false;//false去除杂点

	        //$Verify->bg= array(100, 100, 100);//背景颜色
	       // $Verify->useImgBg = true; //背景图
	        $Verify->entry();
	    }


	//安全yan字段
 	public function yan(){
        $str= C('yan');
       
        return substr(str_shuffle($str),0,8);
    }



	      //空操作
	public function _empty(){
	   	$this->error('非法操作！操作不存在');
	   	exit;
	}

}

	