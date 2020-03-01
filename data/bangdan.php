<?php
$seach='http://www.360kan.com/';
$bangdan=fileget($seach,5);
$bd='#<ul class="rank-list g-clear">[\s\S]*?</ul>#';
preg_match_all($bd, $bangdan,$bdarr);
$dybd = $bdarr[0][2];
$tvbd = $bdarr[0][0];
$zybd = $bdarr[0][1];
$dmbd = $bdarr[0][3];
$bdinfo='#">(.*?)</span>\s*<a title="(.*?)" href="(.*?)" class="name">(.*?)</a>[\s\S]+?<span class="vv">(.*?)</span>#';
preg_match_all($bdinfo, $dybd,$dybdR);
preg_match_all($bdinfo, $tvbd,$tvbdR);
preg_match_all($bdinfo, $zybd,$zybdR);
preg_match_all($bdinfo, $dmbd,$dmbdR);

//电影榜单
$bdArr['dy']['top']=$dybdR[1];
$bdArr['dy']['title'] =$dybdR[2];
$bdArr['dy']['url'] =$dybdR[3];
$bdArr['dy']['num'] =$dybdR[5];

//剧集榜单
$bdArr['tv']['top']=$dybdR[1];
$bdArr['tv']['title'] =$tvbdR[2];
$bdArr['tv']['url'] =$tvbdR[3];
$bdArr['tv']['num'] =$tvbdR[5];

//综艺榜单
$bdArr['zy']['top']=$dybdR[1];
$bdArr['zy']['title'] =$zybdR[2];
$bdArr['zy']['url'] =$zybdR[3];
$bdArr['zy']['num'] =$zybdR[5];

//动漫榜单
$bdArr['dm']['top']=$dybdR[1];
$bdArr['dm']['title'] =$dmbdR[2];
$bdArr['dm']['url'] =$dmbdR[3];
$bdArr['dm']['num'] =$dmbdR[5];