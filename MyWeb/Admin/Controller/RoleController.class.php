<?php
namespace Admin\Controller;
use Think\Controller;
class RoleController extends AllowController {
    public function index() {
        //加载模板
        $this->display('Role/list');      
    }
    public function role() {
        $mod = M('Role');
        $list = $mod ->select();
        $this->assign('list',$list);
    	$this->display();
    }
    // 加载role添加;
    public function add(){
        $mod = M('Node');
        $this->assign("list",M("Node")->field("id,name")->select());
        $this->display();
    }
    // 执行角色添加
    public function insert(){
        //实例化model
        $mod=M('Role');
        //封装添加的信息 创建数据对象 
        $data['name']=$_POST['name'];
        $data['remark']=$_POST['remark'];
        $data['addtimes'] = time();
        $nid = $_POST['nid'];
        $rid = $mod->add($data);
        foreach ($nid as $v) {
            $mod->table('role_node')->execute("INSERT INTO role_node (rid,nid) VALUES ({$rid},{$v})");
        }
        //执行添加  
        if($rid){     
            $this->success('添加成功',U('Role/role'));
        }else{
            $this->error('添加失败',U('Role/add'));
        }
    }
    // 执行角色删除
    public function delete(){
        $mod = M('Role');
        $id = $_GET['id'];
        //执行删除
        if($mod->delete($id)){       
            $this->success('删除成功',U('Role/role'));
        }else{
            $this->error('删除失败',U('Role/role'));
        }
    }
    // 加载角色修改模板
    public function edit() {
        $id = $_GET['id'];
        $list = M('Role')->find($id);
        $this->assign('list',$list);
        $this->assign("lists",M("Node")->field("id,name")->select());
        $data=M("Role_node")->where("rid={$id}")->select();
        foreach ($data as $value) {
            $nids[] = $value['nid'];
        }
        $this->assign('nids',$nids);
        $this->display();
    }
    // 执行角色修改
    public function update(){
        $rid = I('post.id');
        M('Role_node')->where("rid={$rid}")->delete();
        $nid=I("post.nid");
          //遍历数据
        foreach($nid as $v){
            $data['nid']=$v;
            $data['rid']=$rid;
            M('Role_node')->add($data);
        }
        $mod = M('Role');
        $mod->create();
        $mod->save();
    }
}