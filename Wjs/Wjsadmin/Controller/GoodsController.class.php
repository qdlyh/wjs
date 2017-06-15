<?php
//命名空间
namespace Wjsadmin\Controller;
//选择命名空间
use Think\Controller;


class GoodsController extends Controller{
	//商品添加
	public function goods_add(){
	 	header("Content-type: text/html; charset=utf-8"); 	
	 		//检车session 是否有值
	 		if(!session('login_name')){
	 			$this->error('请先登录','/Wjsadmin/Login/index',2);
				exit;
	 		}
	 		if(!session('login_id')){
	 			$this->error('请先登录','/Wjsadmin/Login/index',2);
				exit;
	 		}
	 		$login_user=session('login_user');
	 		if(!$login_user){
	 			$this->error('请先登录','/Wjsadmin/Login/index',2);
				exit;
	 		}

	 		//接收Post数据
	 		if(IS_POST){

	 			//处理 post表单
	 			$goods['name']=I('name');//商品名
	 			$goods['num']=I('num');//货号
	 			$goods['caizhi']=I('caizhi');//材质
	 			$goods['shichangjia']=I('shichangjia');//市场价
	 			$goods['jia']=I('jia');//价格
	 			$goods['kucun']=I('kucun');//库存
	 			$goods['shangjia']=I('shangjia');//上架
	 			$goods['class']=I('class');//分类
	 			$goods['gongxiao']=I('gongxiao');//功效
	 			$goods['remai']=I('remai');//热卖
	 			$goods['beizhu']=I('beizhu');//备注
	 			$goods['fabuzhe']=I('fabuzhe');//发布者
	 			
	 			$g= D('goods');

	 			$goods_img=$_FILES['tu'];
	 				
	 			if (!$g->create($goods)){
				     // 如果创建失败 表示验证没有通过 输出错误提示信息
				    $this->error($g->getError(),'',2);
				    exit;
				}
				//检查是否有图片上传
				if($goods_img['name']){
	 				$upload = new \Think\Upload();// 实例化上传类
				    $upload->maxSize   =     3145728 ;// 设置附件上传大小
				    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				    $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
				    $upload->savePath  =     ''; // 设置附件上传（子）目录
				    // 上传文件 
				    $info   =   $upload->upload();
				    if(!$info) {// 上传错误提示错误信息
				        $this->error($upload->getError());
				    }else{// 上传成功
				   		
				   		$path=$info['tu']['savepath'];
				   		$savename=$info['tu']['savename'];
				   		//实例化图片处理类
				 		$image = new \Think\Image();
				 		//打开图片资源 
						$image->open('./Uploads/'.$path.$savename);
						// 生成一个固定大小为280*280的缩略图并保存
						$image->thumb(340, 340,\Think\Image::IMAGE_THUMB_FIXED)->save('./thumb/Thumb_340/'.$savename);
						$image->thumb(60, 60,\Think\Image::IMAGE_THUMB_FIXED)->save('./thumb/Thumb_60/'.$savename);
						$image->thumb(800,800,\Think\Image::IMAGE_THUMB_FIXED)->save('./thumb/Thumb_800/'.$savename);


				   		//拼接图片路径
				        $g->goods_img='/Uploads/'.$info['tu']['savepath'].$info['tu']['savename'];
				        $g->goods_img800='/Thumb/Thumb_800/'.$info['tu']['savename'];
				    	$g->goods_img340='/Thumb/Thumb_340/'.$info['tu']['savename'];
				    	$g->goods_img60='/Thumb/Thumb_60/'.$info['tu']['savename'];
				    }
	 			}
	 			//添加进去数据库成功跳转
				if($g->add()){
						$this->success('添加成功','Goods_list',2);
						exit;
				}else{
						$this->error('添加失败，请重新添加',2);
						exit;
				}
				
	 		}
	 		//分配首页产品
	 		$classname=M('class');
	 		$this->assign('classname',$classname->select());
			$this->display();

		}


	//商品展示
	public function goods_list(){
	 	header("Content-type: text/html; charset=utf-8"); 	
	 	//检车session 是否有值
	 		if(!session('login_name')){
	 			$this->error('请先登录','/Wjsadmin/Login/index',2);
				exit;
	 		}
	 		if(!session('login_id')){
	 			$this->error('请先登录','/Wjsadmin/Login/index',2);
				exit;
	 		}
	 		$login_user=session('login_user');
	 		if(!$login_user){
	 			$this->error('请先登录','/Wjsadmin/Login/index',2);
				exit;
	 		}

	 	$p=I('get.p')?I('get.p'):1;
    	$goods = M('goods'); // 实例化User对象
		// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$list = $goods->order('goods_id desc')->page($p.',5')->select();
		//$this->assign('list',$list);// 赋值数据集
		$count      = $goods->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
	
 
    	$this->assign('list',$list);
    	$this->assign('page',$show);// 赋值分页输出

    	$this->display();
	
	}

	//商品修改
	public function goods_save(){
	 	header("Content-type: text/html; charset=utf-8");
	 	//检车session 是否有值
	 		if(!session('login_name')){
	 			$this->error('请先登录','/Wjsadmin/Login/index',2);
				exit;
	 		}
	 		if(!session('login_id')){
	 			$this->error('请先登录','/Wjsadmin/Login/index',2);
				exit;
	 		}
	 		$login_user=session('login_user');
	 		if(!$login_user){
	 			$this->error('请先登录','/Wjsadmin/Login/index',2);
				exit;
	 		}
	 		
	 		//post修改商品
	 		if(IS_POST){
	 			//print_r($_POST);

	 			$dateid=I('id');
	 			$date['goods_name']=I('name');//商品名
	 			$date['goods_material']=I('caizhi');//材质
	 			$date['goods_prices']=I('shichangjia');//市场价
	 			$date['goods_price']=I('jia');//价格
	 			$date['goods_stock']=I('kucun');//库存
	 			$date['goods_class']=I('class');
	 			$date['goods_effect']=I('gongxiao');
	 			$date['goods_hot']=I('remai');
	 			$date['goods_state']=I('state');
	 			$date['goods_remark']=I('beizhu');
	 			$date['goods_admin']=I('fabuzhe');
		 			
	 			$goods_img=$_FILES['tu'];
	 			
	 			$goods=D('goods');
				if (!$goods->create($date)){
				     // 如果创建失败 表示验证没有通过 输出错误提示信息
				    $this->error($goods->getError(),'',2);
				    exit;
				}


				if($goods_img['name']){	 			
	 					$img=$goods->where('goods_id='."'$dateid'")->find();
			 				if(!empty($img['goods_img'])){
			 					unlink ('.'.$img['goods_img']);		 					
			 				}
			 				if(!empty($img['goods_img220'])){
			 					unlink ('.'.$img['goods_img220']);
			 				}
			 				if(!empty($img['goods_img60'])){
			 					unlink ('.'.$img['goods_img60']);
			 				}

			 				$upload = new \Think\Upload();// 实例化上传类
						    $upload->maxSize   =     3145728 ;// 设置附件上传大小
						    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
						    $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
						    $upload->savePath  =     ''; // 设置附件上传（子）目录
						    // 上传文件 
						    $info   =   $upload->upload();
						    if(!$info) {// 上传错误提示错误信息
						        $this->error($upload->getError());
						    }else{// 上传成功
						   		
						   		$path=$info['tu']['savepath'];
						   		$savename=$info['tu']['savename'];
						   		//实例化图片处理类
						 		$image = new \Think\Image();
						 		//打开图片资源 
								$image->open('./Uploads/'.$path.$savename);
								// 生成一个固定大小为280*280的缩略图并保存
								$image->thumb(280, 280,\Think\Image::IMAGE_THUMB_FIXED)->save('./thumb/Thumb_280/'.$savename);
								$image->thumb(60, 60,\Think\Image::IMAGE_THUMB_FIXED)->save('./thumb/Thumb_60/'.$savename);
						   		//拼接图片路径
						        $goods->goods_img='/Uploads/'.$info['tu']['savepath'].$info['tu']['savename'];
						    	$goods->goods_img220='/Thumb/Thumb_280/'.$info['tu']['savename'];
						    	$goods->goods_img60='/Thumb/Thumb_60/'.$info['tu']['savename'];
						    }

				}
				//不在field字段将被过滤
				if($goods->field('goods_name,goods_material,goods_prices,goods_price,goods_stock,goods_class,goods_effect,goods_hot,goods_state,goods_img,goods_img220,goods_img60,goods_remark,goods_admin')->where('goods_id='."'$dateid'")->save()){
					$this->success('修改商品成功','Goods_list',5);
					exit;
				}else{
					$this->error('修改商品失败，请重试',2);
					exit;
				}
	 		}

	 		//get展示商品
	 		if(IS_GET){
	 			$id=I('get.id');
	 			$goods=M('goods');
	 			$goods_save=$goods->where('goods_id= '."'$id'")->find();
	 			$this->assign('goods_save',$goods_save);

	 		}
		
		$this->display();
		exit;
	}

	//商品删除
	public function goods_del(){
		header("Content-type: text/html; charset=utf-8");
		//检车session 是否有值
	 		if(!session('login_name')){
	 			$this->error('请先登录','/Wjsadmin/Login/index',2);
				exit;
	 		}
	 		if(!session('login_id')){
	 			$this->error('请先登录','/Wjsadmin/Login/index',2);
				exit;
	 		}
	 		$login_user=session('login_user');
	 		if(!$login_user){
	 			$this->error('请先登录','/Wjsadmin/Login/index',2);
				exit;
	 		} 
		if(IS_GET){
		
			//接收ID
			$id=I('get.id');
			$dg=M('goods');
			//查出图片
			$row=$dg->where('goods_id= '."'$id'")->find();
			//删除图片
			unlink ('.'.$row['goods_img']);
			unlink ('.'.$row['goods_img340']);
			unlink ('.'.$row['goods_img800']);
			unlink ('.'.$row['goods_img60']);
			//成功跳转
			if($dg->where('goods_id= '."'$id'")->delete()){
				$this->success('删除成功','',2);
				exit;
			}else{
				
	   			$this->error('未知错误，删除失败!','',2);
			}
			
		}	
		
		exit;
	}

	//商品批量删除
	public function godds_dels(){
	 	header("Content-type: text/html; charset=utf-8"); 	
		echo '商品批量删除';
		exit;
	}


	//空操作
	public function _empty(){
		header("Content-type: text/html; charset=utf-8"); 
	   	$this->error('非法操作!','http://www.baidu.com',2);
	   	exit;
	}

}