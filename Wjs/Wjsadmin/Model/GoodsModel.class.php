<?php

namespace Wjsadmin\Model;
use Think\Model;

class GoodsModel extends Model{
	//字段映射
    protected $_map = array(
        'name' =>'goods_name', //商品名
        'num'=>'goods_num',//商品号
        'caizhi'  =>'goods_material', //材质
        'shichangjia'=>'goods_prices',//市场价
        'jia'=>'goods_price',//结缘价
        'kucun'=>'goods_stock',//库存
        'shangjia'=>'goods_state',//上架
        'class'=>'goods_class',	//分类
        'gongxiao'=>'goods_effect',	//功效
        'remai'=>'goods_hot',	//热卖
        'fabuzhe'=>'goods_admin',//发布人
        'beizhu'=>'goods_remark',//备注
        'tu'=>'goods_img',//文件  
     );

    //检查表单输入合法性,不在数据库字段将过滤
    protected $insertFields = array(
        'goods_name',
        'goods_num',
        'goods_material',
        'goods_prices',
        'goods_price',
        'goods_stock',
        'goods_class',
        'goods_effect',
        'goods_hot',
        'goods_state',
        'goods_img',
        'goods_imgshow',
        'goods_imgthum',
        'goods_remark',
        'goods_time',
        'goods_admin',
    );
    

   	//自动验证
    protected $_validate = array(
    	//array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
        array('goods_name','require','商品名必须填'),
        array('goods_class','require','分类必须填'), 
        array('goods_prices','require','市场价必须填'),  
        array('goods_price','require','结缘价必须填'), 
        array('value',array(1,2,3),'值的范围不正确！',2,'in'), // 当值不为空的时候判断是否在一个范围内
        array('password','checkPwd','密码格式不正确',0,'function'), // 自定义函数验证密码格式
        
       );

  
    //自动完成
    protected $_auto = array (
        array('goods_time','time',1,'function'),//添加时间
     );

}