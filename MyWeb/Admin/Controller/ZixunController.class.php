<?php 
namespace Admin\Controller;
use Think\Controller;
class ZixunController extends Controller {
	
	public function index() {
		//定义获取的id值
		$id = $_GET['id'];
		//调用类对数据表进行操作
		$mod = M('zixun');
		//调用查询方法对数据库进行搜索并得到获取到的数据
		$list = $mod->find($id);
		//替换模板中的变量
		$this->assign('list',$list);
		//镶嵌模板
		$this->display("Zixun/index");
	}
	public function update(){
		//调用文件上传类
		$upload = new \Think\Upload();
		//定义文件上传的最大大小
		$upload->maxSize=900000000;
		//定义文件上传的格式
		$upload->exts=array('jpg','gif','png','jpeg');
		//定义文件上传存储的位置
		$upload->rootPath =  'Public/image/';
		$upload->savepath = '';
		//获取上传文件的信息
		$info = $upload->upload();
		
		//获取id
		$id = $_POST['id'];
		//调用类
		$mod2 = M('zixun');
		//根据id对zixun表进行查询
		$list = $mod2->where('id ='.$id)->select();
		if($info){
			$url = $info['file']['savepath'].$info['file']['savename'];
			//如果有上传新的文件就删除原来的文件
			unlink('Public/image/'.$list[0]['pic']);
		}else{
			$url = $list[0]['pic'];
		}
		
		//定义要修改的字段
		$data['pic'] = $url;
		$data['name'] = $_POST['name'];
		$data['sname'] = $_POST['sname'];
		$data['qq'] = $_POST['qq'];
      	$data['address'] = $_POST['address'];
		$data['address1'] = $_POST['address1'];
     	$data['address2'] = $_POST['address2'];
      	$data['address3'] = $_POST['address3'];
		$data['phone'] = $_POST['phone'];
		$data['gtime'] = $_POST['gtime'];
		$data['sqq'] = $_POST['sqq'];
      	$data['qq3'] = $_POST['qq3'];
      	$data['title'] = $_POST['title'];
		$data['description'] = $_POST['description'];
      	$data['keywords'] = $_POST['keywords'];
      	$data['ICP'] = $_POST['ICP'];
		//调用类对announce进行操作
		$mod = M('zixun');
		//调用方法根据id对数据表进行修改
		$re = $mod->where('id='.$id)->save($data);
			if($re){
					$this->success('保存成功',U('Zixun/index'));
			}else{
					$this->success('保存失败',U('Zixun/index'));
			}
	}
}

 ?>