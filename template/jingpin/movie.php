<?php  include 'head.php';$movie='active';
$leixing="dianying";
require 'system/360.php';
$cs0=$_GET['cat'];//类型
$cs1=$_GET['year'];//年份
$cs2=$_GET['area'];//地区
$cs3=$_GET['act'];//主演
$cs4=$_GET['rank'];//火热
if($cs4=='')$cs4='rankhot';
$cs5=intval($_GET['pageno']);//页数
if($cs5==''){$cs5=1;}
if($cs3=='all'||$cs3==''){$ac1='';}else{$ac1='-'.$_GET['act'];}
if($cs1=='all'||$cs1==''){$yea1='';}else{$yea1='-'.$_GET['year'].'年';}
$getarea1 = isset($_GET['area']) ? $_GET['area'] : '';
switch($getarea1){
case '11':
$are1 = "-美国";
break;
case '10':
$are1 = "-大陆";
break;
case '15':
$are1 = "-香港";
break;
case '13':
$are1 = "-韩国";
break;
case '14':
$are1 = "-日本";
break;
case '12':
$are1 = "-法国";
break;
case '16':
$are1 = "-英国";
break;
case '17':
$are1 = "-德国";
break;
case '18':
$are1 = "-台湾";
break;
case '21':
$are1 = "-泰国";
break;
case '22':
$are1 = "-印度";}
$getcat1 = isset($_GET['cat']) ? $_GET['cat'] : '';
switch($getcat1){
	case '103':
	$type1 = "-喜剧片";
	break;
	case '100':
	$type1 = "-爱情片";
	break;
	case '106':
	$type1 = "-动作片";
	break;
	case '102':
	$type1 = "-恐怖片";
	break;
	case '104':
	$type1 = "-科幻片";
	break;
	case '112':
	$type1 = "-剧情片";
	break;
	case '105':
	$type1 = "-犯罪片";
	break;
	case '113':
	$type1 = "-奇幻片";
	break;
	case '108':
	$type1 = "-战争片";
	break;
	case '115':
	$type1 = "-悬疑片";
	break;
	case '107':
	$type1 = "-动画片";
	break;
	case '117':
	$type1 = "-文艺片";
	break;
	case '118':
	$type1 = "-纪录片";
	break;
	case '119':
	$type1 = "-传记片";
	break;
	case '120':
	$type1 = "-歌舞片";
	break;
	case '121':
	$type1 = "-古装片";
	break;
	case '122':
	$type1 = "-历史片";
	break;
	case '123':
	$type1 = "-惊悚片";}
?>
<title>看电影<?php echo $yea1.$are1.$ac1.$type1;?>-最新最好看的电影推荐-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="看电影,<?php echo $mkcms_keywords;?>">
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
<?php echo $mkcms_ad11; ?>
		<div class="stui-pannel stui-pannel-bg clearfix">
			<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>电影</h3></div>
</div>
<!-- 筛选 -->
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul1">
<li><span class="text-muted">按类型</span></li>
<li><a href='movie_all_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>全部</a></li>
<li><a href='movie_103_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>喜剧</a></li>
<li><a href='movie_100_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>爱情</a></li>
<li><a href='movie_106_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>动作</a></li>
<li><a href='movie_102_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>恐怖</a></li>
<li><a href='movie_104_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>科幻</a></li>
<li><a href='movie_112_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>剧情</a></li>
<li><a href='movie_105_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>犯罪</a></li>
<li><a href='movie_113_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>奇幻</a></li>
<li><a href='movie_108_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>战争</a></li>
<li><a href='movie_115_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>悬疑</a></li>
<li><a href='movie_107_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>动画</a></li>
<li><a href='movie_117_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>文艺</a></li>
<li><a href='movie_118_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>纪录</a></li>
<li><a href='movie_119_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>传记</a></li>
<li><a href='movie_120_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>歌舞</a></li>
<li><a href='movie_121_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>古装</a></li>
<li><a href='movie_122_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>历史</a></li>
<li><a href='movie_123_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>惊悚</a></li>
<li><a href='movie_other_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>其他</a></li>
</ul>
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul2">
<li><span class="text-muted">按地区</span></li>
<li><a href="movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_all_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html">全部</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_11_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>美国</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_10_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>大陆</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_15_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>香港</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_13_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>韩国</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_14_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>日本</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_12_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>法国</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_16_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>英国</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_17_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>德国</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_18_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>台湾</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_21_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>泰国</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_22_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>印度</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_other_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>其他</a></li>
</ul>
<ul class="stui-screen__list type-slide clearfix up-ul3">
<li><span class="text-muted">按年份</span></li>
<li><a href="movie_<?php echo $cs0 ?>_all_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html">全部</a></li>
<li><a href='movie_<?php echo $cs0 ?>_2020_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2020</a></li>
<li><a href='movie_<?php echo $cs0 ?>_2019_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2019</a></li>
<li><a href='movie_<?php echo $cs0 ?>_2018_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2018</a></li>
<li><a href='movie_<?php echo $cs0 ?>_2017_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2017</a></li>
<li><a href='movie_<?php echo $cs0 ?>_2016_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2016</a></li>
<li><a href='movie_<?php echo $cs0 ?>_2015_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2015</a></li>
<li><a href='movie_<?php echo $cs0 ?>_2014_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2014</a></li>
<li><a href='movie_<?php echo $cs0 ?>_2013_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2013</a></li>
<li><a href='movie_<?php echo $cs0 ?>_2012_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2012</a></li>
<li><a href='movie_<?php echo $cs0 ?>_2011_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2011</a></li>
<li><a href='movie_<?php echo $cs0 ?>_2010_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2010</a></li>
<li><a href='movie_<?php echo $cs0 ?>_2009_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2009</a></li>
<li><a href='movie_<?php echo $cs0 ?>_2008_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2008</a></li>
<li><a href='movie_<?php echo $cs0 ?>_2007_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>2007</a></li>
<li><a href='movie_<?php echo $cs0 ?>_other_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>更早</a></li>
</ul>
<ul class="stui-screen__list type-slide clearfix up-ul4">
<li><span class="text-muted">按明星</span></li>
<li><a href="movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_all_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html">全部</a></li>
<?php if($cs2=="all"||$cs2==""){?>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_成龙_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>成龙</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_周星驰_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>周星驰</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_李连杰_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>李连杰</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_林正英_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>林正英</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_吴京_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>吴京</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_徐峥_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>徐峥</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_黄渤_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>黄渤</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_王宝强_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>王宝强</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_李小龙_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>李小龙</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_张国荣_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>张国荣</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_洪金宝_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>洪金宝</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_姜文_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>姜文</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_沈腾_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>沈腾</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_邓超_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>邓超</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_巩俐_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>巩俐</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_马丽_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>马丽</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_周冬雨_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>周冬雨</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_闫妮_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>闫妮</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_刘昊然_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>刘昊然</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_汤唯_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>汤唯</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_舒淇_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>舒淇</a></li>
<?php }?>
<?php if($cs2=="other"||$cs2=="其他"){?>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_黄渤_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>黄渤</a></li><li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_孙红雷_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>孙红雷</a></li><li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_郑伊健_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>郑伊健</a></li><li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_吴君如_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>吴君如</a></li>
<?php }?>
<?php if($cs2==22||$cs2=="印度"){?>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_阿米尔·汗_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>阿米尔·汗</a></li><li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_伊尔凡·可汗_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>伊尔凡·可汗</a></li><li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_艾西瓦娅·雷_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>艾西瓦娅·雷</a></li><li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_桑杰·达特_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>桑杰·达特</a></li><li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_迪皮卡·帕度柯妮_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>迪皮卡·帕度柯妮</a></li><li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_阿贾耶·德乌干_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>阿贾耶·德乌干</a></li><li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_阿克谢·库玛尔_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>阿克谢·库玛尔</a></li><li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_拉妮·玛克赫吉_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>拉妮·玛克赫吉</a></li><li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_赛义夫·阿里·汗_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>赛义夫·阿里·汗</a></li>
<?php }?>
<?php if($cs2==21||$cs2=="泰国"){?>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_马里奥·毛瑞尔_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>马里奥·毛瑞尔</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_赖拉·邦雅淑_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>赖拉·邦雅淑</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_托尼·贾_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>托尼·贾</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_苏达拉·布查蓬_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>苏达拉·布查蓬</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_阿南达·爱华灵咸_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>阿南达·爱华灵咸</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_阿部宽_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>阿部宽</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_Jirayu La·ongmanee_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>Jirayu La·ongmanee</a></li>
<?php }?>
<?php if($cs2==18||$cs2=="台湾"){?>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_林志玲_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>林志玲</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_陈柏霖_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>陈柏霖</a></li><li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_彭于晏_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>彭于晏</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_陈妍希_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>陈妍希</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_柯震东_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>柯震东</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_桂纶镁_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>桂纶镁</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_张震_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>张震</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_徐若瑄_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>徐若瑄</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_徐熙媛_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>徐熙媛</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_林依晨_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>林依晨</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_蓝正龙_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>蓝正龙</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_范逸臣_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>范逸臣</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_张孝全_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>张孝全</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_吴奇隆_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>吴奇隆</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_阮经天_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>阮经天</a></li>
<?php }?>
<?php if($cs2==16||$cs2=="英国"){?>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_莫里兹·布雷多_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>莫里兹·布雷多</a></li>
<?php }?>
<?php if($cs2==17||$cs2=="英国"){?>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_奥兰多·布鲁姆_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>奥兰多·布鲁姆</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_凯拉·奈特利_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>凯拉·奈特利</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_肖恩·康纳利_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>肖恩·康纳利</a></li>
<?php }?>
<?php if($cs2==12||$cs2=="法国"){?>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_让·雷诺_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>让·雷诺</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_苏菲·玛索_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>苏菲·玛索</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_阿兰·德龙_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>阿兰·德龙</a></li>
<?php }?>
<?php if($cs2==14||$cs2=="日本"){?>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_木村拓哉_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>木村拓哉</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_新垣结衣_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>新垣结衣</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_小栗旬_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>小栗旬</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_北川景子_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>北川景子</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_堀北真希_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>堀北真希</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_竹内结子_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>竹内结子</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_深田恭子_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>深田恭子</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_柏原崇_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>柏原崇</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_绫濑遥_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>绫濑遥</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_小田切让_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>小田切让</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_松山健一_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>松山健一</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_广末凉子_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>广末凉子</a></li>
<?php }?>
<?php if($cs2==13||$cs2=="韩国"){?>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_韩艺瑟_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'></a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_张东健_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>张东健</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_张真英_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>张真英</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_李成宰_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>李成宰</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_全度妍_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>全度妍</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_车太贤_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>车太贤</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_河智苑_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>河智苑</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_李秉宪_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>李秉宪</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_孙艺珍_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>孙艺珍</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_裴勇俊_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>裴勇俊</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_金荷娜_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>金荷娜</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_姜东元_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>姜东元</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_全智贤_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>全智贤</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_申贤俊_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>申贤俊</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_崔胜贤_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>崔胜贤</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_元彬_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>元彬</a></li>
<?php }?>
<?php if($cs2==15||$cs2=="香港"){?>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_刘德华_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>刘德华</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_郭富城_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>郭富城</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_张国荣_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>张国荣</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_周星驰_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>周星驰</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_舒淇_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>舒淇</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_周润发_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>周润发</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_杨紫琼_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>杨紫琼</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_甄子丹_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>甄子丹</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_张曼玉_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>张曼玉</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_梁朝伟_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>梁朝伟</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_梅艳芳_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>梅艳芳</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_刘青云_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>刘青云</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_成龙_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>成龙</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_黄百鸣_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>黄百鸣</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_古天乐_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>古天乐</a></li>
<?php }?>
<?php if($cs2==10||$cs2=="大陆"){?>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_文章_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>文章</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_汤唯_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>汤唯</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_黄渤_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>黄渤</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_徐铮_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>徐铮</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_王宝强_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>王宝强</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_范冰冰_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>范冰冰</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_姜文_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>姜文</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_葛优_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>葛优</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_章子怡_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>章子怡</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_白百合_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>白百合</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_赵薇_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>赵薇</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_周迅_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>周迅</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_陈坤_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>陈坤</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_吴秀波_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>吴秀波</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_刘烨_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>刘烨</a></li>
<?php }?>
<?php if($cs2==11||$cs2=="美国"){?>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_安妮·海瑟薇_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>安妮·海瑟薇</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_斯嘉丽·约翰逊_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>斯嘉丽·约翰逊</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_约翰尼·德普_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>约翰尼·德普</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_小罗伯特·唐尼_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>小罗伯特·唐尼</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_汤姆·克鲁斯_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>汤姆·克鲁斯</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_莱昂纳多·迪卡普里奥_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>莱昂纳多·迪卡普里奥</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_尼古拉斯·凯奇_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>尼古拉斯·凯奇</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_安吉丽娜·朱莉_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>安吉丽娜·朱莉</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_威尔·史密斯_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>威尔·史密斯</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_布鲁斯·威利斯_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>布鲁斯·威利斯</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_西尔维斯特·史泰龙_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>西尔维斯特·史泰龙</a></li>
<li><a href='movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_约瑟夫·高登-莱维特_<?php echo $cs4 ?>_<?php echo $cs5 ?>.html'>约瑟夫·高登-莱维特</a></li>
<?php }?>
</ul>
<!-- end 筛选 -->
			</div>
			<div class="stui-pannel_hd">
				<div class="stui-pannel__head active bottom-line clearfix">
				<span class="more text-muted pull-right hidden-xs">千万部VIP视频免费等你观看</span>
					<ul class="nav nav-head">
					<li<?php if ($cs4=="rankhot"){echo ' class="active"';}?>><a href="movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_rankhot_<?php echo $cs5 ?>.html">按最热</a></li>
					<li<?php if ($cs4=="createtime"){echo ' class="active"';}else{};?>><a href="movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_createtime_<?php echo $cs5 ?>.html">按最新</a></li>
					<li<?php if ($cs4=="rankpoint"){echo ' class="active"';}?>><a href="movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_rankpoint_<?php echo $cs5 ?>.html">按好评</a></li>
					</ul>
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
						if (!empty($xfufei[$key])) {echo "<span class='pic-tag pic-tag-h'>".$lname[$key]."</span>";}
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