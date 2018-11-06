<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends AllowController {
    public function index() {
        //加载模板
        $this->display('Admin/list');      
    }
    public function add() {
        $mod = M('Role');
        $list = $mod->field('id,name')->select();
        foreach ($list as $key => $value) {
            $arr[$value['id']] = $value['name'];
        }
        $this->assign('arr',$arr);
    	$this->display('Admin/add');
    }
    // 执行添加
    public function insert(){
        //实例化model
        $mod=M('Admin');  
        //封装添加的信息 创建数据对象 但不保存到数据库
        $data['adminname']=$_POST['adminname'];
        $data['password']=$_POST['password'];
        $data['email']=$_POST['email'];
        $data['phone']=$_POST['phone'];
        $data['addtime'] = time();
        $data['status']=1;
        $data['role'] = $_POST['role'];
        //执行添加  
        $id = $mod->add($data);
        $list['aid'] = $id;
        $list['rid'] = $_POST['role'];
        M('Admin_role')->add($list);
    }
    //列表页
    public function list(){
         // //M 方法
        $mod=M('Admin');
        //获取数据总条数
        $tot=$mod->Count();
        //实例化分页类
        $page=new \Think\Page($tot,4);
        //设置分页
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('first','首页');
        $page->setConfig('last','末页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        //获取结果集
        $list=$mod->limit($page->firstRow,$page->listRows)->select();
        $lists = $mod->field('id,name')->select();
        foreach ($lists as $key => $value) {
            $arr[$value['id']] = $value['name'];
        }
        //分配给模板
        $this->assign('list',$list);
        //组装分页
        $this->assign('pageinfo',$page->show());
        //加载模板
        $this->display('Admin/list');
    }
    // 搜索
    public function search(){
        //获取搜索的信息
        $arr=array();
        if(!empty($_GET['adminname'])){
           $arr['adminname']=array('like',"%{$_GET['adminname']}%");
        }
        $mod=M('Admin');
        //获取数据总条数
        $tot=$mod->where($arr)->Count();
        //实例化分页类
        $page=new \Think\Page($tot,4);
        //设置分页
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('first','首页');
        $page->setConfig('last','末页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        //获取结果集
        $list=$mod->where($arr)->limit($page->firstRow,$page->listRows)->select();
        //分配给模板
        $this->assign('list',$list);
        //组装分页
        $this->assign('pageinfo',$page->show());
        //加载模板
        $this->display('Admin/list');
    }

    // 执行删除
    public function delete(){
        $mod = M('Admin');
        // 获取id
        $id = $_GET['id'];
        //执行删除 
        if($mod->delete($id)){  
            $mod->table('Admin_role')->where("aid={$id}")->delete();
            $this->success('删除成功',U('Admin/list'));
        }else{
            $this->error('删除失败',U('Admin/list'));
        }
    }
    //Ajax的批量删除
    public function del(){
        //获取id参数
        $id=isset($_GET['id'])?$_GET['id']:'';
        if($id==""){
            echo "请至少选中一条数据";
            exit;
        }
        //遍历
        foreach($id as $key=>$value){
            //数据的删除
            if(M("Admin")->delete($value)){

            }
        }

        echo "删除成功";
    }
    public function edit() {
        $mod = M('Admin');
        // 获取id
        $id = $_GET['id'];
        $lists = $mod->find($id);
        $this->assign('list',M('Role')->select());
        $this->assign("lists",M("Node")->field("id,name")->select());
        $data=M("Role_node")->where("rid={$id}")->select();
        foreach ($data as $value) {
            $rids[] = $value['nid'];
        }
        $this->assign('rids',$rids);
        $this->assign('lists',$lists);
        $this->display();
    }
    // 执行修改
    public function update(){
        $mod = M('Admin');
        // 封装
        $mod->create();
        $mod->save();
        $id = $_POST['id'];
        M('Admin_role')->where("aid={$id}")->delete();
        $rid = $_POST['role'];
        $data['aid'] = $id;
        $data['rid'] = $rid;
        M('Admin_role')->add($data);
    }
    public function pwd(){
        //调用类对user表进行操作
        $mod = M("Admin");
        //根据id对user进行查询并获取查询到的数据
        $list = $mod->where('id ='.$_GET['id'])->select();
        //替换变量
        $this->assign('list',$list);
        //镶嵌模板
        $this->display('Admin/pwd');
    }
    public function edit2(){
        //调用类对user表进行操作
        $mod = M('Admin');
        //定义id
        $id = $_GET['id'];
        //赋值数组
        $date['password'] = $_GET['password'];
        //对数据进行修改
        $mod->create($date);
        $mod->where('id ='.$id)->save();
    }
    public function edit1(){
        $_GET['id'] = $_GET['aid'];
        //调用类对user表进行操作
        $mod = M('admin');
        if($_GET['status']==1){
            //根据id对数据进行修改
            $mod->create($_GET);
            $mod->save();
        }elseif($_GET['status']==0){
            //根据id对数据表进行修改
            $mod->create($_GET);
            $mod->save();
        }
    }
  
}