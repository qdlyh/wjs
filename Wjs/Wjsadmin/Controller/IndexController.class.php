<?php
//命名空间
namespace Wjsadmin\Controller;
//选择命名空间
use Think\Controller;

//默认首页控制器
class IndexController extends Controller {
    public function index(){
       header("Content-type: text/html; charset=utf-8"); 
      
       //检车session 是否有值
	 		if(!session('login_name')){
	 			$this->error('请先登录','/Wjsadmin/Login/index',2);

				exit;
	 		}
	 		$a=session('?login_id');
	 		if(!$a){		
	 			$this->error('请先登录','/Wjsadmin/Login/index',2);
				exit;
	 		}
	 		$login_user=session('login_user');
	 		if(!$login_user){
	 			$this->error('请先登录','/Wjsadmin/Login/index',2);
				exit;
	 		}

	 		    $order=M('order');
          $this->assign('a',$order->query("select count(order_excel) from wjs_order  where order_excel=0"));       
          $this->assign('order_num',$order->Count('order_id'));
       		$this->assign('order_money',$order->sum('order_money'));
       		$this->assign('order_max',$order->max('order_money'));
       		$this->assign('order_media',$order->max('order_media'));
       	
       		
       $this->display();
    }

    public function out(){
    	header("Content-type: text/html; charset=utf-8"); 
    		//echo '我是退出登录';
    	session('longin_id',null);
			session('login_user',null);
			session('login_name',null);
			//情况所有session
			//session(null);
			$this->success('恭喜您，退出成功','/Wjsadmin/Login/index',2);
			exit;
    }

    public function gaosita(){
    	header("Content-type: text/html; charset=utf-8"); 
    	$arr=array(
    		1,
    		2,
    		array(2,array(
    			4,array(5,array(6,7,array(9)))
    			)),66);
    	//print_r($arr);
    	echo json_encode($arr);
    }
}