<?php 
/*邮件发送函数*/
function sendMail($to, $title, $content) {
	Vendor('PHPMailer.PHPMailerAutoload');
	$mail = new PHPMailer(); //实例化
    $mail->IsSMTP(); // 启用SMTP
	$mail->Host=C('MAIL_HOST'); //smtp服务器的名称（这里以QQ邮箱为例）
	$mail->SMTPAuth = C('MAIL_SMTPAUTH'); //启用smtp认证
	$mail->Username = C('MAIL_USERNAME'); //你的邮箱名
	$mail->Password = C('MAIL_PASSWORD') ; //邮箱密码
	$mail->From = C('MAIL_FROM'); //发件人地址（也就是你的邮箱地址）
	$mail->FromName = C('MAIL_FROMNAME'); //发件人姓名
	$mail->AddAddress($to,"尊敬的客户");
	$mail->WordWrap = 50; //设置每行字符长度
	$mail->IsHTML(C('MAIL_ISHTML')); // 是否HTML格式邮件
	$mail->CharSet=C('MAIL_CHARSET'); //设置邮件编码
	$mail->Subject =$title; //邮件主题
	$mail->Body = $content; //邮件内容
	$mail->AltBody = "这是一个纯文本的身体在非营利的HTML电子邮件客户端"; //邮件正文不支持HTML的备用显示
        return($mail->Send());
    }

function sendPhone($phone,$code) {
	import('Vendor.lib.Ucpaas');
	$options['accountsid']='482a3c95ba7e43f95e262419ba57026c';
	$options['token']='f775da5db3aa54c22002ea0700e66895';
	$ucpaas = new Ucpaas($options);
	//短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
	$appId = "b8a40ced06394a30a110ef51630a20a5";
	$to = $phone;
	//模板
	$templateId = "90393";
	$param = $code;
	$ucpaas->templateSMS($appId,$to,$templateId,$param);
}

 ?>