<?php include 'head.php';$mv='active';?>
<title>优酷MV-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="搞笑视频,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
</head>
<body>
<?php include 'header.php';?>
<div class="container">
	<div class="row">
<?php echo $mkcms_ad19; ?>
		<div class="stui-pannel stui-pannel-bg clearfix">
			<div class="stui-pannel-box">
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head active bottom-line clearfix">
					<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>优酷MV</h3></div>
				</div><!-- 筛选 -->
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul2">
<li><span class="text-muted">按类型</span></li>
<li><a href="./mv.html" >优酷MV</a></li>
<li><a href="./meipai.php" >美拍视频</a></li>
<li><a href="./live.php" >网络直播</a></li>
</ul>
				<ul class="stui-screen__list type-slide clearfix up-ul1">
				<li><span class="text-muted">按类型</span> </li>
				<li><a href="./mv_c_95_s_6_p_1.html" >全部</a></li>
				<li><a href="./mv_c_95_mt_舞蹈_s_6_p_1.html" >舞蹈</a></li>
				<li><a href="./mv_c_95_mt_音乐MV_s_6_p_1.html">音乐MV</a></li>
				<li><a href="./mv_c_95_mt_现场版_s_6_p_1.html">现场版</a></li>
				<li><a href="./mv_c_95_mt_电影原声_s_6_p_1.html">电影原声</a></li>
				<li><a href="./mv_c_95_mt_动漫音乐_s_6_p_1.html">动漫音乐</a></li>
				<li><a href="./mv_c_95_mt_游戏音乐_s_6_p_1.html">游戏音乐</a></li>
				<li><a href="./mv_c_95_mt_广告音乐_s_6_p_1.html">广告音乐</a></li>
				</ul><!-- end 筛选 -->
			</div>
			<div class="stui-pannel_bd">
				<ul class="stui-vodlist clearfix">
<?php
if (empty($_GET['m'])) {
	$html = "http://list.youku.com/category/show/c_95_s_6_p_1.html";
} else {
	$html = "http://list.youku.com/category/show/" . $_GET["m"];
}
$rurl = fileget($html,5);
$vname = '#<div class="yk-col4 "><div class="yk-pack p-list" taglog=""><div class="p-thumb"><a href="(.*?)" target="_blank" title="(.*?)"></a><i class="bg"></i><img class="quic" src="(.*?)" alt="(.*?)" /></div><ul class="p-info pos-bottom"><li class="status"><span class="p-time hover-hide"><i class="ibg"></i><span>(.*?)</span></span></li></ul><ul class="info-list"><li class="title"><a href="(.*?)" target="_blank" title="(.*?)">(.*?)</a></li>#';
preg_match_all($vname, $rurl, $xarr);
$xbflist = $xarr[1];
$xname = $xarr[2];
$ximg = $xarr[3];
$shijian = $xarr[5];
foreach ($xname as $key => $xvau) {
$ccb = "./mvplay/".base64_encode($xbflist[$key]).".html";
?>
				<li class='col-md-6 col-sm-4 col-xs-3'>
				<div class='stui-vodlist__box'>
				<a class='stui-vodlist__thumb1 lazyload' href='<?php echo $ccb;?>' title='<?php echo $xname[$key];?>' data-original='<?php echo $ximg[$key];?>'>
				<span class='play hidden-xs'></span>
				<span class='pic-text text-right'>时长：<?php echo $shijian[$key];?></span></a>
				<div class='stui-vodlist__detail'>
				<h4 class='title text-overflow'><a href='<?php echo $ccb;?>' title='<?php echo $xname[$key];?>' title='<?php echo $xname[$key];?>'><?php echo $xname[$key];?></a></h4>
				</div>
				</div>
				</li><?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<ul class="stui-page text-center cleafix">
<?php
$response = fileget($html,5);
$response = strstr($response, "<div class=\"yk-pager\">");
$response = strstr($response, "<div class=\"vault-banner", true);
$response = str_replace("<div class=\"yk-pager\">", "", $response);
$response = str_replace("</div>", "", $response);
$response = str_replace("<span>", "<a>", $response);
$response = str_replace("<ul class=\"yk-pages\">", "<div monitor-desc='分页' id='js-ew-page' data-block='js-ew-page'  class='ew-page'>", $response);
$response = str_replace("</ul>", "</div>", $response);
$response = str_replace("<span class=\"current\">", "<a class=\"on\">", $response);
$response = str_replace("<li class=\"current\">", "<li class=\"active\">", $response);
$response = str_replace("</span>", "</a>", $response);
$response = str_replace("//list.youku.com/category/show/", "mv_", $response);
$response = str_replace("<a class=\"next\" title=\"下一页\">", "", $response);
$response = str_replace("上一页", "<", $response);
$response = str_replace("下一页", ">", $response);
echo $response;
?></ul>
<?php  include 'footer.php';?>