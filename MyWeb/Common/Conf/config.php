<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'   => 'mysqli', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'chuangha_com', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => 'root', // 密码
	'DB_PORT'   => 3306, // 端口  
	'DB_CHARSET'=> 'utf8', // 字符集


	// 配置邮件发送服务器
    'MAIL_HOST' =>'smtp.163.com',//smtp服务器的名称
    'MAIL_SMTPAUTH' =>TRUE, //启用smtp认证
    'MAIL_USERNAME' =>'13225938209@163.com',//你的邮箱名
    'MAIL_FROM' =>'13225938209@163.com',//发件人地址
    'MAIL_FROMNAME'=>'超级购商城',//发件人姓名
    'MAIL_PASSWORD' =>'xjwan776638',//邮箱密码
    'MAIL_CHARSET' =>'utf-8',//设置邮件编码
    'MAIL_ISHTML' =>TRUE, // 是否HTML格式邮件
  	'TITLE' =>'福建创哈网络科技有限公司',//网站标题
  	'KEYWORDS' =>'创哈,福建，网络科技有限公司',//网站关键词
  	'DESCRIPTION'=>'',//网站描叙

	'TMPL_PARSE_STRING'=>array(
        '__UPLOAD__'=>__ROOT__.'/Public/images',),

);