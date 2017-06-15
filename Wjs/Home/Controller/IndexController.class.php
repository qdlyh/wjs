<?php
//命名空间
namespace Home\Controller;
//选择命名空间
use Think\Controller;

//默认首页控制器
class IndexController extends Controller {
    public function index(){
       header("Content-type: text/html; charset=utf-8"); 
       
       $index=M('goods');
       $title='本命佛';
       $list=$index->where('goods_class='."'$title'")->limit(6)->select();
       $this->assign('list',$list);
       $this->display();
    }

    
}