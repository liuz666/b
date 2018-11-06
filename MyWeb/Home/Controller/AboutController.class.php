<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends Controller {
    //显示首页
    public function index(){
        // 无限分类
        $s1 = $this->getCate(1);
        $s2 = $this->getCate(2);
        $si = $s1[0];
        $si1 = $s1[1];
        $sii = $s2[0];
        $sii1 = $s2[1];
        $this->assign('sii',$sii);
        $this->assign('sii1',$sii1);
        $this->assign('si',$si);
        $this->assign('si1',$si1);
        $mod4 = M('zixun');
        $list4 = $mod4->where('id=1')->select();
        $this->assign('list4',$list4);
        $mod = M('lianxi');
        $list = $mod->where('id=1')->find();
       	$this->assign('title',$list['title'].'_');
      	$this->assign('description',$list['description']);
      	$this->assign('keywords',$list['keywords']);
        $this->assign('list',$list);
     	 $this->slink();
        $this->display();
    }
    Public function fuwu(){
    	// 无限分类
        $s1 = $this->getCate(1);
        $s2 = $this->getCate(2);
        $si = $s1[0];
        $si1 = $s1[1];
        $sii = $s2[0];
        $sii1 = $s2[1];
        $this->assign('sii',$sii);
        $this->assign('sii1',$sii1);
        $this->assign('si',$si);
        $this->assign('si1',$si1);
        $mod4 = M('zixun');
        $list4 = $mod4->where('id=1')->select();
      	
        $this->assign('list4',$list4);
    	$id = $_GET['id'];
    	$mod = M('team');
    	$list = $mod->where("id=$id")->select();
     	$this->assign('title',$list[0]['title']);
      	$this->assign('description',$list[0]['description']);
      	$this->assign('keywords',$list[0]['keywords']);
    	$mod1 = M('team');
     	$team = $mod1->select();
        $this->assign('team',$team);
    	$this->assign('list',$list);
      	$this->slink();
    	$this->display();
    }
     // 遍历数据 无限分类
    public function getCate($pid){
   		//实例化model
   		$mod=M("Cates");
        $mod1=M('goods');
   		$li=$mod1->where("cate_id=$pid and status=1")->select();
        $lis = $mod->where("id=$pid")->select();
        $list = array();
        $list[0] = $lis;
        $list[1] = $li;
   		return $list;
    }
    Public function team(){
        // 无限分类
        $s1 = $this->getCate(1);
        $s2 = $this->getCate(2);
        $si = $s1[0];
        $si1 = $s1[1];
        $sii = $s2[0];
        $sii1 = $s2[1];
        $this->assign('sii',$sii);
        $this->assign('sii1',$sii1);
        $this->assign('si',$si);
        $this->assign('si1',$si1);
        $mod4 = M('zixun');
        $list4 = $mod4->where('id=1')->select();
      	$this->slink();
      	$this->assign('title','服务团队_');
      	
        $this->assign('list4',$list4);
        $mod = M('team');
        $list = $mod->select();
        $this->assign('list',$list);
        $this->display();
    }
    Public function xinwen(){
        // 无限分类
        $s1 = $this->getCate(1);
        $s2 = $this->getCate(2);
        $si = $s1[0];
        $si1 = $s1[1];
        $sii = $s2[0];
        $sii1 = $s2[1];
        $this->assign('sii',$sii);
        $this->assign('sii1',$sii1);
        $this->assign('si',$si);
        $this->assign('si1',$si1);
        $mod4 = M('zixun');
        $list4 = $mod4->where('id=1')->select();
        $this->assign('list4',$list4);
        $id=$_GET['id'];
        $mod = M('announce');
        $list = $mod->find($id);
      	$cli = $list['click'];
      	$click = $cli+1;
      	$pa['click'] = "$click";
      $pa['id'] = $id;
      	$mod->create();
      	$mod->save($pa);
      	$this->assign('title',$list['title']);
      	$this->assign('description',$list['description']);
      	$this->assign('keywords',$list['keywords']);
        $list1 = $mod->limit(0,6)->where('status = "知识课堂"')->select();
        $this->assign('list',$list);
         $this->assign('list1',$list1);
         $sid = --$id;
         $uid = $id+2;
         $lists = $mod->find($sid);
         $listu = $mod->find($uid);
         $this->assign('sid',$sid);
         $this->assign('uid',$uid);
         $this->assign('lists',$lists);
         $this->assign('listu',$listu);
      	$this->slink();
        $this->display('About/xinwen');
    }
  	public function slink() {
        $mod = M("sys");
        $sre = $mod->where("classification='友情链接' and status=1")->select();
        // echo '<pre>';
        // var_dump($re);
        $this->assign("sre",$sre);
    }
   }