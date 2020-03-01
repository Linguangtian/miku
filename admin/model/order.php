<?php

if (isset($_POST['execute'])) {
	null_back($_POST['id'], '请至少选中一项！');
	$s = '';
	$id = '';
	foreach ($_POST['id'] as $value) {
		$id .= $s . $value;
		$s = ',';
	}
	switch ($_POST['execute_method']) {
		case 'delete':
			$sql = 'delete from mkcms_user_pay where p_id in (' . $id . ')';
			break;
		default:
			alert_back('请选择要执行的操作');
	}
	mysqli_query($conn,$sql);
	alert_href('执行成功!', 'cms_order.php');
}
