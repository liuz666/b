<?php
namespace Admin\Controller;
use Think\Controller;
class CommentController extends AllowController {
    //加载评论列表
    public function index(){
    	$mod = M('advert');
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
    	$arrName = array();
    	$arrgName = array();
    	foreach ($list as $value) {
            //通过uid gid 获取用户名和商品名
    		$uname = $mod->table('user')->field('username')->where("id = {$value['uid']}")->find();
    		$gname = $mod->table('goods')->field('name')->where("id = {$value['gid']}")->find();
    		$arrName[$value['uid']] = $uname;
    		$arrgName[$value['gid']] = $gname;
    	}
    	$this->assign('arrName',$arrName);
    	$this->assign('arrgName',$arrgName);
    	$this->assign('list',$list);
        $this->assign('pageinfo',$show);
        $this->display('Comment/list');      
    }
    //ajax更改上线状态
    public function status() {
        $mod = M('advert');
        $mod->create();
        $mod->save();
    }
    //ajax 删除
    public function delete() {
        $mod = M('advert');
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

}