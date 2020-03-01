<?php include('system/inc.php');
error_reporting(0);
include('system/cxplayurl.php');
header('Content-Type:text/html;charset=UTF-8');
$url = $mkcms_cxzy."?vodids=".$_GET['id'];
$data=json_decode(file_get_contents($url),true);
include('template/'.$mkcms_bdyun.'/cxplay.php');?>