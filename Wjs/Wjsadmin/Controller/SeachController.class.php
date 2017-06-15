<?php


namespace Wjsadmin\Controller;
use Think\Controller;
 /**
  * 按手机号码查找订单
  * @param $keywords string 手机号码
  * @return bool
  */
class SeachController extends Controller{
	public  function index(){
		header("Content-type: text/html; charset=utf-8"); 
		if(IS_POST){
			
			$order_num=I('post.keywords');
	
			$order=M('order');

			$ok=$order->where('order_phone= '."'$order_num'")->select();
			//$oo=array('1','2','3','5');
			if(empty($ok)){
				echo '抱歉，没有查到数据';
				exit;
			}else{
				echo '有单';
				print_r($ok);
				exit;
			}

		}
	}
}

