<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends AllowController {
    public function index(){
    	//接受搜索的信息
    	$title = $_GET['title'];
    	//拼接搜索like语句
  		$er = "%".$title."%";
  		$map['gname']='';
  		//赋值数组
  		$map['gname']=array('like',$er);
    	//调用类
    	$mod = M('goods_info');
    	//调用统计方法
    	$count = $mod->where($map)->count();
    	//调用分页类
    	$Page = new \Think\Page($count,4);
		  //自定义分页显示
  		$Page->setConfig('prev','上一页');
      $Page->setConfig('next','下一页');
      $Page->setConfig('first','首页');
      $Page->setConfig('last','末页');
      $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
          //输出分页
		  $show = $Page->show();
		  //返回查询到数据
    	$list = $mod->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
    	//替换变量
    	$this->assign('list',$list);
    	$this->assign('pageinfo',$show);
    	//镶嵌模板
        $this->display('Goods/list');      
    }
    public function add(){
    	//调用类
    	$mod = M('goods');
    	//定义查询返回的数据
    	$list = $mod->select();
    	//替换变量
    	$this->assign('list',$list);
    	//镶嵌模板
    	$this->display('Goods/add');
    }
  	public function insert(){
  		//调用类
  		$mod = M('goods_info');
  		//删除掉获取字符串最后的,符号
  		$se = rtrim($_POST['color'],',');
  		$date['gid'] = 1;
  		//定义要添加的字段放到数组中
  		$date['gname'] = $_POST['gname'];
  		$date['price'] = rtrim($_POST['price'],',');
  		$date['spec'] = rtrim($_POST['spec'],',');
  		//切割字符串变成数组
  		$color = explode(',', $se);
      $xc = 1;
  		//遍历添加
  		foreach($color as $key=>$value){
        $date['color'] = '';
  			$date['color'] = $value;
        $list = array();
        $list = $mod->where('color ="'.$value.'" and gname ="'.$date['gname'].'" and price ="'.$date['price'].'" and spec ="'.$date['spec'].'"')->select();
        if(isset($list)){
          $xc = 0*$xc;
        }else{
          $xc = $xc*1;
          $mod->create($date);
          $mod->add();
        }	
  		}
      echo $xc;
  	}
  	public function delete(){
  		//调用类
		$mod = M('goods_info'); 
		//删除获取的字符串最后,符号
		$id=trim($_GET['id'],',');
		//删除语句
		$re=$mod->delete($id);
		if($re){
			$this->success('删除成功',U('Goods/index'));
		}
	}
	public function edit(){
		//调用类对数据表goods_info进行操作
		$mod = M('goods_info');
		//定义获取到的id值
		$id = $_GET['id'];
		//根据id进行查询并获取查询到的数据
		$list = $mod->where('id ='.$id)->select();
		//替换模板中的变量
		$this->assign('list',$list);
		//镶嵌模板
		$this->display('Goods/edit');
	}
	public function update(){
		//调用类对数据表goods_info进行操作
		$mod = M('goods_info');
		//获取id值
		$id = $_POST['id'];
		//将要添加的字段方到数组中
		$date['color'] = rtrim($_POST['color'],','); 
		$date['spec'] = rtrim($_POST['spec'],',');
		$date['price'] = rtrim($_POST['price'],',');
		//根据id值对数据表数据进行修改
		$mod->where('id ='.$id)->save($date);
	}
}