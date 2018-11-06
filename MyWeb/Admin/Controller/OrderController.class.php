<?php 
namespace Admin\Controller;
use Think\Controller;
class OrderController extends Controller {
	public function index(){
		// $goods_name = $_POST['goods_names'];
		//获取搜索的信息
		// var_dump($_GET['goodsname']);exit;
		$arr=array();
		if(!empty($_GET['order_num'])){
			$arr['Orders.order_num']=array('like',"%{$_GET['order_num']}%");
		}
		//实例化
		$mod=M("Orders");
		//获取数据的总条数
		$count=$mod->where($arr)->Count();
		// echo $count;
		//定义每页显示的数据条数
		$rev=3;
		//获取数据的总页数
		$sums=ceil($count/$rev);
		// $this->assign("sums",$sums);
		//存储数字分页
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
		$list = $mod->where($arr)->limit($offset,$rev)->select();
		// var_dump($list);exit;
		//Ajax 分离
		if(IS_AJAX){
			$this->assign('list1',$list);
			//加载模板
			$this->display("Order/ajax");
			exit;
		}
		//把数字分页信息 分配发到模板里
		$this->assign('pp',$pp);
		$this->assign('list1',$list);
		// $list = $mod->select();
		// $this->assign("list1",$list);
		$this->display('Order/list');
	}
	public function delete(){
		//实例化
		$mod=M("Orders");
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
			if(M('Orders')->delete($value)){

			}
		}
		echo "删除成功";
	}

	public function show(){
		//实例化
		$mod=M("Orders");
		$id=$_GET['id'];
		// var_dump($id);exit;
		$list=$mod->find($id);
		// var_dump($list);exit;
		$address_id=$list['address_id'];
		//实例化address
		$address=M('address');
		$address=$address->find($address_id);
		$this->assign('address',$address);
		// var_dump($list);
		$this->assign("list1",$list);
		$this->display('Order/edit');
	}

	public function sendupdate(){
		$id=$_GET['id'];
		//实例化
		$mod=M("Orders");
		//查询
		$list=$mod->find($id);
		$update=M("Orders");
		if($list['status']=='0'){
				$result = $update->where("id=$id")->setField("status",1);
				$this->success('处理成功',U('Order/index'));exit;
			}else{
				$this->success('处理失败',U('Order/index'));exit;
			}
}
}

 ?>