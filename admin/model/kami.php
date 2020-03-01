<?php

if (isset($_GET['del'])) {
	$sql = 'delete from mkcms_user_cardclass where id = ' . $_GET['del'] . '';
	$kami = 'delete from mkcms_user_card where c_pass= "' . $_GET['id'] . '"';
	mysqli_query($conn,$kami);
	if (mysqli_query($conn,$sql)) {
		alert_href('删除成功!', 'cms_kami.php');
	} else {
		alert_back('删除失败！');
	}
}
?>

