<?php

namespace Home\Controller;

use Think\Controller;
//貔貅
class ZcpixiuController extends Controller{

	public function index(){
		header("Content-type: text/html; charset=utf-8");
		/*
		$index=M('goods');
        $title='貔貅';
        $list=$index->where('goods_class='."'$title'")->limit(6)->select();
        $this->assign('list',$list);
        $this->display(); 
        */ 
		$this->display();
	}
}