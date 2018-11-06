<?php
namespace Home\Widget;
use Think\Controller;
class CateWidget extends Controller {
 public function getCate($pid){
      //实例化
      $mod=M("Cates");
      $list=$mod->where("pid=$pid")->select();
      //遍历
      foreach($list as $key=>$value){
        $value['shop']=$this->getCate($value['id']);
        $data[]=$value;
      }
      return $data;
   } 
	public function header(){        
		$cate=$this->getCate(0);
		$this->assign('cate',$cate);        
		$this->display('Cate:header');   
	}

	public function footer(){
		//加载尾部的模板
		$this->display('Cate:footer');
	}
} 
 ?>