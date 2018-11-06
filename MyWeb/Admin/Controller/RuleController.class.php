<?php
namespace Admin\Controller;
use Think\Controller;
class RuleController extends AllowController {
    public function index() {
        //加载模板
        $this->display('Rule/rule');      
    }
   // ajax分页
    public function rule() {
        $mod = M('Node');
        $list = $mod ->select();
         //获取数据总条数
        $tot=$mod->Count();
        //实例化分页类
        $page=new \Think\Page($tot,6);
        //设置分页
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('first','首页');
        $page->setConfig('last','末页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        //获取结果集
        $list=$mod->limit($page->firstRow,$page->listRows)->select();
        //分配给模板
        $this->assign('list',$list);
        //组装分页
        $this->assign('pageinfo',$page->show());
        $this->assign('list',$list);
        $this->display();
    }
    public function show() {
        $mod = M('Node');
        $list = $mod ->select();
        $this->assign('list',$list);
        $this->display('Rule/rule');
    }
    public function insert(){
        //实例化model
        $mod=M('Node');  
        $data['name']=$_POST['name'];
        $data['mname']=$_POST['mname'];
        $data['aname']=$_POST['aname'];
        $data['status'] = 0;
        $id = $mod->add($data);
        $s = $mod->find($id);
        $this->ajaxReturn($s,'json');
        //执行添加  
        $mod->add();
    }
    // 执行删除
    public function delete(){
        $mod = M('Node');
        $id = $_GET['id'];
        //执行删除
        if($mod->delete($id)){       
            $this->success('删除成功',U('Rule/rule'));
        }else{
            $this->error('删除失败',U('Rule/rule'));
        }
    }
    // 加载修改页面
    public function edit() {
    	// 获取id
        $id = $_GET['id'];
        $list = M('Node')->find($id);
        // 分配数据
        $this->assign('list',$list);
        $this->display();
    }
    public function update(){
    	// 实例化
        $mod = M('Node');
        // 封装数据
        $mod->create();
        $mod->save();
    }

}