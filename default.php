<?php include('system/inc.php');
if(!file_exists('./install/install.lock')){
header('location:/install/');
}


$url = $mkcms_cxzy."?p=".$_GET['page'];
$data=json_decode(file_get_contents($url),true);

$recordcount = $data['page']['recordcount'];
$pagesize = $data['page']['pagesize'];


include('template/'.$mkcms_bdyun.'/index.php');?>