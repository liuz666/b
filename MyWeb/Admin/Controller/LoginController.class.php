<?php  
	namespace Admin\Controller;
	use Think\Controller;
	class LoginController extends Controller{
		public function login(){
			// 加载模板
			$this->display('Login/login');
		}
		 //加载验证码
	    public function verify(){
	   		//实例化验证码类
	    	$verify=new \Think\Verify();
	    	//设置
	    	//字体大小
	    	$verify->fontSize=20;
	    	//是否采用杂点
	    	$verify->useNoise=true;
	    	//验证码的位数
	    	$verify->length=4;
	    	//是否采用中文验证码
	    	$verify->useZh=false;
	    	//中文验证码内容
	    	$verify->zhSet="你啊跨境电商喜让去欢我与快回家吗";
	    	//写入验证码
	    	$verify->entry();
  		}
  		// 执行登录
	    public function dologin(){
	   		//获取输入的验证码
	    	$fcode=$_POST['fcode'];
	    	//实例化验证码类
	    	$verify=new \Think\Verify();
	    	if($verify->check($fcode,"")){
	    		//获取登录的用户名和密码
	    		$adminname=$_POST['adminname'];
	    		$password=$_POST['password'];
	    		//实例化Model
	    		$mod=M("Admin");
	    		$row=$mod->where("adminname='{$adminname}' and password='{$password}' and status=1")->find();
	    		if($row){
	    			//把用户的信息存储在session
	    			$_SESSION['adminname']=$adminname;
	    			$_SESSION['islogin']=2;
	    			//1. 获取当前登录用户的所能访问到的节点信息
	    			$list = $mod->query("select n.mname,n.aname from __PREFIX__admin_role ar,__PREFIX__role_node rn,__PREFIX__node n where ar.rid=rn.rid and rn.nid=n.id and ar.aid={$row['id']}");
	    			// 添加后台首页访问权限
	    			$nodelist['index'][] = 'index';
	    			// 遍历$list
	    			foreach($list as $key=>$v){
	    				// 给$nodelist数组赋值
	    				$nodelist[$v['mname']][]=$v['aname'];
	    				if ($v['aname']=='add') {
	    					// 如果有add，就把insert权限写进去
	    					$nodelist[$v['mname']][]="insert";
	    				}
	    				if ($v['aname']=='ad_add') {
	    					// 如果有add，就把insert权限写进去
	    					$nodelist[$v['mname']][]="ad_insert";
	    				}
	    				if ($v['aname']=='show') {
	    					// 如果有show，就把insert权限写进去
	    					$nodelist[$v['mname']][]="insert";
	    				}
	    				if ($v['aname']=='rule') {
	    					// 如果有rule，就把rule权限写进去
	    					$nodelist[$v['mname']][]="rule";
	    				}
	    				if ($v['aname']=='pwd') {
	    					// 如果有edit，就把update写入
	    					$nodelist[$v['mname']][]="edit2";
	    				}
	    				if ($v['aname']=='edit') {
	    					// 如果有edit，就把update写入
	    					$nodelist[$v['mname']][]="update";
	    				}
	    				if ($v['aname']=='ad_edit') {
	    					// 如果有edit，就把update写入
	    					$nodelist[$v['mname']][]="ad_save";
	    				}
	    			}
	    			// 2.存储在session数组里，把nodelist存储在session数组里
	    			session("nodelist",$nodelist);
	    			// //跳转
	    			$this->success("登录成功",U("Index/index"));
	    		}else{
	    			$this->error("用户名或者密码有误",U("Login/login"));
	    		}
	    	}else{
	    		$this->error("验证码有误",U("Login/login"));
	    	}
	    }
	    //退出
	    public function logout(){
		   	setcookie(session_name(),'',time()-100,'/');
		   	$_SESSION=array();
		   	session_destroy();
		   	$this->success("退出成功",U("Login/login"));
	    }
	}

?>