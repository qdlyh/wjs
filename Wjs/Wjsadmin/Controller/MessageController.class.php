<?php

namespace Wjsadmin\Controller;

use Think\Controller;

//留言控制器
class messageController extends Controller{

	public function index(){
		 header("Content-type: text/html; charset=utf-8"); 
		 echo '我是留言';
	}
}