<?php

namespace Wjsadmin\Controller;

use Think\Controller;
//空控制器
class EmptyController extends Controller{

	public function index(){

		$this->error('空控制器','/Home/Index/index',2);

	}
	
}
