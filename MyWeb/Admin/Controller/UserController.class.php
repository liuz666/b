<?php 
namespace Admin\Controller;
use Think\Controller;
class UserController extends AllowController {
	public function index() {
		//获取搜索的字段
		$title = $_GET['username'];
		//调用类
		$User = M('user_info');
		//自定义sql语句，多表联合搜索查询
		$sql1 = 'select count(*) as count from user u,user_info s where u.id=s.id and u.username like "%'.$title.'%" order by u.id ';
		//执行sql语句
		$list1 = $User->query($sql1);
		//定义搜索到的条数
		$count = $list1[0]['count'];
		//定义每页显示多少条数据
		$Page = new \Think\Page($count,2);
		//自定义分页显示
		$Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('first','首页');
        $Page->setConfig('last','末页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        //输出分页
		$show = $Page->show();
		//调用类
		$mod = M('user');
		//自定义查询语句
		$sql = 'select * from user u,user_info s where u.id=s.id and u.username like "%'.$title.'%" order by u.id limit '.$Page->firstRow.','.$Page->listRows ;
		//执行sql语句
		$list = $mod->query($sql);
		//替换模板上的变量
		$this->assign('list',$list);
		$this->assign('pageinfo',$show);
		//镶嵌模板
		$this->display('User/list');
	}
	public function add(){
		$this->display();
	}
	public function insert() {
		//将接受到的数据赋值给$date数组
		$date['email'] = $_POST['email'];
		$date['password'] = $_POST['pass'];
		$date['username'] = $_POST['username'];
		//固定数据给下标
		$date['able'] = 1;
		$date['token'] = 'qwer';
		$date['time'] = time();
		//调用类
		$mod = M('user');
		$mod->create($date);
		//调用添加方法
		$we = $mod->add();
		//下标传值
		$user['name'] = $date['username'];
		$user['time'] = time();
		//调用类对user_info进行操作
		$mode = M('user_info');
		$mode->create($user);
		//调用添加方法
		$mode->add();	
	}
	public function edit() {
		//定义变量id
		$id = $_GET['id'];
		//调用类
		$mod = M('user');
		//根据id想查询user获取查询到数据
		$list = $mod->where('id='.$id)->select();
		//调用类
		$mode = M('user_info');
		//根据id查询user_info获取数据
		$list1 = $mode->where('id='.$id)->select();
		//替换变量
		$this->assign('list1',$list1);
		$this->assign('list',$list);
		//镶嵌模板
		$this->display('User/edit');
	}
	public function update(){
		//调用文件上传类
		$upload = new \Think\Upload();
		//定义文件上传的最大大小
		$upload->maxSize=900000000;
		//定义文件上传的格式
		$upload->exts=array('jpg','gif','png','jpeg');
		//定义文件上传存储的位置
		$upload->rootPath =  'Public/images/';
		$upload->savepath = '';
		//获取上传文件的信息
		$info = $upload->upload();
		//获取id
		$id = $_POST['id'];
		//调用类
		$mod2 = M('user_info');
		//根据id对user_info表进行查询
		$list = $mod2->where('id ='.$id)->select();
		if($info){
			$url = $info['file']['savepath'].$info['file']['savename'];
			//如果有上传新的文件就删除原来的文件
			unlink('Public/images/'.$list[0]['pic']);
		}else{
			$url = $list[0]['pic'];
		}
		//定义要添加的数据放到数组中
		$data['username'] = $_POST['username'];
		$data['phone'] = $_POST['phone'];
		$date['name'] = $_POST['username'];
		$data['email'] = $_POST['email'];
		$date['address'] = $_POST['address'];
		$date['sex'] = $_POST['sex'];
		$date['pic'] = $url;
		$date['content'] = $_POST['content'];
		//调用类
		$mod = M('user_info');
		$mod1 = M('user');
		//根据id对数据表进行数据修改
		$mod1->where('id='.$id)->save($data);
		$mod->where('id='.$id)->save($date);
	}
	public function delete(){
		//调用类对数据表进行操作
		$mod = M('user_info'); 
		$mod1 = M('user');
		//将获取的字符串中最后面的,符号删除掉
		$id = trim($_GET['id'],',');
		//根据id对数据表内的数据进行删除
		$re = $mod->delete($id);
		$re1 = $mod1->delete($id);
		if($re){
			$this->success('删除成功',U('User/index'));
		}
	}
	public function edit1(){
		//重新定义下标
		$_GET['id'] = $_GET['uid'];
		//调用类对user表进行操作
		$mod = M('user');
		if($_GET['able']==1){
			//根据id对数据进行修改
			$mod->create($_GET);
			$mod->save();
		}elseif($_GET['able']==0){
			//根据id对数据表进行修改
			$mod->create($_GET);
			$mod->save();
		}
	}
	public function pwd(){
		//调用类对user表进行操作
		$mod = M("user");
		//根据id对user进行查询并获取查询到的数据
		$list = $mod->where('id ='.$_GET['id'])->select();
		//替换变量
		$this->assign('list',$list);
		//镶嵌模板
		$this->display('User/pwd');
	}
	public function edit2(){
		//调用类对user表进行操作
		$mod = M('user');
		//定义id
		$id = $_GET['id'];
		//赋值数组
		$date['password'] = $_GET['password'];
		//对数据进行修改
		$mod->create($date);
		$mod->where('id ='.$id)->save();
	}
	public function shows(){
		//获取get传输过来的id
		$id = $_GET['id'];
		//调用类
		$mod = M('user_info');
		//调用类中select方法查询相关信息
		$list = $mod->where('id ='.$id)->select();
		//替换模板中字段
		$this->assign('list',$list);
		//镶嵌模板
		$this->display('User/show');

	}
}

 ?>