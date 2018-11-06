<?php 
namespace Admin\Controller;
use Think\Controller;
class NoticeController extends Controller {
	public function index() {
		//获取搜索的值
		$title = $_GET['title'];
		//拼接搜索like字段
		$er = "%".$title."%";
		//将搜索的字段放到数组中
		$map['title'] = '';
		$map['title'] = array('like',$er);
		//调用类对数据表announce进行操作
		$User = M('announce');
		//统计搜索的数据条数
		$count= $User->where($map)->count();
		//设定每页显示的数据条数
		$Page = new \Think\Page($count,2);
		//设定显示分页的样式
		$Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('first','首页');
        $Page->setConfig('last','末页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        //输出分页
		$show = $Page->show();
		//搜索分页查询
		$list = $User->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
		//替换模板中的变量
		$this->assign('list',$list);
		$this->assign('pageinfo',$show);
		//镶嵌模板
		$this->display('Notice/list');
	}
	public function insert() {
		var_dump($_POST);
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
		$url = $info['file']['savepath'].$info['file']['savename'];
		//调用类对数据表team进行操作
		$mod = M('announce');
		//对要添加的字段放到一个数组中
		$data['pic'] = $url;
		$data['title'] = $_POST['title'];
		$data['status'] = $_POST['status'];
		$data['content'] = $_POST['content'];
      	$data['source'] = $_POST['source'];
      	$data['description'] = $_POST['description'];
      	$data['keywords'] = $_POST['keywords'];
		$data['cont'] = $_POST['editorValue'];
		$data['time'] = $_POST['time'];
		 //进行添加方法的调用
		 $mod->create($data);
		 $we = $mod->add();
		 return true;
	}
	public function delete(){
		//调用类岁对数据表announce表进行操作
		$mod = M('announce');
		//删除掉获取id的两边对于的分隔字符, 
		$id = trim($_GET['id'],',');
		$arr = explode(',',$id);
		foreach($arr as $key=>$value){
			$mod1 = M('announce');
			$list = $mod1->where('id ='.$value)->select();
			unlink('Public/image/'.$list[0]['pic']);
		}
		//调用删除方法进行删除
		$re = $mod->delete($id);
		if($re){
			//删除成功后跳转到公告显示页
			$this->success('删除成功',U('Notice/index'));
		}

	}
	public function edit() {
		//定义获取的id值
		$id = $_GET['id'];
		//调用类对数据表进行操作
		$mod = M('announce');
		//调用查询方法对数据库进行搜索并得到获取到的数据
		$list = $mod->find($id);
		//替换模板中的变量
		$this->assign('list',$list);
		//镶嵌模板
		$this->display("Notice/edit");
	}
	public function sedit() {
		//定义获取的id值
		$id = $_GET['id'];
		//调用类对数据表进行操作
		$mod = M('announce');
		//调用查询方法对数据库进行搜索并得到获取到的数据
		$list = $mod->find($id);
		//替换模板中的变量
		$this->assign('list',$list);
		//镶嵌模板
		$this->display("Notice/sedit");
	}
	public function update(){
		//获取id
		$id = $_POST['id'];
		$data['title'] = $_POST['title'];
		$data['status'] = $_POST['status'];
		$data['cont'] = $_POST['editorValue'];
		$data['content'] = $_POST['content'];
      	$data['source'] = $_POST['source'];
      	$data['time'] = $_POST['time'];
      	$data['description'] = $_POST['description'];
      	$data['keywords'] = $_POST['keywords'];
		//调用类对announce进行操作
		$mod = M('announce');
		//调用方法根据id对数据表进行修改
		$re = $mod->where('id='.$id)->save($data);
			if($re){
					echo 11;
			}else{
					echo 00;
			}
	}
	public function ssupdate(){
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
		$mod2 = M('Announce');
		//根据id对user_info表进行查询
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
		$data['title'] = $_POST['title'];
		//调用类对announce进行操作
		$mod = M('Announce');
		//调用方法根据id对数据表进行修改
		$re = $mod->where('id='.$id)->save($data);
			if($re){
					echo 11;
			}else{
					echo 00;
			}
	
	}
	public function sindex() {
		//定义获取的id值
		$id = $_GET['id'];
		//调用类对数据表进行操作
		$mod = M('lianxi');
		//调用查询方法对数据库进行搜索并得到获取到的数据
		$list = $mod->select($id);
		//替换模板中的变量
		$this->assign('list',$list);
		//镶嵌模板
		$this->display("Notice/lianxi");
	}
	public function supdate(){
		$id = $_POST['id'];
      	$data['title'] = $_POST['title'];
      	$data['description'] = $_POST['description'];
      	$data['keywords'] = $_POST['keywords'];
		$data['name'] = $_POST['name'];
		$data['con'] = $_POST['editorValue'];
		//调用类对announce进行操作
		$mod = M('lianxi');
		//调用方法根据id对数据表进行修改
		$re = $mod->where('id='.$id)->save($data);
			if($re){
					$this->success('保存成功',U('Notice/sindex'));
			}else{
					$this->success('保存失败',U('Notice/sindex'));
			}
	}
  public function gindex() {
		//定义获取的id值
		$id = $_GET['id'];
		//调用类对数据表进行操作
		$mod = M('contact');
		//调用查询方法对数据库进行搜索并得到获取到的数据
		$list = $mod->select($id);
		//替换模板中的变量
		$this->assign('list',$list);
		//镶嵌模板
		$this->display("Notice/contact");
	}
  public function cupdate(){
		$id = $_POST['id'];
		$data['name'] = $_POST['name'];
		$data['content'] = $_POST['editorValue'];
    	$data['title'] = $_POST['title'];
    	$data['keywords'] = $_POST['keywords'];
		//调用类对announce进行操作
		$mod = M('contact');
		//调用方法根据id对数据表进行修改
		$re = $mod->where('id='.$id)->save($data);
			if($re){
					$this->success('保存成功',U('Notice/gindex'));
			}else{
					$this->success('保存失败',U('Notice/gindex'));
			}
	}
}

 ?>