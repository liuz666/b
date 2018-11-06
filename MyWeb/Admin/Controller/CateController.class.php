<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends Controller {
    //调整类别顺序
    public function getCates(){
        $mod = M("Cates");
        //连贯 类别顺序调整
        $cate=$mod->field("*,concat(path,',',id) as paths")->order("paths")->select();
        //遍历
        foreach($cate as $key=>$value){
            //获取path
            $path=$value['path'];
            //转换为数组
            $arr=explode(",",$path);
            // echo "<pre>";
            // var_dump($arr);
            //获取数组长度
            $arrlength=count($arr);
            //获取逗号的个数
            $length=$arrlength-1;
            //重复字符串
            $cate[$key]['name']=str_repeat('---|',$length).$value['name'];

        }
        return $cate;
    }

    //显示列表
    public function index(){
    	$mod=M("Cates");
        //获取数据总条数
        $tot=$mod->Count();
        //定义每页显示数据条数
        //实例化分页类
        $page=new \Think\Page($tot,5);
        //设置分页
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('first','首页');
        $page->setConfig('last','末页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        //连贯 类别顺序调整
        $cate=$mod->field("*,concat(path,',',id) as paths")->order("paths")->limit($page->firstRow,$page->listRows)->select();
        $cate1=$mod->field("*,concat(path,',',id) as paths")->order("paths")->select();
        //遍历
        foreach($cate as $key=>$value){
            //获取path
            $path=$value['path'];
            //转换为数组
            $arr=explode(",",$path);
            //获取数组长度
            $arrlength=count($arr);
            //获取逗号的个数
            $length=$arrlength-1;
            //重复字符串
            $cate[$key]['name']=str_repeat('---|',$length).$value['name'];     
        }
        	$this->assign('cate',$cate);
        	$this->assign('pageinfo',$page->show());
            $this->assign('cate1',$cate1);
        	$this->display("Cate/list");
   }

   //执行数据库的插入操作
    public function insert(){
        $pid=I("post.pid");
        // $id=I("post.id");
        //如果添加的是顶级分类
        if($pid==0){    
            //拼接path路径
            $_POST['path']='0';
        }else{
            //如果添加的不是顶级分类
            $mod=M("Cates");
            $s=$mod->where("id=$pid")->select();
            //拼接path
            $_POST['path']=$s[0]['path'].",".$s[0]['id'];
        }
        	// $list=$mod->find($pid);exit;
    		//实例化
    		$mod=D("Cates");
            if (!$mod->create()){     
            // 如果创建失败 表示验证没有通过 输出错误提示信息     
                $this->error($mod->getError());
            }
    		// $mod->create();
            $data=$mod->add();
            $list=$mod->find($data);
            $this->ajaxReturn($list,'json');
            $mod->add();
    }

    //删除操作
    public function delete(){
        //实例化
        $mod=M("Cates");
        $id=$_GET['id'];
        $s=$mod->where("pid=$id")->Count();
        echo $s;
        if($s>0){
            //先删除子类信息
            exit;
        }else{
        $mod->where("id=$id")->delete();
    	}
    }

    //获取数据编辑
    public function edit(){
        $mod=M("Cates");
        $cate=$mod->field("*,concat(path,',',id) as paths")->order("paths")->select();
        //遍历
        foreach($cate as $key=>$value){
            //获取path
            $path=$value['path'];
            //转换为数组
            $arr=explode(",",$path);
            //获取数组长度
            $arrlength=count($arr);
            //获取逗号的个数
            $length=$arrlength-1;
            //重复字符串
            $cate[$key]['name']=str_repeat('---|',$length).$value['name'];     
        }
        	$id = $_GET['id'];
        	$list = $mod->find($id);
         	$this->assign('cate',$cate);
         	$this->assign('list',$list);
         	$this->display("Cate/edit");
    }

    //更新数据
    public function update(){
        //实例化
        $mod=M("Cates");
        $pid=I("post.pid");
        //如果添加的是顶级分类
        if($pid==0){
            //拼接path路径
            $_POST['path']='0';
        }else{
            //如果添加的不是顶级分类
            $mod=M("Cates");
            $s=$mod->where("id=$pid")->select();
            //拼接path
            $_POST['path']=$s[0]['path'].",".$s[0]['id'];
        }
        
        $data= $mod->create();
        $mod->create();
        $mod->save();

    }
}