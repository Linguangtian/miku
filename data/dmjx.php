<?php
error_reporting(0); 
header('Content-type:text/html;charset=utf-8'); 
$urllist='http://www.360kan.com/dongman/list.php';
$info=fileget($urllist,5);
$vname='#<span class="s1">(.*?)</span>#';
$vlist='#<a class="js-tongjic" href="(.*?)">#';
$vvlist='#<div class="s-tab-main">[\s\S]+?<div monitor-desc#';
$vimg='#<img src="(.*?)">#';
$nname='#<span class="hint">(.*?)</span>#';
preg_match_all($vname, $info,$namearr);
preg_match_all($vlist, $info,$listarr);
preg_match_all($vvlist, $info,$imglist);
$zcf=implode($glue, $imglist[0]);
preg_match_all($vimg, $zcf,$imgarr);
preg_match_all($nname, $info,$nnamearr);
?>