<?php
//命名空间
namespace Sj\Controller;
//选择命名空间
use Think\Controller;

//默认首页控制器
class SjjController extends Controller {
    public function sjcp(){
       header("Content-type: text/html; charset=utf-8"); 
       if(IS_GET){

       $goods=M('goods');
	     $this->assign('goods',$goods->find(I('get.id')));
       }
       $this->display();
    }

    public function sjjxw(){
       header("Content-type: text/html; charset=utf-8"); 
       
       $this->display();
    }

    
}