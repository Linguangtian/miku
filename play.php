<?php include('system/inc.php');
include('system/playurl.php');
if ($mkcmstyle=='m'){
$movie='active';
}
if ($mkcmstyle=='tv'){
$tv='active';
}
if ($mkcmstyle=='ct'){
$dm='active';
}
if ($mkcmstyle=='va'){
$zy='active';
}
include('template/'.$mkcms_bdyun.'/play.php');?>