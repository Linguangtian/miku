<?php
include 'head.php';
$tv='active';
$leixing="dianshi";
require 'system/360.php';
$cs0=$_GET['cat'];//类型
$cs1=$_GET['year'];//年份
$cs2=$_GET['area'];//地区
$cs3=$_GET['act'];//主演
$cs4=$_GET['rank'];//火热
if($cs4=='')$cs4='rankhot';
$cs5=intval($_GET['pageno']);//页数
if($cs5=='')$cs5=1;
if($cs3=='all'||$cs3==''){$ac2='';}else{$ac2='-'.$_GET['act'];}
if($cs1=='all'||$cs1==''){$yea2='';}else{$yea2='-'.$_GET['year'].'年';}
$getcat2 = isset($_GET['cat']) ? $_GET['cat'] : '';
switch($getcat2){
case '101':
$type2 = "-言情片";
break;
case '105':
$type2 = "-伦理片";
break;
case '109':
$type2 = "-喜剧片";
break;
case '108':
$type2 = "-悬疑片";
break;
case '111':
$type2 = "-都市片";
break;
case '100':
$type2 = "-偶像片";
break;
case '104':
$type2 = "-古装片";
break;
case '107':
$type2 = "-军事片";
break;
case '103':
$type2 = "-警匪片";
break;
case '112':
$type2 = "-历史片";
break;
case '106':
$type2 = "-武侠片";
break;
case '113':
$type2 = "-科幻片";
break;
case '102':
$type2 = "-宫廷片";
break;
case '114':
$type2 = "-情景片";
break;
case '115':
$type2 = "-动作片";
break;
case '116':
$type2 = "-励志片";
break;
case '117':
$type2 = "-神话片";
break;
case '118':
$type2 = "-谍战片";
break;
case '110':
$type2 = "-粤语片";}
$getarea2 = isset($_GET['area']) ? $_GET['area'] : '';
switch($getarea2){
case '10':
$are2 = "-大陆";
break;
case '11':
$are2 = "-香港";
break;
case '16':
$are2 = "-台湾";
break;
case '12':
$are2 = "-韩国";
break;
case '14':
$are2 = "-泰国";
break;
case '15':
$are2 = "-日本";
break;
case '13':
$are2 = "-美国";
break;
case '17':
$are2 = "-英国";
break;
case '18':
$are2 = "-新加坡";}
?>
<title>追热剧<?php echo $yea2.$are2.$ac2.$type2;?>-最新剧集排行-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="追热剧-最新剧集-好看剧集-最新剧集排行,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
</head>
<body style="padding: 0;">
<style type="text/css">
.stui-header__top{ background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0) 100%);}
.stui-header__top.headroom--not-top{ background: #292838;}
.am-slider-desc {
    background-color: rgba(0,0,0,.7);
    width: 100%;
    color: #f8f8f8;
}
.am-slider-content {
    background-color: rgba(0,0,0,.7);
    position: absolute;
    bottom: 0;
    padding: 10px;
    width: 100%;
    color: #e4dddd;
    }
	h2.am-slider-title {
    color: #fff;
	text-align: center;
}
</style>
<?php include 'header.php';?>
<!-- 幻灯片 -->
<div id="banner" data-ride="carousel" class="stui-banner carousel slide">
<a class="carousel-control left" href="#banner" data-slide="prev"><i class="icon iconfont icon-back"></i></a>
<a class="carousel-control right" href="#banner" data-slide="next"><i class="icon iconfont icon-more"></i></a>
<div class="carousel-inner">
<?php
error_reporting(0); 
header('Content-type:text/html;charset=utf-8'); 
$ii=0;
foreach ($one as $ni=>$cs){
if ($ii<9){
echo '
<div class="item stui-banner__item ';
if ($ii<1){echo 'active';}
echo '"><a class="stui-banner__pic" href="/seacher-'.$cs.'.html" alt="'.$cs.'" style="background: url('.$two[$ni].') rgba(98,71,136,0) no-repeat; background-position: center center; background-size: cover; display: block; width: 100%; height: 100%;" title="'.$cs.'"><div class="am-slider-desc"><div class="am-slider-content"><h2 class="am-slider-title">'.$cs.' - '.$three[$ni].'</h2><p></p></div></div>
</a>
</div>';
$ii ++;}}?>
</div>
</div>
<style type="text/css">
	.stui-banner__pic{ padding-top: 29%; background-position: center center !important;}
	@media (max-width:1023px){.stui-banner__pic{ padding-top: 45%; background-position: 50% 50% !important; background-size: cover !important;}}
	@media (max-width:767px){.stui-banner__pic{ padding-top: 55%; background-position: 50% 50% !important; background-size: cover !important;}}
</style><!-- 幻灯片 -->
<div class="container">
	<div class="row">
		<?php echo $mkcms_ad12; ?>
		<div class="stui-pannel stui-pannel-bg clearfix">
			<div class="stui-pannel-box">
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head active bottom-line clearfix">
					<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>剧集</h3></div>
				</div>
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul1">
<li><span class="text-muted">按类型</span></li>
<li><a href="tv_all_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html">全部</a></li>
<li><a href='tv_101_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>言情</a></li>
<li><a href='tv_105_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>伦理</a></li>
<li><a href='tv_109_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>喜剧</a></li>
<li><a href='tv_108_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>悬疑</a></li>
<li><a href='tv_111_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>都市</a></li>
<li><a href='tv_100_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>偶像</a></li>
<li><a href='tv_104_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>古装</a></li>
<li><a href='tv_107_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>军事</a></li>
<li><a href='tv_103_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>警匪</a></li>
<li><a href='tv_112_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>历史</a></li>
<li><a href='tv_106_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>武侠</a></li>
<li><a href='tv_113_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>科幻</a></li>
<li><a href='tv_102_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>宫廷</a></li>
<li><a href='tv_114_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>情景</a></li>
<li><a href='tv_115_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>动作</a></li>
<li><a href='tv_116_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>励志</a></li>
<li><a href='tv_117_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>神话</a></li>
<li><a href='tv_118_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>谍战</a></li>
<li><a href='tv_110_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>粤语</a></li>
<li><a href='tv_other_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>其他</a></li>
</ul> 
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul2">
<li><span class="text-muted">按地区</span></li>
<li><a href="tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_all_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html">全部</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_10_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>大陆</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_11_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>香港</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_16_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>台湾</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_12_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>韩国</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_14_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>泰国</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_15_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>日本</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_13_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>美国</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_17_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>英国</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_18_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>新加坡</a></li>
</ul>
<ul class="stui-screen__list type-slide clearfix up-ul3">
<li><span class="text-muted">按年份</span></li>
<li><a href="tv_<?php echo $cs0 ?>_all_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html">全部</a></li>
<li><a href='tv_<?php echo $cs0 ?>_2020_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2020</a></li>
<li><a href='tv_<?php echo $cs0 ?>_2019_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2019</a></li>
<li><a href='tv_<?php echo $cs0 ?>_2018_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2018</a></li>
<li><a href='tv_<?php echo $cs0 ?>_2017_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2017</a></li>
<li><a href='tv_<?php echo $cs0 ?>_2016_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2016</a></li>
<li><a href='tv_<?php echo $cs0 ?>_2015_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2015</a></li>
<li><a href='tv_<?php echo $cs0 ?>_2014_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2014</a></li>
<li><a href='tv_<?php echo $cs0 ?>_2013_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2013</a></li>
<li><a href='tv_<?php echo $cs0 ?>_2012_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2012</a></li>
<li><a href='tv_<?php echo $cs0 ?>_2011_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2011</a></li>
<li><a href='tv_<?php echo $cs0 ?>_2010_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2010</a></li>
<li><a href='tv_<?php echo $cs0 ?>_2009_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2009</a></li>
<li><a href='tv_<?php echo $cs0 ?>_2008_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2008</a></li>
<li><a href='tv_<?php echo $cs0 ?>_2007_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2007</a></li>
<li><a href='tv_<?php echo $cs0 ?>_other_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>更早</a></li>
</ul>
<ul class="stui-screen__list type-slide clearfix up-ul4">
<li><span class="text-muted">按明星</span></li>
<li><a href="tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_all_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html">全部</a></li>
<?php if($cs2=="all"||$cs2==""){?>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_杨幂_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>杨幂</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_热巴_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>热巴</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_郑爽_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>郑爽</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_胡歌_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>胡歌</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_罗晋_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>罗晋</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_陈坤_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>陈坤</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_徐峥_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>徐峥</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_唐嫣_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>唐嫣</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_祖峰_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>祖峰</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_张嘉译_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>张嘉译</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_赵丽颖_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>赵丽颖</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_张一山_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>张一山</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_吴秀波_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>吴秀波</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_刘亦菲_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>刘亦菲</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_李易峰_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>李易峰</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_周冬雨_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>周冬雨</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_雷佳音_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>雷佳音</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_贾乃亮_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>贾乃亮</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_秦海璐_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>秦海璐</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_于和伟_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>于和伟</a></li>
<?php }?>
<?php if($cs2==10||$cs2=="大陆"){?>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_孙俪_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>孙俪</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_杨幂_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>杨幂</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_文章_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>文章</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_吴秀波_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>吴秀波</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_海清_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>海清</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_黄渤_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>黄渤</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_刘诗诗_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>刘诗诗</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_林永健_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>林永健</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_刘涛_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>刘涛</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_于震_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>于震</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_唐嫣_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>唐嫣</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_刘亦菲_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>刘亦菲</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_范冰冰_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>范冰冰</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_胡歌_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>胡歌</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_黄晓明_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>黄晓明</a></li>
<?php }?>
<?php if($cs2=="11"||$cs2=="香港"){?>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_蔡少芬_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>蔡少芬</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_陈浩民_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>陈浩民</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_佘诗曼_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>佘诗曼</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_宣萱_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>宣萱</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_张卫健_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>张卫健</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_谢天华_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>谢天华</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_欧阳震华_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>欧阳震华</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_林保怡_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>林保怡</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_陈豪_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>陈豪</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_胡杏儿_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>胡杏儿</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_刘恺威_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>刘恺威</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_黎耀祥_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>黎耀祥</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_邓萃雯_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>邓萃雯</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_林峰_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>林峰</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_张智霖_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>张智霖</a></li>
<?php }?>
<?php if($cs2==16||$cs2=="台湾"){?>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_林心如_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>林心如</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_霍建华_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>霍建华</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_陈乔恩_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>陈乔恩</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_吴奇隆_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>吴奇隆</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_林依晨_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>林依晨</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_明道_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>明道</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_贾静雯_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>贾静雯</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_言承旭_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>言承旭</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_郑元畅_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>郑元畅</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_贺军翔_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>贺军翔</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_杨丞琳_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>杨丞琳</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_徐熙媛_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>徐熙媛</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_安以轩_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>安以轩</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_何润东_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>何润东</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_周渝民_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>周渝民</a></li>
<?php }?>
<?php if($cs2==12||$cs2=="韩国"){?>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_宋慧乔_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>宋慧乔</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_尹恩惠_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>尹恩惠</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_李多海_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>李多海</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_宋承宪_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>宋承宪</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_玄彬_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>玄彬</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_张赫_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>张赫</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_金基范_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>金基范</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_文根英_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>文根英</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_张根硕_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>张根硕</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_权相宇_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>权相宇</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_朴信惠_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>朴信惠</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_朴施厚_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>朴施厚</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_张娜拉_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>张娜拉</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_张东健_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>张东健</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_朴有天_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>朴有天</a></li>
<?php }?>
<?php if($cs2==14||$cs2=="泰国"){?>
 <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_杰西达邦_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>杰西达邦</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_马里奥毛瑞尔_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>马里奥毛瑞尔</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_Pong_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>Pong</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_查克利·彦纳姆_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>查克利·彦纳姆</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_素格力·威塞哥_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>素格力·威塞哥</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_卡曼妮·耶美肯_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>卡曼妮·耶美肯</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_拼塔安_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>拼塔安</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_Ken_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>Ken</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_Aum_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>Aum</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_Weir_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>Weir</a></li>
<?php }?>
<?php if($cs2==15||$cs2=="日本"){?>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_堀北真希_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>堀北真希</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_反町隆史_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>反町隆史</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_江口洋介_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>江口洋介</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_广末凉子_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>广末凉子</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_小栗旬_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>小栗旬</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_木村拓哉_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>木村拓哉</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_户田惠梨香_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>户田惠梨香</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_松田翔太_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>松田翔太</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_常盘贵子_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>常盘贵子</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_织田裕二_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>织田裕二</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_竹内结子_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>竹内结子</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_妻夫木聪_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>妻夫木聪</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_福山雅治_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>福山雅治</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_中山裕介_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>中山裕介</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_观月亚理莎_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>观月亚理莎</a></li>
<?php }?>
<?php if($cs2==13||$cs2=="美国"){?>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_妮娜·杜波夫_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>妮娜·杜波夫_</a></li>
 <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_安德鲁·林肯_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>安德鲁·林肯_</a></li>
 <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_吉姆·帕森斯_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>吉姆·帕森斯_</a></li>
 <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_布莱克·莱弗利_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>布莱克·莱弗利_</a></li>
 <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_艾伦·旁派_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>艾伦·旁派_</a></li>
 <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_詹妮弗·安妮斯顿_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>詹妮弗·安妮斯顿_</a></li>
 <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_艾米丽·万凯普_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>艾米丽·万凯普_</a></li>
 <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_泰瑞·海切尔_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>泰瑞·海切尔_</a></li>
 <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_托马斯·吉布森_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>托马斯·吉布森_</a></li>
 <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_贾德·帕达里克_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>贾德·帕达里克_</a></li>
 <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_内森·菲利安_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>内森·菲利安_</a></li>
 <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_詹妮弗·莫里森_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>詹妮弗·莫里森_</a></li>
<?php }?>
<?php if($cs2==17||$cs2=="英国"){?>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_本尼迪克特·康伯巴奇_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>本尼迪克特·康伯巴奇</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_克里斯·奥多德_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>克里斯·奥多德</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_比莉·派佩_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>比莉·派佩</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_道格拉斯·韩歇尔_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>道格拉斯·韩歇尔</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_鲁伯特·彭利·琼斯_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>鲁伯特·彭利·琼斯</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_伯恩·乔曼_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>伯恩·乔曼</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_休·博内威利_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>休·博内威利</a></li>
<li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_大卫·苏切特_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>大卫·苏切特</a></li>
<?php }?>
<?php if($cs2==18||$cs2=="新加坡"){?>
 <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_李南星_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>李南星</a></li>
  <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_范文芳_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>范文芳</a></li>
  <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_郑斌辉_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>郑斌辉</a></li>
  <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_彭耀顺_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>彭耀顺</a></li>
  <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_林湘萍_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>林湘萍</a></li>
  <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_郭妃丽_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>郭妃丽</a></li>
  <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_李铭顺_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>李铭顺</a></li>
  <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_欧萱_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>欧萱</a></li>
  <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_郭淑贤_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>郭淑贤</a></li>
  <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_周初明_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>周初明</a></li>
  <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_郑惠玉_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>郑惠玉</a></li>
  <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_陈莉萍_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>陈莉萍</a></li>
  <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_许美珍_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>许美珍</a></li>
  <li><a href='tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_曹国辉_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>曹国辉</a></li>
<?php }?>
</ul><!-- end 筛选 -->
			</div>
			<div class="stui-pannel_hd">
				<div class="stui-pannel__head active bottom-line clearfix">
					<span class="more text-muted pull-right hidden-xs">千万部VIP视频免费等你观看</span>
					<ul class="nav nav-head">
					<li <?php if ($cs4=="rankhot"){echo 'class="active"';}elseif($cs4=="rankpoint"){}else{ echo 'class="active"';};?>><a href="tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_rankhot_<?php echo $cs5 ?>.html">最近热映</a></li>
<li <?php if ($cs4=="rankpoint"){echo 'class="active"';}else{};?>><a href="tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_rankpoint_<?php echo $cs5 ?>.html">最受好评</a></li></ul>
				</div>
			</div>
			<div class="stui-pannel_bd">
				<ul class="stui-vodlist clearfix">
				<?php
					foreach ($xname as $key=>$xvau){$ccb=vod.$xlist[$key];
					if ($i<28){
						echo "<li class='col-md-7 col-sm-4 col-xs-3 ";
						if ($i>=27){echo "hidden-xs";}
						echo "'><div class='stui-vodlist__box'> <a class='stui-vodlist__thumb lazyload' href='".$ccb."' title='".$xvau."' data-original='".$ximg[$key]."'><span class='play hidden-xs'></span>";
						if (!empty($xfufei[$key])) {echo "<span class='pic-tag pic-tag-h'>HOT</span>";}
						echo "<span class='pic-tag pic-tag-b'>".$xjishu[$key]."</span></a><div class='stui-vodlist__detail'><h4 class='title text-overflow'><a href='".$ccb."' title='".$xvau."'>".$xvau."</a></h4><p class='text text-overflow text-muted hidden-xs'>".$xstar[$key]."</p></div></div></li>";
						$i ++;
						}} ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<ul class="stui-page text-center cleafix">
<?php include('system/fenye.php');?>
</ul>
<?php  include 'footer.php';?>