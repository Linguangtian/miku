<?php
$cat=$_GET['cat'];//类型
$year=intval($_GET['year']);//年份
if($year==0)$year='all';
$area=$_GET['area'];//地区
$act=$_GET['act'];//主演
$rank=$_GET['rank'];//火热
$pageno=intval($_GET['pageno']);
if($pageno==0){$pageno=1;}//页数
if($year==''){$year='all';}
if($cat==''){$cat='all';}
if($area==''){$area='all';}
if($act==''){$act='all';}
if($leixing=="dongman"){$wangzhi="http://www.360kan.com/$leixing/list.php?cat=$cat&year=$year&area=$area&rank=$rank&pageno=$pageno";}
else{$wangzhi="http://www.360kan.com/$leixing/list.php?cat=$cat&year=$year&area=$area&act=$act&rank=$rank&pageno=$pageno";}
$fcon=fileget($wangzhi,5);
$vname='#<span class="s1">(.*?)</span>#';
$fname='#<span class="point">(.*?)</span>#';
$vlist='#<a class="js-tongjic" href="(.*?)">#';
$vstar='# <p class="star">(.*?)</p>#';
$vvlist='#<div class="s-tab-main">[\s\S]+?<div class="s-common-body">#';
$vimg='#<img src="(.*?)">#'; 
$jishu='#<span class="hint">(.*?)</span>#'; 
$fufei='#<span class="pay">(.*?)</span>#';  
preg_match_all($vname, $fcon,$xarr0); 
preg_match_all($vlist, $fcon,$xarr1); 
preg_match_all($vstar, $fcon,$xarr2); 
preg_match_all($vvlist, $fcon,$imglist);
$zcf=implode($glue, $imglist[0]);
preg_match_all($vimg, $zcf,$xarr3);  
preg_match_all($jishu, $fcon,$xarr4); 
preg_match_all($fufei, $fcon,$xarr5); 
preg_match_all($fname, $fcon,$xarr6);
$xname=$xarr0[1];
$xlist=$xarr1[1];
$xstar=$xarr2[1];
$ximg=$xarr3[1];
$xjishu=$xarr4[1];
$xfufei=$xarr5[1];
$lname=$xarr6[1]; 
?>