<?php
namespace Home\Controller;
use Think\Controller;
class ClassroomController extends Controller {
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
        $status=$_GET['status'];
        $mod = M('announce');
        $list = $mod->where("status=$status")->select();
     	$stat = trim($status,"''");
      	$this->assign('title',$stat.'_');
      	$this->assign('description',$list[0]['description']);
      	$this->assign('keywords',$list[0]['keywords']);
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
  public function slink() {
        $mod = M("sys");
        $sre = $mod->where("classification='友情链接' and status=1")->select();
        // echo '<pre>';
        // var_dump($re);
        $this->assign("sre",$sre);

    }
   }