<?php

if (isset($_POST['save'])) {
	$_data['content'] = $_POST['content'];
	$_data['Reply'] = $_POST['Reply'];
	$sql = 'update mkcms_book set ' . arrtoupdate($_data) . ' where id = ' . $_GET['id'] . '';
	if (mysqli_query($conn,$sql)) {
		alert_href('修改成功!', 'cms_book.php');
	} else {
		alert_back('修改失败!');
	}
}
