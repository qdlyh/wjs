<?php

namespace Home\Controller;

use Think\Controller;
//生肖吉祥物
class SxjxwController extends Controller{

	public function index(){
		header("Content-type: text/html; charset=utf-8");
		
		$index=M('goods');
        $title='生肖吉祥物';
        $list=$index->where('goods_class='."'$title'")->limit(6)->select();
        //var_dump($list);
        //exit;
        $this->assign('list',$list);
        //$this->display(); */ 
		$this->display();
	}
}