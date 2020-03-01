<?php
include 'head.php';
$zy='active';
$leixing="zongyi";
require 'system/360.php';
$cs0=$_GET['cat'];//类型
$cs1=$_GET['act'];//主演
$cs2=$_GET['area'];//地区
$cs3=$_GET['rank'];//火热
if($cs3=='')$cs3='rankhot';
$cs4=intval($_GET['pageno']);//页数
if($cs4=='')$cs4=1;
if($cs1=='all'||$cs1==''){$ac4='';}else{$ac4='-'.$_GET['act'];}
$getcat4 = isset($_GET['cat']) ? $_GET['cat'] : '';
switch($getcat4){
case '121':
$type4 = "-脱口秀";
break;
case '120':
$type4 = "-真人秀";
break;
case '101':
$type4 = "-选秀";
break;
case '102':
$type4 = "-八卦";
break;
case '103':
$type4 = "-访谈";
break;
case '104':
$type4 = "-情感";
break;
case '105':
$type4 = "-生活";
break;
case '106':
$type4 = "-晚会";
break;
case '107':
$type4 = "-搞笑";
break;
case '108':
$type4 = "-音乐";
break;
case '109':
$type4 = "-时尚";
break;
case '110':
$type4 = "-游戏";
break;
case '111':
$type4 = "-少儿";
break;
case '112':
$type4 = "-体育";
break;
case '113':
$type4 = "-纪实";
break;
case '114':
$type4 = "-科教";
break;
case '115':
$type4 = "-曲艺";
break;
case '116':
$type4 = "-歌舞";
break;
case '117':
$type4 = "-财经";
break;
case '118':
$type4 = "-汽车";
break;
case '119':
$f = "-播报";
}
$getarea4 = isset($_GET['area']) ? $_GET['area'] : '';
switch($getarea4){
case '10':
$are4 = "-大陆";
break;
case '11':
$are4 = "-台湾";
break;
case '12':
$are4 = "-韩国";
break;
case '13':
$are4 = "-日本";
break;
case '14':
$are4 = "-欧美";
break;
case '15':
$are4 = "-香港";
}
?>
<title>追综艺<?php echo $are4.$ac4.$type4;?>-最新好看综艺排行-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="追综艺,最新综艺,好看综艺,最新综艺排行,<?php echo $mkcms_keywords;?>">
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
		<?php echo $mkcms_ad14; ?>
		<div class="stui-pannel stui-pannel-bg clearfix">
			<div class="stui-pannel-box">
			<div class="stui-pannel_hd">
			<div class="stui-pannel__head active bottom-line clearfix">
			<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>综艺</h3>
			</div>
			</div>
			<!-- 筛选 --> 
			<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul1">  
				<li><span class="text-muted">按类型</span></li>
<li><a href="zongyi_all_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html">全部</a></li>
<li><a href='zongyi_121_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>脱口秀</a></li>
<li><a href='zongyi_120_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>真人秀</a></li>
<li><a href='zongyi_101_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>选秀</a></li>
<li><a href='zongyi_102_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>八卦</a></li>
<li><a href='zongyi_103_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>访谈</a></li>
<li><a href='zongyi_104_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>情感</a></li>
<li><a href='zongyi_105_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>生活</a></li>
<li><a href='zongyi_106_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>晚会</a></li>
<li><a href='zongyi_107_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>搞笑</a></li>
<li><a href='zongyi_108_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>音乐</a></li>
<li><a href='zongyi_109_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>时尚</a></li>
<li><a href='zongyi_110_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>游戏</a></li>
<li><a href='zongyi_111_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>少儿</a></li>
<li><a href='zongyi_112_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>体育</a></li>
<li><a href='zongyi_113_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>纪实</a></li>
<li><a href='zongyi_114_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>科教</a></li>
<li><a href='zongyi_115_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>曲艺</a></li>
<li><a href='zongyi_116_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>歌舞</a></li>
<li><a href='zongyi_117_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>财经</a></li>
<li><a href='zongyi_118_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>汽车</a></li>
<li><a href='zongyi_119_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>播报</a></li>
<li><a href='zongyi_other_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>其他</a></li>
</ul>
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul3"> 
<li><span class="text-muted">按地区</span></li>
<li><a href="zongyi_<?php echo $cs0 ?>_<?php echo $cs1 ?>_all_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html">全部</a></li></li>
<li><a href='zongyi_<?php echo $cs0 ?>_<?php echo $cs1 ?>_10_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>大陆</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_<?php echo $cs1 ?>_11_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>台湾</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_<?php echo $cs1 ?>_12_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>韩国</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_<?php echo $cs1 ?>_13_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>日本</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_<?php echo $cs1 ?>_14_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>欧美</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_<?php echo $cs1 ?>_15_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>香港</a></li>
</ul>
<ul class="stui-screen__list type-slide clearfix up-ul2">  
<li><span class="text-muted">按明星</span></li>
<li><a href="zongyi_<?php echo $cs0 ?>_all_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html">全部</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_邓超_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>邓超</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_陈赫_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>陈赫</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_何炅_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>何炅</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_汪涵_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>汪涵</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_王俊凯_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>王俊凯</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_黄磊_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>黄磊</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_谢娜_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>谢娜</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_黄渤_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>黄渤</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_周杰伦_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>周杰伦</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_吴亦凡_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>吴亦凡</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_赵薇_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>赵薇</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_薛之谦_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>薛之谦</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_岳云鹏_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>岳云鹏</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_王嘉尔_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>王嘉尔</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_鹿晗_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>鹿晗</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_杨幂_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>杨幂</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_沈腾_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>沈腾</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_罗志祥_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>罗志祥</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_张艺兴_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>张艺兴</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_潘玮柏_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>潘玮柏</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_华晨宇_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>华晨宇</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_李维嘉_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>李维嘉</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_钱枫_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>钱枫</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_宋小宝_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>宋小宝</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_贾玲_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>贾玲</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_沙溢_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>沙溢</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_涂磊_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>涂磊</a></li>
<li><a href='zongyi_<?php echo $cs0 ?>_撒贝宁_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>撒贝宁</a></li>
</ul><!-- end 筛选 -->
			</div>
			<div class="stui-pannel_hd">
				<div class="stui-pannel__head active bottom-line clearfix">
					<span class="more text-muted pull-right hidden-xs">千万部VIP视频免费等你观看</span>
					<ul class="nav nav-head">
					<li <?php if ($cs3=="rankhot"){echo 'class="active"';}elseif($cs3=="createtime"){}else{ echo 'class="active"';};?>><a href="zongyi_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_rankhot_<?php echo $cs4 ?>.html">最近热映</a></li>
					<li <?php if ($cs3=="createtime"){echo 'class="active"';}else{};?>><a href="zongyi_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_createtime_<?php echo $cs4 ?>.html">最新上映</a></li>
					</ul>
				</div>
			</div>
			<div class="stui-pannel_bd">
				<ul class="stui-vodlist clearfix">
				<?php
					foreach ($xname as $key=>$xvau){
					$ccb=vod.$xlist[$key];
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