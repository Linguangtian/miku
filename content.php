<?php include('system/inc.php');
$dz='http://www.1905.com/news'.$_GET['dz'];
$seachh = fileget2($dz,5);
$zz_sxx='#<h1 class="title">(.*)</h1>#';
$zz_nr='#插入关联图集结束-->(.*)分页 start-->#';//内容
$ke='#<meta content="(.*)" name="keywords" />#';
$des='#<meta content="(.*)" name="description" />#';
$relate='#<h3 class="title"><a href="(.*)" data-hrefexp="fr=wwwfilm_news_xgdy_1_201411" title="(.*)" target="_blank">(.*)</a></h3>#';
$pic='#<div class="pic-pack-outer">[\s\S]+?<a href="(.*)" data-hrefexp="fr=wwwfilm_news_xgdy_1_201411" target="_blank" class="pic-url">[\s\S]+?<img src="(.*)" height="160" width="110">#';
$daoyan='#<div class="director-role"><span>导演：</span><a href="(.*)" target="_blank">(.*)</a></div>#';
$zhuyan='#<div class="director-role"><span>主演：</span><a href="(.*)" target="_blank">(.*)</a>#';
$from1='#<div class="pic-base clear">[\s\S]+?(.*)<span class="share clear hidden-xs hidden-sm">#';
preg_match_all($zz_sxx,$seachh,$sarrr);//标题
preg_match_all($zz_nr,$seachh,$sarrrr);//内容
preg_match_all($ke,$seachh,$sarrrr1);//
preg_match_all($des,$seachh,$sarrrr2);//
preg_match_all($relate,$seachh,$sarrrr3);//
preg_match_all($pic,$seachh,$sarrrr4);//
preg_match_all($daoyan,$seachh,$sarrrr5);//
preg_match_all($zhuyan,$seachh,$sarrrr6);//
preg_match_all($from1,$seachh,$sarrrr7);//
$onee=$sarrr[1];//标题
$onebt=$sarrrr[1];//内容
$ks=$sarrrr1[1];//
$des=$sarrrr2[1];//
$mov=$sarrrr3[2];//
$img=$sarrrr4[2];//
$director=$sarrrr5[2];//
$actor=$sarrrr6[2];//
$seachh2=$seachh;
if ($x=strpos($seachh2,'<div class="pic-base clear">')) $seachh2=substr($seachh2,$x);
if ($x=strpos($seachh2,'<span class="share clear hidden-xs hidden-sm">')) $seachh2=substr($seachh2,0,$x);
$from = str_replace('<div class="pic-base clear">', '', $seachh2);
//删除 <div class="pic-content">之前的内容
if ($x=strpos($seachh,'<div class="pic-content">')) $seachh=substr($seachh,$x);
//删除 <!-- 分页 start-->之后的内容
if ($x=strpos($seachh,'<!-- 分页 start-->')) $seachh=substr($seachh,0,$x);
//输出结果
$replace = array('1905电影网讯','href=','href=',);
$string = str_replace($replace, '', $seachh);
include('template/'.$mkcms_bdyun.'/content.php');?>