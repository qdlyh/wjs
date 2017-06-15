<?php
//命名空间
namespace Sj\Controller;
//选择命名空间
use Think\Controller;

//默认首页控制器
class IndexController extends Controller {
    public function index(){
       header("Content-type: text/html; charset=utf-8"); 
       
       $goods=M('goods');
       $this->assign('go',$goods->order('goods_id desc')->limit(6)->select());
       $this->display();
    }

    
}