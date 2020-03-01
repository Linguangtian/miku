<?php include('system/inc.php');
error_reporting(0);
header('Content-Type:text/html;charset=UTF-8');
$gaoxiao = $_GET["xiao"];
$play = base64_decode($gaoxiao);
$player = $mkcms["jiekouyk"].$play;
include('template/'.$mkcms_bdyun.'/splay.php');?>