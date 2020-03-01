<?php
if(empty($_GET['page'])){
	$_GET['page']='1';
}
$frurl="http://demo.dataoke.com/?r=l&page=".$_GET['page'];
$fhurl=fileget($frurl,5);
$fenye="#<div id=\"yw0\" class=\"pager\">[\s\S]+?</div>#";
preg_match_all($fenye,$fhurl,$yeshu);
$yeshu=implode($glue, $yeshu[0]);
$yeshu = str_replace('<div id="yw0" class="pager">', '<li>', "$yeshu");
$yeshu = str_replace('</div>', '', "$yeshu");
$yeshu = str_replace('href="javascript:void(0);"', '', "$yeshu");
$yeshu = str_replace('"/index.php?r=l"', '"shop.html"', "$yeshu");
$yeshu = str_replace('/index.php?r=l&amp;page=', 'shop_', "$yeshu");
$yeshu = str_replace('<a class="item cur"', '<li class="active"><a target="_self" class="on"', "$yeshu");
$yeshu = str_replace('<a class="item"', '<li><a target="_self"', "$yeshu");
$yeshu = str_replace('</a>', '</a></li>', "$yeshu");
$yeshu = str_replace('class="pre-page disabled"', 'target="_self"', "$yeshu");
$yeshu = str_replace('<a class="next-page"', '<li><a', "$yeshu");
echo $yeshu;
?>