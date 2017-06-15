<?php

namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller{
	//登录
	public function index(){
		if(IS_POST){
			header("Content-type: text/html; charset=utf-8"); 
            $code = I('post.yzm');
			$Verify = new \Think\Verify();
            //检查验证码
            if(!$Verify->check($code)){
                 $this->error('验证码错误','',2);
             }


   			$username = I('post.username');
            $pwd = I('post.pwd');
			if(empty($username)){
				 $this->error('姓名不能为空','',2);
                 exit;
			}
			if(empty($pwd)){
				 $this->error('密码不能为空','',2);
                 exit;
			}
					//查询账号
			$user=M('user');
			$y=$user->where(array('user_name'=>$username))->find();

			//检测账号是否存在
			if(!$y){
				exit($this->error('用户名错误，不存在','',2));
			}

			
			//检测密码
			if(md5(md5($pwd.$yes['user_yan'])) !== $y['user_pass']){
				exit($this->error('密码错误','',2));
			}else{
				session('user_id',$y['user_id']);
				session('user_name',$y['user_name']);
				$this->success('恭喜您，登录成功','/Home/Index',2);
				exit;
			}

		}

		$this->display();
	}

	//注册
	public function relogin(){
		if(IS_POST){
			header("Content-type: text/html; charset=utf-8"); 

			$code = I('post.reyzm');
			$Verify = new \Think\Verify();
            //检查验证码
            if(!$Verify->check($code)){
                 $this->error('验证码错误','',2);
             }
		
			//I重新接收POST数据
			$date['user_name'] = I('post.username');
			$pwd = I('post.pwd');
			$date['user_pass']=md5(md5($pwd.$date['yan']));
			$date['user_yan']=substr(str_shuffle(C('yan')),0,8);
			$date['user_token']=md5(md5($date['user_name'].$date['user_pass'].$date['user_yan']));
			$date['user_time']=time();
			$user=M('user');
			
			$y=$user->where(array('user_name'=>$date['user_name']))->find();

			//检测账号是否存在
			if($y){
				exit($this->error('用户名已经存在，请重新修改','',2));
			}

			if($user->add($date)){
				$this->success('恭喜您，注册成功','',2);
				exit;
			}else{
				$this->error('未知错误，请联系技术部',2);
				exit;
			}
		}
	}

	//验证码
	public function yzm(){
	        $Verify = new \Think\Verify();
	        $Verify->fontSize = 30;//字体大小
	        $Verify->length   = 4;//验证码长度
	        $Verify->useNoise = false;//false去除杂点
	        //$Verify->bg= array(100, 100, 100);//背景颜色
	       // $Verify->useImgBg = true; //背景图
	        $Verify->entry();
	    }
	//注册验证码
	public function reyzm(){
	        $Verify = new \Think\Verify();
	        $Verify->fontSize = 30;//字体大小
	        $Verify->length   = 4;//验证码长度
	        $Verify->useNoise = false;//false去除杂点
	        $Verify->bg= array(255,228,181);//背景颜色
	       // $Verify->useImgBg = true; //背景图
	        $Verify->entry();
	    }    
		



	      //空操作
	public function _empty(){
	   	$this->error('非法操作！操作不存在');
	}

}

	