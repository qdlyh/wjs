<?php

namespace Home\Controller;

use Think\Controller;
//生肖运势
class SxyunshiController extends Controller{

	public function index(){
		header("Content-type: text/html; charset=utf-8");
		/*
		$index=M('goods');
        $title='生肖运势';
        $list=$index->where('goods_class='."'$title'")->limit(6)->select();
        $this->assign('list',$list);
        $this->display(); */ 
		$this->display();
	}
}