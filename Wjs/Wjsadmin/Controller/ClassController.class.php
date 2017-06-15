<?php

namespace Wjsadmin\Controller;

use Think\Controller;

/**
 * 展示分类
 **/
class ClassController extends Controller{

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

	 		$class=M('class');
	 		
	 		$this->assign('class',$class->select());

			$this->display();
	}

	//添加生肖和规格
	public function any_add(){
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

	 	if(IS_POST){
	 		$date['any_num']=I('post.num');

	 		if(empty($date['any_num'])){
	 			$this->error('款号不能为空','',2);
				exit;
	 		}

	 		$date['goods_num']=I('post.class');
	 		$date['any_name']=I('post.any');		
	 		$date['any_admin']=I('post.fabuzhe');
	 		$date['any_time']=time();
	 	
	 		$any=M('any');

	 		if($any->add($date)){
	 			$this->success('添加成功','',2);exit;
	 		}else{
	 			$this->error('添加失败，请注意格式','',2);
				exit;
	 		}
	 	}	
	 		$goods=M('goods');
	 		$this->assign('goods',$goods->select());
	 		$this->display();

	}
	//小生肖展示
	public function any_list(){

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
	 		/*
	 		$any=M('any');

	 		$this->assign('any',$any->select());*/
	 		$p=I('get.p')?I('get.p'):1;
	    	$any = M('any'); // 实例化User对象
			// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
			$list = $any->order('any_id desc')->page($p.',2')->select();
			//$this->assign('list',$list);// 赋值数据集
			$count      = $any->count();// 查询满足要求的总记录数
			$Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出
		
	 
	    	$this->assign('any',$list);
	    	$this->assign('page',$show);// 赋值分页输出
			$this->display();
	}

	//添加大分类
	public function class_add(){
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

	 	if(IS_POST){
	 		$date['class_name']=I('post.name');
	 		if(empty($date['class_name'])){
	 			$this->error('分类名不能为空','',2);
				exit;
	 		}
	 		$date['class_num']=I('post.num');
	 		if(empty($date['class_num'])){
	 			$this->error('分类号不能为空','',2);
				exit;
	 		}
	 		$date['class_admin']=I('post.fabuzhe');
	 		$date['class_time']=time();

	 		$class=M('class');

	 		if($class->add($date)){
	 			$this->success('添加成功','',2);exit;
	 		}else{
	 			$this->error('添加失败，请注意格式','',2);
				exit;
	 		}
	 	}	

	 	$this->display();

	}


	//分类删除
	public function class_del(){
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

		if(IS_GET){
		
			//接收ID
			$id=I('get.id');
			$dg=M('class');
	
			//成功跳转
			if($dg->where('class_id= '."'$id'")->delete()){
				$this->success('删除成功','',2);
				exit;
			}else{
	   			$this->error('未知错误，删除失败!','',2);
	   			exit;
			}
			
		}	
		
		exit;
	}

	//生肖分类删除
	public function any_del(){
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

		if(IS_GET){
		
			//接收ID
			$id=I('get.id');
			$dg=M('any');
	
			//成功跳转
			if($dg->where('any_id= '."'$id'")->delete()){
				$this->success('删除成功','',2);
				exit;
			}else{
	   			$this->error('未知错误，删除失败!','',2);
	   			exit;
			}
			
		}	
		
		exit;
	}

}