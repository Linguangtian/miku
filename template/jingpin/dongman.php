<?php
include 'head.php';
$dm='active';
$leixing="dongman";
require 'system/360.php';
$cs0=$_GET['cat'];//类型
$cs1=$_GET['year'];//年份
$cs2=$_GET['area'];//地区
$cs3=$_GET['rank'];//火热
if($cs3=='')$cs3='rankhot';
$cs4=intval($_GET['pageno']);//页数
if($cs4==''){$cs4=1;}
if($cs1=='all'||$cs1==''){$yea3='';}else{$yea3='-'.$_GET['year'].'年';}
$getcat3 = isset($_GET['cat']) ? $_GET['cat'] : '';
switch($getcat3){
case '100':
$type3 = "-热血";
break;
case '101':
$type3 = "-恋爱";
break;
case '102':
$type3 = "-美少女";
break;
case '103':
$type3 = "-运动";
break;
case '104':
$type3 = "-校园";
break;
case '105':
$type3 = "-搞笑";
break;
case '106':
$type3 = "-幻想";
break;
case '107':
$type3 = "-冒险";
break;
case '108':
$type3 = "-悬疑";
break;
case '109':
$type3 = "-魔幻";
break;
case '110':
$type3 = "-动物";
break;
case '111':
$type3 = "-少儿";
break;
case '131':
$type3 = "-亲子";
break;
case '112':
$type3 = "-机战";
break;
case '113':
$type3 = "-怪物";
break;
case '114':
$type3 = "-益智";
break;
case '115':
$type3 = "-战争";
break;
case '116':
$type3 = "-社会";
break;
case '117':
$type3 = "-友情";
break;
case '118':
$type3 = "-成人";
break;
case '119':
$type3 = "-竞技";
break;
case '120':
$type3 = "-耽美";
break;
case '121':
$type3 = "-童话";
break;
case '122':
$type3 = "-LOLI";
break;
case '123':
$type3 = "-青春";
break;
case '124':
$type3 = "-男性向";
break;
case '125':
$type3 = "-女性向";
break;
case '126':
$type3 = "-动作";
break;
case '127':
$type3 = "-真人版";
break;
case '128':
$type3 = "-OVA版";
break;
case '129':
$type3 = "-TV版";
break;
case '130':
$type3 = "-电影版";
break;
case '132':
$type3 = "-新番动画";
break;
case '133':
$type3 = "-完结动画";}
$getarea3 = isset($_GET['area']) ? $_GET['area'] : '';
switch($getarea3){
case '11':
$are3 = "-日本";
break;
case '12':
$are3 = "-美国";
break;
case '10':
$are3 = "-大陆";
}
?>
<title>追动漫<?php echo $yea3.$are3.$type3;?>-最新最好看的动漫-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="动漫排行,日本动漫,新番动漫,国产动漫,<?php echo $mkcms_keywords;?>">
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
<?php include 'header.php'; ?>
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
<?php echo $mkcms_ad13; ?>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>动漫频道</h3></div>
</div>
<!-- start 筛选 -->
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul1">  
<li><span class="text-muted">按类型</span></li>
<li><a href="dongman_all_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html" >全部</a></li></li>
<li><a href='dongman_100_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>热血</a></li>
<li><a href='dongman_101_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>恋爱</a></li>
<li><a href='dongman_102_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>美少女</a></li>
<li><a href='dongman_103_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>运动</a></li>
<li><a href='dongman_104_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>校园</a></li>
<li><a href='dongman_105_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>搞笑</a></li>
<li><a href='dongman_106_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>幻想</a></li>
<li><a href='dongman_107_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>冒险</a></li>
<li><a href='dongman_108_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>悬疑</a></li>
<li><a href='dongman_109_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>魔幻</a></li>
<li><a href='dongman_110_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>动物</a></li>
<li><a href='dongman_111_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>少儿</a></li>
<li><a href='dongman_131_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>亲子</a></li>
<li><a href='dongman_112_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>机战</a></li>
<li><a href='dongman_113_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>怪物</a></li>
<li><a href='dongman_114_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>益智</a></li>
<li><a href='dongman_115_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>战争</a></li>
<li><a href='dongman_116_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>社会</a></li>
<li><a href='dongman_117_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>友情</a></li>
<li><a href='dongman_118_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>成人</a></li>
<li><a href='dongman_119_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>竞技</a></li>
<li><a href='dongman_120_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>耽美</a></li>
<li><a href='dongman_121_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>童话</a></li>
<li><a href='dongman_122_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>LOLI</a></li>
<li><a href='dongman_123_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>青春</a></li>
<li><a href='dongman_124_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>男性向</a></li>
<li><a href='dongman_125_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>女性向</a></li>
<li><a href='dongman_126_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>动作</a></li>
<li><a href='dongman_127_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>真人版</a></li>
<li><a href='dongman_128_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>OVA版</a></li>
<li><a href='dongman_129_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>TV版</a></li>
<li><a href='dongman_130_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>电影版</a></li>
<li><a href='dongman_132_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>新番动画</a></li>
<li><a href='dongman_133_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>完结动画</a></li>
</ul>  
<ul class="stui-screen__list type-slide clearfix up-ul2">  
<li><span class="text-muted">按年份</span></li>
<li><a href="dongman_<?php echo $cs0 ?>_all_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html">全部</a></li>
<li><a href='dongman_<?php echo $cs0 ?>_2019_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2019</a></li>
<li><a href='dongman_<?php echo $cs0 ?>_2018_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2018</a></li>
<li><a href='dongman_<?php echo $cs0 ?>_2017_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2017</a></li>
<li><a href='dongman_<?php echo $cs0 ?>_2016_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2016</a></li>
<li><a href='dongman_<?php echo $cs0 ?>_2015_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2015</a></li>
<li><a href='dongman_<?php echo $cs0 ?>_2014_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2014</a></li>
<li><a href='dongman_<?php echo $cs0 ?>_2013_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2013</a></li>
<li><a href='dongman_<?php echo $cs0 ?>_2012_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2012</a></li>
<li><a href='dongman_<?php echo $cs0 ?>_2011_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2011</a></li>
<li><a href='dongman_<?php echo $cs0 ?>_2010_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2010</a></li>
<li><a href='dongman_<?php echo $cs0 ?>_2009_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2009</a></li>
<li><a href='dongman_<?php echo $cs0 ?>_2008_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2008</a></li>
<li><a href='dongman_<?php echo $cs0 ?>_2007_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2007</a></li>
<li><a href='dongman_<?php echo $cs0 ?>_other_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>更早</a></li>
</ul>
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul3">  
<li><span class="text-muted">按地区</span></li>
<li><a href="dongman_<?php echo $cs0 ?>_<?php echo $cs1 ?>_all_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html">全部</a></li>
<li><a href='dongman_<?php echo $cs0 ?>_<?php echo $cs1 ?>_11_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>日本</a></li>
<li><a href='dongman_<?php echo $cs0 ?>_<?php echo $cs1 ?>_12_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>美国</a></li>
<li><a href='dongman_<?php echo $cs0 ?>_<?php echo $cs1 ?>_10_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>大陆</a></li>
</ul>
<!-- end 筛选 -->
</div>
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
				<span class="more text-muted pull-right hidden-xs">千万部VIP视频免费等你观看</span>
				<ul class="nav nav-head">
<li <?php if ($cs3=="rankhot"){echo 'class="active"';}elseif($cs3=="createtime"){}else{ echo 'class="active"';};?>><a href="dongman_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_rankhot_<?php echo $cs4 ?>.html">最近热映</a></li>
<li <?php if ($cs3=="createtime"){echo 'class="active"';}else{};?>><a href="dongman_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_createtime_<?php echo $cs4 ?>.html">最新上映</a></li>
				</ul>
</div>
</div>
<div class="stui-pannel_bd">
<ul class="stui-vodlist clearfix">
				<?php
					foreach ($xname as $key=>$xvau){ $do=$xlist[$key];
					if ($i<28){
						$ccb=vod.$do;
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