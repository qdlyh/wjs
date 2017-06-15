<?php

namespace Home\Controller;

use Think\Controller;

class CpproductController extends Controller{

	public function index(){
		header("Content-type: text/html; charset=utf-8"); 

		if(IS_GET){
			$id=I('get.id');

			$g=M('goods');

			$a=$g->find($id);

			$this->assign('list',$a);	
		//	$this->assign('sx',M('sx')->select());

		}
		

		$this->display();

	}

}