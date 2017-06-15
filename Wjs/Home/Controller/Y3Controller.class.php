<?php

namespace Home\Controller;

use Think\Controller;

//excel导出控制器
class Y3Controller extends Controller{
	public function index(){

		$m= M('y3');

		$m->
		$this->display();
	}

	/*/phpexcel导出
	public function export(){
		import("ORG.Yufan.Excel");
		$list = M('y3')->select();
		$row=array();
		$row[0]=array('联系人','电话1','电话2','电话3','地址','订购产品','金额','来源','备注','跟进内容');
		$i=1;
		foreach($list as $v){
		        $row[$i]['0'] = $v['y3_name'];
		        $row[$i]['1'] = $v['y3_phone'];
		        $row[$i]['2'] = NULL;
		        $row[$i]['3'] = NULL;
		        $row[$i]['4'] = $v['y3_area'];
		        $row[$i]['5'] = $v['y3_goods'];
		        $row[$i]['6'] = $v['y3_price'];
		        $row[$i]['7'] = $v['y3_media'];
		        $row[$i]['8'] = $v['y3_text'];
		        $i++;
		}
		
		$xls = new \Excel_XML('UTF-8', false, 'datalist');
		$xls->addArray($row);
		$xls->generateXML("yufan956932910");
		}*/

	public function texcel(){
		header("Content-type: text/html; charset=utf-8"); 
		$ord=M('order');
		//$list = M('y3')->where($map)->order('id desc')->select();
    	$list = $ord->field('order_name,order_phone,order_area,order_pro,order_money,order_media,order_bz')->where('order_excel=0')->order('order_id desc')->limit(100)->select();
    	$max=$ord->where('order_excel=0')->max('order_id');	
    	$file_name   = date("YmdHis",time()).'数据';
    	$file_suffix = "xls";
    	header("Content-Type: application/vnd.ms-excel");
    	header("Content-Disposition: attachment; filename=$file_name.$file_suffix");
    	header("Content-Type: applicationnd.openxmlformats-officedocument.spreadsheetml.sheet; charset=" . $this->sEncoding);
    	$this->assign('list',$list);
    	ob_end_clean();
		
		if(!empty($max)){
				$date=array('order_excel'=>1);
    			$o=$ord->where('order_id <='."'$max'")->save($date);
		}
		
		$this->display();
	}


}