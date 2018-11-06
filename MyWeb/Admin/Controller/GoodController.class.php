<?php 
namespace Admin\Controller;
use Think\Controller;
class GoodController extends AllowController {
	public function index() {
		//实例化
		$mod=D('Goods');
		$arr=array();
		if(!empty($_GET['name'])){
			$arr['goods.name']=array('like',"%{$_GET['name']}%");
		}
		// var_dump($arr['sname']);exit;
		//获取数据的总条数
		$count=$mod->field("cates.name as cname,goods.name as sname,goods.id as sid,goods.qq,goods.desrc,goods.content,goods.status")->join("cates on goods.cate_id=cates.id")->where($arr)->limit($offset,$rev)->Count();
		// var_dump($count);exit;
		//定义每页显示的数据条数
		$rev=3;
		//获取数据的总页数
		$sums=ceil($count/$rev);
		$pp=array();
		for($i=1;$i<=$sums;$i++){
			$pp[$i]=$i;
		}
		//获取page
		$page=$_GET['page'];
		if(empty($page)){
			$page=1;
		}
		// //获取偏移量
		$offset=($page-1)*$rev;
		///执行sql
		// $list = $mod->where($arr)->limit($offset,$rev)->select();
		$list=$mod->field("cates.name as cname,goods.name as sname,goods.id as sid,goods.qq,goods.desrc,goods.content,goods.status")->join("cates on goods.cate_id=cates.id")->where($arr)->limit($offset,$rev)->select();
		// var_dump($list);exit;
		// $this->assign('list1',$list1);
		
		
		//Ajax 分离
		if(IS_AJAX){
			// $this->assign('cate',$cate);
			$this->assign('list',$list);
			//加载模板
			$this->display("Good/ajax");
			exit;
		}
		//把数字分页信息 分配发到模板里
		$this->assign('pp',$pp);
		// $list=$mod->where($arr)->select();
		$this->assign('list',$list);
		
		$this->display('Good/list');
	}

	public function add() {
		//实例化Cates表
		$mod=M("Cates");
		//连贯 类别顺序调整
		$cate=$mod->field("*,concat(path,',',id) as paths")->order("paths")->select();
		//遍历
		foreach($cate as $key=>$value){
			//获取path
			$path=$value['path'];
			//装换为数组
			$arr=explode(",",$path);
			//获取数组长度
			$arrlength=count($arr);
			//获取逗号的个数
			$length=$arrlength-1;
			//重复字符串
			$cate[$key]['name']=str_repeat('---|',$length).$value['name'];
		}
		$this->assign('cate',$cate);
		$this->display();
	}

	//执行添加
	public function insert(){
		//实例化goods表
		$mod=M("Goods");
		//实例化orders
		// $order1=M('Orders');
		//封装添加信息 创建数据对象
		$data['name']=$_POST['name'];
		$data['description'] = $_POST['description'];
      	$data['title'] = $_POST['title'];
      	$data['keywords'] = $_POST['keywords'];
		$data['cate_id']=$_POST['cate_id'];
		$data['desrc']=$_POST['editorValue'];
		$data['qq']=$_POST['qq'];
		$data['content']=$_POST['content'];
		$data['status']=$_POST['status'];
		//执行添加
		if($mod->add($data)){
			echo '1';
		}else{
			echo '0';
		}

	}

	public function edit() {
		//实例化Cates表
		$mod=M("Cates");
		//连贯 类别顺序调整
		$cate1=$mod->field("*,concat(path,',',id) as paths")->order("paths")->select();
		//遍历
		foreach($cate1 as $key=>$value){
			//获取path
			$path=$value['path'];
			//装换为数组
			$arr=explode(",",$path);
			//获取数组长度
			$arrlength=count($arr);
			//获取逗号的个数
			$length=$arrlength-1;
			//重复字符串
			$cate1[$key]['name']=str_repeat('---|',$length).$value['name'];
		}
		//实例化goods表
		$goods=M("Goods");
		$id=$_GET['id'];
		// var_dump($id);exit;
		$list=$goods->find($id);
		$this->assign('list',$list);
		$this->assign('cate1',$cate1);
		$this->display();

	}
	
	public function update(){
		$id = $_POST['id'];
		//实例化goods表
		$mod=M("Goods");
		//封装添加信息 创建数据对象
     	 $data['description'] = $_POST['description'];
      	$data['title'] = $_POST['title'];
      	$data['keywords'] = $_POST['keywords'];
		$data['name']=$_POST['name'];
		$data['cate_id']=$_POST['cate_id'];
		$data['desrc']=$_POST['editorValue'];
		$data['content']=$_POST['content'];
		$data['qq']=$_POST['qq'];
		$data['status']=$_POST['status'];
		$data['id']=$_POST['id'];
		//执行更新
		$mod->where('id='.$id)->save($data);

	}
	

	public function statusupdate(){
		$id=$_GET['id'];
		// var_dump($_GET['id']);
		// var_dump($_GET['status']);
		if($_GET['status']==0){
			//实例化goods
			$goods=M('goods');
			$goods->status=$_GET['status'];
			$goods->where('id='.$id)->save();
		}else{
			$goods=M('goods');
			$goods->status=$_GET['status'];
			$goods->where('id='.$id)->save();
		}
	}


	//删除单条
	public function delete(){
		//实例化
		$mod=M("Goods");
		$id=$_GET['id'];
		if($mod->where("id=$id")->delete()){
			echo '1';
		}else{
			echo '0';
		}
		// $mod->where("id=$id")->delete();
	}
	//Ajax的批量删除
	public function delall(){
		//获取id参数
		$id=isset($_GET['id'])?$_GET['id']:'';
		if($id==""){
			echo "请至少选中一条数据";
			exit;
		}
		//遍历
		foreach($id as $key=>$value){
			//数据的删除
			if(M('Goods')->delete($value)){

			}
		}
		echo "删除成功";
	}

}

 ?>