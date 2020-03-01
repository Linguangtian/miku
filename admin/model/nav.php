<?php

if (isset($_POST['save'])) {
	null_back($_POST['n_name'], '请输入名称');
	non_numeric_back($_POST['order'], '请输入排序数字');
	$_data['n_name'] = $_POST['n_name'];
	$_data['n_url'] = $_POST['n_url'];
	$_data['order'] = $_POST['order'];
	$str = arrtoinsert($_data);
	$sql = 'insert into mkcms_nav (' . $str[0] . ') values (' . $str[1] . ')';
	if (mysqli_query($conn,$sql)) {
		$order = mysqli_insert_id($conn);
		if ($_POST['order'] == 0) {
			mysqli_query($conn,'update mkcms_nav set order = ' . $order . ' where id = ' . $order);
		}
		alert_href('导航添加成功!', 'cms_nav.php');
	} else {
		alert_back('添加失败!');
	}
}
if (isset($_GET['del'])) {
	$sql = 'delete from mkcms_nav where id = ' . $_GET['del'] . '';
	if (mysqli_query($conn,$sql)) {
		alert_href('删除成功!', 'cms_nav.php');
	} else {
		alert_back('删除失败！');
	}
}
