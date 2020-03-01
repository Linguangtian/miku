<?php
if (isset($_POST['save'])) {
	$_data['s_domain'] = $_POST['s_domain'];
	$_data['s_dataoke'] = $_POST['s_dataoke'];
	$_data['s_dataokeid'] = $_POST['s_dataokeid'];
	$_data['s_name'] = $_POST['s_name'];
	$_data['s_seoname'] = $_POST['s_seoname'];
	$_data['s_keywords'] = $_POST['s_keywords'];
	$_data['s_description'] = $_POST['s_description'];
	$_data['s_copyright'] = $_POST['s_copyright'];
	$_data['s_cache'] = $_POST['s_cache'];
	$_data['s_wei'] = $_POST['s_wei'];
	$_data['s_hong'] = $_POST['s_hong'];
	$_data['s_logo'] = $_POST['s_logo'];
	$_data['s_tk'] = $_POST['s_tk'];
	$_data['s_mjk'] = $_POST['s_mjk'];
	$_data['s_jiekou'] = $_POST['s_jiekou'];
	$_data['s_tongji'] = $_POST['s_tongji'];
	$_data['s_qianxian'] = $_POST['s_qianxian'];
	$_data['s_dianying'] = $_POST['s_dianying'];
	$_data['s_dianshi'] = $_POST['s_dianshi'];
	$_data['s_zongyi'] = $_POST['s_zongyi'];
	$_data['s_dongman'] = $_POST['s_dongman'];
	$_data['s_gx'] = $_POST['s_gx'];
	$_data['s_shoufei'] = $_POST['s_shoufei'];
	$_data['s_hctime'] = $_POST['s_hctime'];
	$_data['s_beijing'] = $_POST['s_beijing'];
	$_data['s_dianyingnew'] = $_POST['s_dianyingnew'];
	$_data['s_dongmannew'] = $_POST['s_dongmannew'];
	$_data['s_zongyinew'] = $_POST['s_zongyinew'];
	$_data['s_miaoshu'] = $_POST['s_miaoshu'];
	$_data['s_bdyun'] = $_POST['s_bdyun'];
	$_data['s_hz'] = $_POST['s_hz'];
	$_data['s_yq'] = $_POST['s_yq'];
	$_data['s_mv' ]= $_POST['s_mv'];
    $_data['s_zixun'] = $_POST['s_zixun'];
    $_data['s_yy'] = $_POST['s_yy'];
	$_data['s_cxzy'] = $_POST['s_cxzy'];
	$_data['s_slow'] = $_POST['s_slow'];
	$_data['s_gg'] = $_POST['s_gg'];
	$_data['s_gonggao'] = $_POST['s_gonggao'];
	$sql = 'update mkcms_system set ' . arrtoupdate($_data) . ' where id = 1';
	if (mysqli_query($conn,$sql)) {
		alert_href('系统设置修改成功!', 'cms_system.php');
	} else {
		alert_back('修改失败!');
	}
}