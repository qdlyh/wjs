<?php
namespace Home\Controller;

use Think\Controller;

class OrderController extends Controller{
	public function order_add(){
	
		 header("Content-type: text/html; charset=utf-8"); 
		if(IS_POST){

		 print_r($_POST);
		}
	
	}

}