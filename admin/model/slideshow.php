<?php

if (isset($_POST['save'])) {
	null_back($_POST['s_picture'], '请输入或上传图片');
	non_numeric_back($_POST['s_order'], '请输入排序数字');
	$_data['s_name'] = $_POST['s_name'];
	$_data['s_parent'] = 1;
	$_data['s_picture'] = $_POST['s_picture'];
	$_data['s_url'] = $_POST['s_url'];
	$_data['s_order'] = $_POST['s_order'];
	$str = arrtoinsert($_data);
	$sql = 'insert into mkcms_slideshow (' . $str[0] . ') values (' . $str[1] . ')';
	if (mysqli_query($conn,$sql)) {
		$order = mysqli_insert_id($conn);
		if ($_POST['s_order'] == 0) {
			mysqli_query($conn,'update mkcms_slideshow set s_order = ' . $order . ' where id = ' . $order);
		}
		alert_href('幻灯添加成功!', 'cms_slideshow.php');
	} else {
		alert_back('添加失败!');
	}
}
if (isset($_GET['del'])) {
	$sql = 'delete from mkcms_slideshow where id = ' . $_GET['del'] . '';
	if (mysqli_query($conn,$sql)) {
		alert_href('删除成功!', 'cms_slideshow.php');
	} else {
		alert_back('删除失败！');
	}
}
