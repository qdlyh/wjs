<?php
namespace Wjsadmin\Controller;

use Think\Controller;
//订单类
class OrderController extends Controller{
	public function order_add(){
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
	 			$order['order_name']=I('post.name');
	 			$order['order_phone']=I('post.iphone');
	 			$order['order_area']=I('post.dizhi');
	 			$order['order_pro']=I('post.changpin');
	 			$order['order_money'] = I('post.jia');
	 			$order['order_media'] = 'Admin Order';
	 			$order['order_mess'] = I('post.beizhu');
	 			$order['order_sn'] = date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
	 			$order['order_sx'] = I('post.sx');
	 			$order['order_bz'] = $order['order_mess'].'附加属相('.$order['order_sx'].'), 价格'.$order['order_money'];

	 			$order['order_ip']=getIP();
				$order['order_time']=time();
				$order['order_date']=date("Y-m-d");
	 			$ord=M('order');
	 			if($ord->add($order)){
	 				$this->success('添加成功','',2);exit;
	 			}else{
	 				$this->error('添加失败!','',2);
	 				exit;	
	 			}
	 		}



		$this->display();
	}
	//订单展示
	public function order_list(){
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

	 	$p=I('get.p')?I('get.p'):1;
    	$goods = M('order'); // 实例化User对象
		// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$list = $goods->order('order_id desc')->page($p.',2')->select();
		$count      = $goods->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
	
 
    	$this->assign('list',$list);
    	$this->assign('page',$show);// 赋值分页输出

    	$this->display();
	}
	
	//删除订单
	public function order_del(){
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
	 			$id=I('get.id');
	 			$del=M('order');
	 			//$del->delete($id);
	 			if($del->delete($id)){
	 				$this->success('删除成功','',2);
	 			}else{
	 				$this->error('未知错误，删除失败!','',2);
	 			}	
	 		}
	
	}

	//查看订单完整商品
	public function order_goods(){
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
	 			$id=I('get.id');
	 			$sel=M('ordergoods');
	 			$this->assign('gd',$sel->where('order_id= '."'$id'")->select());
	 		}
	 		$this->display();
	
	}

	public function order_seach(){
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
	 			$ses=I('post.sea');
	 			if(empty($ses)){
						$this->success('请输入电话号码查询','',1);exit;
					}
	 			if(!empty($ses)){
	 				$p=I('get.p')?I('get.p'):1;
			    	$goods = M('order'); // 实例化User对象
					// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
					$list = $goods->where('order_phone='."'$ses'")->order('order_id desc')->page($p.',2')->select();

					$count      = $goods->count();// 查询满足要求的总记录数
					$Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
					$show       = $Page->show();// 分页显示输出
				
			 
			    	$this->assign('list',$list);
			    	$this->assign('page',$show);// 赋值分页输出

			    	$this->display();
	 			}
	 	}
	}
	//导出数据
	public function texcel(){
		header("Content-type: text/html; charset=utf-8"); 
		$ord=M('order');
		//查询导出
    	$list = $ord->field('order_name,order_phone,order_area,order_pro,order_money,order_media,order_bz')->where('order_excel=0')->order('order_id desc')->limit(100)->select();
    	//未导过最大ID
    	$max=$ord->where('order_excel=0')->max('order_id');	
    	// 文件名
    	$file_name   = date("YmdHis",time()).'数据';
    	$file_suffix = "xls";
    	header("Content-Type: application/vnd.ms-excel");
    	header("Content-Disposition: attachment; filename=$file_name.$file_suffix");
    	header("Content-Type: applicationnd.openxmlformats-officedocument.spreadsheetml.sheet; charset=" . $this->sEncoding);
    	$this->assign('list',$list);
    	ob_end_clean();
		//修改订单导出转台
		if(!empty($max)){
				$date=array('order_excel'=>1);
    			$o=$ord->where('order_id <='."'$max'")->save($date);
		}
		
		$this->display();
	}


}