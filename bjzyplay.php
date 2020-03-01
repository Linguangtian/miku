<?php include('system/inc.php');
error_reporting(0);
include('system/bjzyplayurl.php');
header('Content-Type:text/html;charset=UTF-8');
$id=$_GET['id'];
$url = $cxurl."?vodids=".$id;
$data=json_decode(file_get_contents($url),true);
include('system/pcon.php');
{include('template/'.$mkcms_bdyun.'/bjzyplay.php');}?>