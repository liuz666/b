<?php
namespace Admin\Controller;
use Think\Controller;
class AllowController extends Controller {
   //控制器初始化方法
	public function _initialize(){
		if(!$_SESSION['islogin']){
			//跳转到登录界面
			$this->error("请先登录后台",U("Login/login"));
		}
		// 3.判断当前访问的控制器或者方法是否在session数组里，如果在，访问到，否则没有权限访问到
		// 获取用户访问的控制器和方法
		$controller = strtolower(CONTROLLER_NAME);
		$action = strtolower(ACTION_NAME);
		// 获取session信息(当前用户能够访问到权限信息=》控制器和方法)
		$nodelist = $_SESSION['nodelist'];
		// // 判断
		if (empty($nodelist[$controller])||!in_array($action,$nodelist[$controller])) {
			$this->error("对不起，您没有此权限操作",U('Index/welcome'));
			exit;
		}
	}
}