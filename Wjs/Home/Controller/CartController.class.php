<?php

namespace Home\Controller;

use Think\Controller;


class CartController extends Controller{
	//购物车
	public function gwcart(){
		header("Content-type: text/html; charset=utf-8");
		$tool= new \Home\Tool\AddTool();

		if(IS_GET){
			$id=I('get.id');
			$goods=M('goods')->field('goods_id,goods_name,goods_price,goods_img60')->find($id);		
			
			if(!empty($id)){
					$tool->add($goods['goods_id'],$goods['goods_name'],$goods['goods_price'],$goods['goods_img60']);
				}	
		}
		//$ka= session('kache');
		//$tool= new \Home\Tool\AddTool();
		$ka=$tool->item;
		$this->assign('ka',$ka);
		$this->assign('zj',$tool->calcMoney());
		$this->assign('zong',$tool->calcType());
		$this->assign('jian',$tool->calcCnt());
		$this->display();
	}

	//跳转
	public function gwsuccess(){
		header("Content-type: text/html; charset=utf-8");
		$this->display();
	}
	
	//确认订单页面
	public function gwform(){
		header("Content-type: text/html; charset=utf-8");
		$cart = new \Home\Tool\AddTool();
		//print_r($_SESSION['kache']['goods_id']['goods_name']);
		$sess=session('kache');
		$this->assign('ka',$sess);
		$this->assign('zj',$cart->calcMoney());
		$this->assign('zong',$cart->calcType());
		$this->assign('jian',$cart->calcCnt());
		$this->display();
	}

	//真实下单
	public function order_add(){
		header("Content-type: text/html; charset=utf-8");
		$cart = new \Home\Tool\AddTool();

		if(IS_POST){
			
			
			$date['order_name']=I('post.username');
			if(empty($date['order_name'])){
				echo '姓名不能为空';exit;
			}
			$date['order_phone']=I('post.number');
			if(empty($date['order_phone'])){
				echo '电话不能为空';exit;
			}
			$date['order_area']=I('post.area');
			if(empty($date['order_area'])){
				echo '地址不能为空';exit;
			}
			$date['order_mess']=I('post.word');
			$date['order_pay']=I('post.pay');
			$date['order_media']=I('post.FormSite2');
			$date['order_sx'] = I('post.sx');
			$date['order_sn']= date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
			$date['order_money']=$cart->calcMoney();
			$date['order_ip']=getIP();
			$date['order_time']=time();
			$date['order_date']=date("Y-m-d");
			
			
			//echo $date['order_sx'];
			$a=getCity($date['order_ip']);
			$date['order_city']=$a['country'].$a['area'].$a['region'].$a['city'].$a['county'].$a['isp'];	
			
			foreach($cart->item as $ky=>$vl){
				$vls['goods_name']=$vl['goods_name'];
				$vls['goods_price']=$vl['goods_price'];	
			}
			//拼接Y3订购产品字段
			$date['order_pro'] = implode('',$vls);	
			$date['order_bz'] = $vls['goods_name'].' ('.$date['order_sx'].'), 订购价格'.$vls['goods_price'];
				
			$m=M('ordergoods');

			if(empty($cart->item)){
				echo '请先添加商品';
				exit;
			}
	
			$order=M('order');
			$orid=$order->add($date);
			if($orid){
				
				foreach($cart->item as $k=>$v){
					$row=array();
					$row['goods_id']=$k;
					$row['order_id']=$orid;
					$row['order_sn']=$date['order_sn'];
					$row['goods_name']=$v['goods_name'];
					$row['goods_price']=$v['goods_price'];
					$row['order_goods_num']=$v['num'];
					$row['order_goods_time']=$date['order_time'];
					$dates[]=$row;
				}

				if($m->addAll($dates)){
					//echo '恭喜下单成功,稍后会有工作人员和您练习';
					$arr=array(
						'code'=>'ok',
						'msg'=>'恭喜下单成功,稍后会有工作人员和您练习'
						);
					$cart->clear();
					$this->ajaxReturn($arr);
					exit;
				}
				
			}else{
				$arr=array(
					'code'=>'104',
					'papa'=>'抱歉，位置错误，请重新下单'
					);	
				$this->ajaxReturn($arr);exit;
			}
		
			
		}

	}

	//删除购物车某种商品
	public function cart_del(){
		header("Content-type: text/html; charset=utf-8");
		
		
		if(IS_GET){
			$id=I('get.id');
			$cart = new \Home\Tool\AddTool();
			$cart->del($id);
		
			$this->success('删除该种商品成功','/Home/Cart/gwcart',1);exit;
		}

	}

	//减少一个购物车商品
	public function cart_decr(){
		header("Content-type: text/html; charset=utf-8");
		if(IS_GET){
			$id=I('get.id');
			$cart = new \Home\Tool\AddTool();
			$cart->decr($id);
			//重定向
			redirect('/Home/Cart/gwcart',0);exit;
			//$this->redirect('/Home/Cart/gwcart', 5, '页面跳转中...');exit;
			//$this->success('减少成功','/Home/Cart/gwcart',3);exit;
		}
	}

	public function cart_clear(){
		header("Content-type: text/html; charset=utf-8");
		$cart = new \Home\Tool\AddTool();
		$cart->clear();
		$this->success('清空购物车成功','/Home/Cart/gwcart',1);exit;

	}
}
