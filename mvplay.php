<?php include('system/inc.php');
error_reporting(0);
header('Content-Type:text/html;charset=UTF-8');
$mvplay = $_GET["mv"];
$play = base64_decode($mvplay);
$player = $mkcms["jiekouyk"].$play;
include('template/'.$mkcms_bdyun.'/mvplay.php');?>