<?php include('system/inc.php');
$page=$_GET['page'];
if (empty($page)){$page=1;}//页数 
$seach='http://www.1905.com/list-p-catid-220.html?page='.$page;
$rurl = fileget($seach,5);
$szz='#<a href="https://www.1905.com/news/([0-9]+)/([0-9]+).shtml" target="_blank" class="pic-url picHover" title="(.*)">[\s]+?<img src="(.*)" data-original="(.*)" alt="(.*)" height="174" width="320">#';
$szz1='#<p class="des">(.*)</p>#';
$sj='#<span class="timer fl">(.*)</span>#';
preg_match_all($szz,$rurl,$sarr);
preg_match_all($szz1,$rurl,$sarr1);
preg_match_all($sj,$rurl,$sarr2);
$one=$sarr[3];//标题
$one1=$sarr[1];//地址
$one2=$sarr[2];//地址
$one3=$sarr[5];//图片
$nr=$sarr1[1];//内容
$sj=$sarr2[1];//时间
include('template/'.$mkcms_bdyun.'/news.php');?>