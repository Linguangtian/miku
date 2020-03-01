<?php include('system/inc.php');
if(isset($_POST['submit'])){
	if ($_SESSION['verifycode'] != $_POST['verifycode']) {
		alert_href('验证码错误');
	}
	if(preg_match("/[ ',:;*~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/",$_POST['content'])){
alert_href('禁止使用特殊符号');
}
if(preg_match("/[ ',:;*~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/",$_POST['userid'])){
alert_href('禁止使用特殊符号');
}
    null_back($_POST['userid'],'请填写姓名');
	null_back($_POST['content'],'请填写留言内容');
	$userid = $_POST['userid'];
	$userid = trim ($userid);
	$userid = strip_tags ($userid);
	$userid = htmlspecialchars($userid);
	$userid = addslashes($userid);
	$data['userid'] = $userid;
	$content = $_POST['content'];
	$content = trim ($content);
	$content = strip_tags ($content);
	$content = htmlspecialchars($content);
	$content = addslashes($content);
	$data['content'] = $content;
	$data['time'] =date('y-m-d h:i:s',time());
	
	$str = arrtoinsert($data);
		$sql = 'insert into mkcms_book ('.$str[0].') values ('.$str[1].')';
	if(mysqli_query($conn,$sql)){
alert_href('留言成功!');
}
else{
alert_back('注册失败');
	}
}
include('template/'.$mkcms_bdyun.'/book.php');?>