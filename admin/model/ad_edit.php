<?php

if (isset($_GET['del'])) {
	$sql = 'delete from mkcms_ad where id = ' . $_GET['del'] . '';
	if (mysqli_query($conn,$sql)) {
		alert_href('删除成功!', 'cms_ad.php');
	} else {
		alert_back('删除失败！');
	}
}
if (isset($_POST['save'])) {
	null_back($_POST['title'], '请填写广告名称');
	$data['title'] = $_POST['title'];
	$data['pic'] = $_POST['pic'];
	$data['url'] = $_POST['url'];
	$data['catid'] = $_POST['catid'];
	$sql = 'update mkcms_ad set ' . arrtoupdate($data) . ' where id = ' . $_GET['id'] . '';
	if (mysqli_query($conn,$sql)) {
		alert_href('广告修改成功!', 'cms_ad.php');
	} else {
		alert_back('修改失败!');
	}
}
