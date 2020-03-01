<?php 
include('system/inc.php');
error_reporting(0);
ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; SV1; .NET CLR 1.1.4322)');
$url = $mkcms_dataoke;//网站首页
$u = $mkcms_dataokeid;
if(empty($_GET['page'])){
	$_GET['page']='1';
}
$x=$_GET['page'];
$durl="http://demo.dataoke.com/index.php?r=l&page=".$x;
$hurl=file_get_contents($durl);
$tid ='#"id":(.*?),"#';
$tpic ='#pic":"(.*?)"#';
$ttitle ='#d_title":"(.*?)"#';
$tyuanjia = '#"yuanjia":(.*?),"#';
$tjiage = '#"jiage":(.*?),"#';
$quan_jine = '#"quan_jine":(.*?),"#';
preg_match_all($tid,$hurl, $xarr1);
preg_match_all($tpic,$hurl, $xarr2);
preg_match_all($ttitle,$hurl, $xarr3);
preg_match_all($tyuanjia,$hurl, $xarr4);
preg_match_all($tjiage,$hurl, $xarr5);
preg_match_all($quan_jine,$hurl, $xarr6);
$xtid = $xarr1[1];
$xtpic = $xarr2[1];
$xttitle = $xarr3[1];
$xyuanjia = $xarr4[1];
$xjiage = $xarr5[1];
$xquan = $xarr6[1];
include('template/'.$mkcms_bdyun.'/shop.php');?>