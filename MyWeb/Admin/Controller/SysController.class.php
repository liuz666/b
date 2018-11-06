<?php
namespace Admin\Controller;
use Think\Controller;
class SysController extends AllowController {
    //显示轮播图页面
    public function index(){
    	$mod = M('sys');
        //获取数据总条数
        $tot=$mod->Count();
        //实例化分页类
        $Page=new \Think\Page($tot,5);
        //设置分页
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('first','首页');
        $Page->setConfig('last','末页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        $Page->rollPage = 2;
        $Page->lastSuffix = false;
        $show = $Page->show();
        // select * from stu limit 12,4
        //获取结果集
        $list=$mod->limit($Page->firstRow,$Page->listRows)->select();
        $this->assign('pageinfo',$show);
    	$this->assign('list',$list);
        $this->display('Sys/list');      
    }
    //显示添加页面
    public function add(){
    	$this->display('Sys/add');
    }
    //ajax添加数据
    public function insert(){
      
        $_POST['imgpath'] = $this->upload();
     
        //调用上传方法 上传图片
    
    	$mod = M('sys');
    	$data = $mod->create();
    	// print_r($data);
    	$mod->add();
    }
    //私有上传方法
    private function upload() {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     5613145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Public/img/'; // 设置附件上传根目录
        $upload->autoSub   = 	 false;//是否具有日期目录
        //执行上传
        $info = $upload->upload();
        if(!$info){
            $savename = '友情链接';
        }else{
            foreach($info as $file){
                $saveName = $file['savename'];
            }
            return $saveName;
        }
        
    }
    //加载修改页面
    public function edit(){
    	$mod = M('sys');
    	$list = $mod->where("id = {$_GET['id']}")->find();
    	$this->assign('list',$list);
        $this->display();
    }
    //ajax修改数据
    public function update() {
        //判断是否有图片名字 选择调用私有上传方法
    	if($_FILES['imgpath']['name'] != ''){
            $saveName = $this->upload();
            $_POST['imgpath'] = $saveName;
            unlink('./Public/img/'.$_POST['hidden']);
        }
        $mod = M('sys');
        $mod->create();
        $mod->save();
    }
    //ajax删除数据 也可以批量删除
    public function delete() {
    	$mod = M('sys');
        //批量删除 传入数组 判断
        if(is_array($_POST['id'])){
            if($_POST['id'][0] == ''){
                array_shift($_POST['id']);
            } 
            $where = 'id in ('.implode(',',$_POST['id']).')';
        }else{
            $where = 'id ='.$_POST['id'];
        }
        $mod->where($where)->delete();
    }
    //ajax 判断上线状态
    public function status() {
        $mod = M('sys');
        $num = $mod->where('status = 1')->count();
        if($num > 6){
            echo 0;
        }else{
            $mod->create();
            $mod->save();
        }
        
    }
}