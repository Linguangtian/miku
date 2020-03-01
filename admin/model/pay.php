<?php

if (isset($_POST['save'])) {
	$_data['s_alipay'] = $_POST['s_alipay'];
	$_data['s_appid'] = $_POST['s_appid'];
	$_data['s_appkey'] = $_POST['s_appkey'];
	$_data['s_zhifu'] = $_POST['s_zhifu'];
	$sql = 'update mkcms_system set ' . arrtoupdate($_data) . ' where id = 1';
	if (mysqli_query($conn,$sql)) {
		alert_href('修改成功!', 'cms_pay.php');
	} else {
		alert_back('修改失败!');
	}
}
