<?php
namespace Admin\Controller;
use Think\Controller;
class PicController extends AllowController {
    public function index(){
    	//实例化pics
    	$pics=M("Pics");
    	//获取数据的总条数
		$count=$pics->Count();
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
		$list=$pics->field("pics.id,pics.pic,goods.name")->join("goods on goods.id=pics.goods_id")->limit($offset,$rev)->select();
    	// $list=$pics->limit($offset,$rev)->select();
    	//Ajax 分离
		if(IS_AJAX){
			// $this->assign('cate',$cate);
			$this->assign('list',$list);
			//加载模板
			$this->display("Pic/ajax");
			exit;
		}
    	// $list=$pics->select();
    	//把数字分页信息 分配发到模板里
		$this->assign('pp',$pp);
    	$this->assign('list',$list);
        $this->display('Pic/list');      
    }

    public function add(){
    	//实例化goods表
    	$goods=M("goods");
    	$list=$goods->select();
    	$this->assign('list',$list);
    	$this->display();
    }
    public function insert(){
    	// var_dump($_POST['goods_id']);
    	//实例化
    	$upload=new \Think\Upload();
    	//设置信息
    	//大小
    	$upload->maxSize=123234435345;
    	//类型
    	$upload->exts=array('jpg','png','gif','jpeg');
    	//保存路径
    	$upload->rootPath="./Public/images/";
    	//是否具有日期目录
    	$upload->autoSub=true;

    	//执行上传
    	$info=$upload->upload();
    	if(!$info){
    		// echo "000";
    		//显示错误信息
    		$this->error($upload->getError());
    	}else{
    		// echo "<pre>";
    		// var_dump($info);exit;
             //遍历
            foreach($info as $file){
            	// echo "<pre>";
            	// var_dump($file);exit;
                //日期目录
                $savepath=$file['savepath'];
                //获取上传以后的图片
                $savename=$file['savename'];
                $url=$savepath.$savename;
                // echo $url;
                $pics=M("Pics");
               	$data['pic']=$url;
                $data['goods_id']=$_POST['goods_id'];
                
                // $pics->add($data);
                if($pics->add($data)){
                	$this->success('添加成功',U('Pic/list'));
                }else{
                	$this->error('添加失败',U('Pic/add'));
                }
            }
        }
    	
    }

    public function edit(){
    	//实例化goods表
		$goods=M("Pics");
		$id=$_GET['id'];
		// var_dump($id);exit;
		$list=$goods->find($id);
		$this->assign('list',$list);
        $this->display();
    }

    public function update(){
    	//实例化文件上传类
		$upload=new \Think\Upload();
		//设置大小
		$upload->maxSize=12121212;
		//类型
		$upload->exts=array('jpg','png','gif','jpeg');
		//保存路径
		$upload->rootPath="./Public/images/";
		//是否具有日期目录
		$upload->autoSub=true;
		//执行上传
		$info=$upload->upload();
		$id = $_POST['id'];
		//调用类
		$mod2 = M('Pics');
		//根据id对Pics表进行查询
		$list = $mod2->where('id ='.$id)->select();
		if($info){
			foreach($info as $file){
				//日期目录
				$savepath=$file['savepath'];
				//获取上传以后的图片
				$savename=$file['savename'];
				$url=$savepath.$savename;
				//如果有上传新的文件就删除原来的文件
				unlink('./Public/images/'.$list[0]['pic']);
			}
			
		}else{
			$url = $list[0]['pic'];
		}
		// var_dump($_POST['id']);
		$id=$_POST['id'];
		//实例化goods表
		// $mod=M("Pics");
		//封装添加信息 创建数据对象
		$date['id']=$_POST['id'];
		$date['pic']=$url;
		$date['goods_id']=$_POST['goods_id'];
		// var_dump($date);
		$mod2->where('id='.$id)->save($date);
    }

    public function locationupdate(){
		$id=$_GET['id'];
		if($_GET['location']==0){
			//实例化goods
			$goods=M('pics');
			$goods->location=$_GET['location'];
			$goods->where('id='.$id)->save();
		}else{
			$goods=M('pics');
			$goods->location=$_GET['location'];
			$goods->where('id='.$id)->save();
		}
	}

    //删除单条
	public function delete(){
		//实例化
		$mod=M("Pics");
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
			if(M('Pics')->delete($value)){

			}
		}
		echo "删除成功";
	}
}