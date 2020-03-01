<?php include('system/inc.php');
error_reporting(0);
header('Content-Type:text/html;charset=UTF-8');
$yule = $_GET["yule"];
$play = base64_decode($yule);
$player = $mkcms["jiekouyk"].$play;
include('template/'.$mkcms_bdyun.'/fplay.php');?>