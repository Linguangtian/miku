<?php
error_reporting(0); 
header('Content-type:text/html;charset=utf-8');
$urllist='http://www.360kan.com/zongyi/list.php?cat=all&act=all&area=all&rank=createtime&pageno=1'; 
$info=fileget($urllist,5);
$vname='#<span class="s1">(.*?)</span>#';$vlist='#<a class="js-tongjic" href="(.*?)">#';
$vvlist='#<div class="s-tab-main">[\s\S]+?<div monitor-desc#';
$vstar='# <p class="star">(.*?)</p>#';
$nname='#<span class="hint">(.*?)</span>#';
$vimg='#<img src="(.*?)">#';
$jishu='#<span class="hint">(.*?)</span>#';//集数
$array = array();
preg_match_all($vname, $info,$namearr);
preg_match_all($vlist, $info,$listarr);
preg_match_all($vstar, $info,$stararr);
preg_match_all($vvlist, $info,$imglist);
preg_match_all($jishu, $info,$xjishu);
$zcf=implode($glue, $imglist[0]);
preg_match_all($vimg, $zcf,$imgarr);
preg_match_all($nname, $info,$nnamearr);
?>
