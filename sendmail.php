<?php
	require_once "email.class.php";
	$smtpserver = "smtp.qq.com";
	$smtpserverport =25;
	$smtpusermail = "32349501@qq.com";
	$smtpemailto = "32349501@qq.com";
	$smtpuser = "32349501";
	$smtppass = "sandy@0532";
	$mailtitle = $_POST['name'];
	$mailcontent = $_POST['message'].$_POST['from'];
	$mailtype = "TEXT";

	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
	$smtp->debug = false;
	$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);


	if($state==""){
		echo "对不起，邮件发送失败！请检查填写是否有误。";
		exit();
	}
	echo "邮件发送成功！";
?>