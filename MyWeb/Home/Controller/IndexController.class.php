<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    //显示首页
    public function index(){
     
        $mod = M('ad');
        $img = $mod->where('status = 1')->order('list asc')->select();
        $this->assign('img',$img);
        // 公告
        $this->notice();
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
      	$this->assign('title',$list4[0]['title']);
      	$this->assign('description',$list4[0]['description']);
      	$this->assign('keywords',$list4[0]['keywords']);
        // 轮播
        $list = M('banner')->order('id asc')->where('status=1')->select();
        $this->assign('list',$list);
        // $vo = M('goods')->order('id asc')->limit(0,4)->select();
        // $this->assign('vo',$vo);
        // 商品
        $lists = M('goods')->order('id asc')->limit(0,4)->select();
        $this->assign('lists',$lists);
        // 热销单品
        $dan = M('goods')->order('id asc')->limit(4,1)->select();
        $this->assign('dan',$dan);
        $dans = M('goods')->order('id asc')->limit(5,8)->select();
        $this->assign('dans',$dans);
        // 电脑
        $dian = M('goods')->order('id asc')->limit(13,8)->select();
        $mod1 = M('goods');
        $mod2 = M('team');
        $mod3 = M('announce');
        $list1 = $mod1->join('pics on pics.goods_id=goods.id')->limit(0,4)->order('pics.id')->select();
        $list2 = $mod2->select();
        $list3 = $mod3->limit(0,3)->select();
        $mol = M('announce');
      	$lis = $mol->where("status='客户口碑'")->limit(0,4)->select();
      	$this->assign('lis',$lis);
        $this->assign('list1',$list1);
        $this->assign('list2',$list2);
        $this->assign('list3',$list3);
        $this->assign('row4',$list3[0]);
        $this->assign('dian',$dian);
        $this->link();
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
     // 公告
    public function notice(){
        $mod = M('announce');
        $ann = $mod->limit(0,4)->select();
        $this->assign('ann',$ann);
    }
    
    //首页友情链接
    public function link() {
        $mod = M("sys");
        $re = $mod->where("classification='合作伙伴' and status=1")->select();
        // echo '<pre>';
        // var_dump($re);
        $this->assign("re",$re);

    }
   public function slink() {
        $mod = M("sys");
        $sre = $mod->where("classification='友情链接' and status=1")->select();
        // echo '<pre>';
        // var_dump($re);
        $this->assign("sre",$sre);

    }
    public function liu() {
        $mod = M('orders');
        $data['xuqiu'] = $_POST['xuqiu'];
        $data['phone'] = $_POST['phone'];
        $data['addtime'] = time();
         //进行添加方法的调用
         $mod->create($data);
         $we = $mod->add();
         if($we){
            $this->success('提交成功，请耐心等待',U('Index/index'));

         }
    }

}