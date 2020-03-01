<?php
$pageno=intval($_GET['pageno']);
if($pageno==0){$pageno=1;}//页数
$wangzhi="https://so.360kan.com/index.php?kw=".$flid1."&tab=".$leixing."&from=&pageno=".$pageno;
$arr=explode('pageno',$wangzhi);
$yourneed=$arr[0];
$yema=$yourneed;
$arr=explode('pageno',$yema);
$yemama=$arr[0];
$flid2=$wangzhi.'&pageno='.$pageno;
$fcon = fileget2($flid2,5);
$mxss='#<li data-logger=(.*?) class=\'w-mfigure\'><a class=\'w-mfigure-imglink g-playicon js-playicon\' href=\'(.*?)\'> <img src=\'(.*?)\' data-src=\'(.*?)\' alt=\'(.*?)\'  /><span class=\'w-mfigure-hintbg\'>(.*?)</span><span class=\'w-mfigure-hint\'>(.*?)</span></a><h4><a class=\'w-mfigure-title\' href=\'(.*?)\'>(.*?)</a>#';//模糊搜索结果
$mxzl='#<div  data-logger=\'box=artistinfo\' class=\'js-logger g-clear w-star\'><a class=\'w-star-imglink\' href=\'(.*?)\'> <img src=\'(.*?)\' alt=\'(.*?)\' /><span class=\'w-star-hintbg\'>详细资料</span></a><div class=\'w-star-content\'><h4><a class=\'w-star-title\' href=\'(.*?)\'>(.*?)</a></h4><dl class=\'g-clear\'><dt><b>别名：</b><span class=\'w-star-alias\'>(.*?)</span></dt><dd><b>地区：</b><span>(.*?)</span></dd><dd><b>生日：</b><span>(.*?)</span></dd><dd><b>星座：</b><span>(.*?)</span></dd><dd><b>血型：</b><span>(.*?)</span></dd><dd><b>身高：</b><span>(.*?)</span></dd><dd><b>体重：</b><span>(.*?)</span></dd></dl><dl class=\'w-star-intro\'><dt>介绍：</dt><dd>(.*?)</dd></dl></div>#'; //明星资料
preg_match_all($mxss,$fcon,$sarr);
preg_match_all($mxzl,$fcon,$sarr2);
$mingxing =$sarr[2];
$mingxing1 =$sarr[4];
$mingxing2 =$sarr[5];
$mingxing3 =$sarr[6];
$mingxing4 =$sarr2[1];//百科链接
$mingxing5 =$sarr2[2];//图片
$mingxing6 =$sarr2[5];//姓名
$mingxing7 =$sarr2[6];//别名
$mingxing8 =$sarr2[7];//地区
$mingxing9 =$sarr2[8];//生日
$mingxing10 =$sarr2[9];//星座
$mingxing11 =$sarr2[10];//血型
$mingxing12 =$sarr2[11];//身高
$mingxing13 =$sarr2[12];//体重
$mingxing14 =$sarr2[13];//介绍
?>