<?php

if (isset($_POST['save'])) {
	$_data['s_smtp'] = $_POST['s_smtp'];
	$_data['s_muser'] = $_POST['s_muser'];
	$_data['s_mpwd'] = $_POST['s_mpwd'];
	$sql = 'update mkcms_system set ' . arrtoupdate($_data) . ' where id = 1';
	if (mysqli_query($conn,$sql)) {
		alert_href('修改成功!', 'cms_smtp.php');
	} else {
		alert_back('修改失败!');
	}
}
