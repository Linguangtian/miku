<?php
include('system/inc.php');
$q=$_GET['wd'];
$url='https://so.360kan.com/index.php?kw='.$q;
$seach = fileget2($url,5);
$szz='#js-playicon" title="(.*?)"\s*data-logger#';//标题
$szz1='#a href="(.*?)" class="g-playicon js-playicon"#';//链接
$szz2='#data-longrecord="(.*?)">[\s\S]*?<img src="(.*?)" alt="(.*?)" \/>#';//图片
$szz3='#<span class="playtype">[\s\S]*?</span>#';
$szz4='#<div class="m-description">[\s\S]*?</p>#';//简介
$mxzl="#<dl class='w-star-intro'><dt>介绍：</dt><dd>(.*?)</dd></dl>#";//简介
$mxss='#<li data-logger=(.*?) class=\'w-mfigure\'><a class=\'w-mfigure-imglink g-playicon js-playicon\' href=\'(.*?)\'> <img src=\'(.*?)\' data-src=\'(.*?)\' alt=\'(.*?)\'  /><span class=\'w-mfigure-hintbg\'>(.*?)</span><span class=\'w-mfigure-hint\'>(.*?)</span></a><h4><a class=\'w-mfigure-title\' href=\'(.*?)\'>(.*?)</a>#';//模糊搜索结果
$score1='#<b class=\'w-mfigure-score\'>(.*?)</b>#';//评分
$score2='#<div class="m-score">(.*?)</div>#';//评分
preg_match_all($szz,$seach,$sarr);
preg_match_all($szz1,$seach,$sarr1);
preg_match_all($szz2,$seach,$sarr2);
preg_match_all($szz3,$seach,$sarr3);
preg_match_all($szz4,$seach,$sarr4);
preg_match_all($mxss,$seach,$sarr5);
preg_match_all($mxzl,$seach,$sarr6);
preg_match_all($score1,$seach,$sarr7);
preg_match_all($score2,$seach,$sarr8);
$one=$sarr[1];//标题
$two=$sarr2[2];//图片
$three=$sarr3[0];//类型
$four=$sarr4[0];//简介
$five =$sarr1[1];
$mingxing =$sarr5[2];
$mingxing1 =$sarr5[4];
$mingxing2 =$sarr5[5];
$mingxing3 =$sarr5[6];
$mingxing4 =$sarr6[1];
$mingxing5 =$sarr7[1];
$mingxing6 =$sarr8[1]; 
$data = json_decode(fileget2($mkcms_cxzy.'?wd='.$q,5), true);
include 'data/bangdan.php';
include('template/'.$mkcms_bdyun.'/seacher.php');
?>