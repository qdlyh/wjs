<?php
namespace Home\Controller;

//选择命名空间
use Think\Controller;
	
	class XiadanController extends Controller{

		public function xiadan(){
			header("Content-type: text/html; charset=utf-8"); 
			$this-> display();
		}

	}

