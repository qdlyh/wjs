<?php

namespace Wjsadmin\Controller;

use Think\Controller;

/**
 * 个人中心
 **/
class AdminController extends Controller{

	public function index(){
		header("Content-type: text/html; charset=utf-8"); 
			//检车session 是否有值
	 		if(!session('login_name')){
	 			$this->error('请先登录','/Wjsadmin/Login/index',2);
				exit;
	 		}
	 		if(!session('login_id')){
	 			$this->error('请先登录','/Wjsadmin/Login/index',2);
				exit;
	 		}
	 		$login_user=session('login_user');
	 		if(!$login_user){
	 			$this->error('请先登录','/Wjsadmin/Login/index',2);
				exit;
	 		}

	 		$admin=M('admin');

	 		$this->assign('admin',$admin->find(session('login_id')));

			$this->display();
	}


}