<?php include 'head.php';$yl='active';?>
<title>综合视频-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="娱乐,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
</head>
<body>
<?php include 'header.php';?>
<div class="container">
	<div class="row">
		<?php echo $mkcms_ad16; ?>
		<div class="stui-pannel stui-pannel-bg clearfix">
			<div class="stui-pannel-box">
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head active bottom-line clearfix">
					<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>综合视频</h3>
					</div>
				</div><!-- 筛选 -->
				<ul class="stui-screen__list type-slide clearfix up-ul1">
				<li><span class="text-muted">按类型</span> </li>
				<li><a href="./yule_c_86_s_1_d_1_p_1.html" >全部</a></li>
				<li><a href="./yule_c_86_s_6_d_1_p_2.html">娱乐</a></li>
				<li><a href="./yule_c_98_s_6_d_1_p_1.html">体育</a></li>
				<li><a href="./yule_c_87_s_6_d_1_p_1.html">教育</a></li>
				<li><a href="./yule_c_99_s_6_d_1_p_1.html">游戏</a></li>
				<li><a href="./yule_c_178_s_6_d_1_p_1.htm">文化</a></li>
				<li><a href="./yule_c_98_g_健身_a_6_d_1_p_1.html">健身</a></li>
				<li><a href="./fun_c_94_d_1_s_1_p_1.html">搞笑</a></li>
				<li><a href="./yule_c_98_g_广场舞_s_6_d_1_p_1.html">广场舞</a></li>
				</ul><!-- end 筛选 -->
			</div>
			<div class="stui-pannel_bd">
				<ul class="stui-vodlist clearfix">
					<?php
					if (empty($_GET['m'])) {
						$html = "http://list.youku.com/category/show/c_86_s_1_d_1_p_1.html";
					} else {
						$html = "http://list.youku.com/category/show/" . $_GET["m"];
					}
					$rurl = fileget($html,5);
					$vname = "#<li class=\"yk-col4 mr1\"><div class=\"yk-pack pack-film\"><div class=\"p-thumb\"><a href=\"(.*?)\" title=\"(.*?)\" target=\"_blank\"></a><i class=\"bg\"></i>(<div class=\"p-thumb-tagrt\"><span class=\"vip-free\">VIP</span></div>)?\s*<img class=\"quic\" _src=\"(.*?)\" src=\"(.*?)\" alt=\"(.*?)\" /></div><ul class=\"p-info pos-bottom\"><li class=\"status hover-hide\"><span class=\"p-time \"><i class=\"ibg\"></i><span>(.*?)</span></span></li></ul><ul class=\"info-list\"><li class=\"title\"><a href=\"(.*?)\" title=\"(.*?)\" target=\"_blank\">(.*?)</a></li>(<li class=\"actor\"><em>主讲：</em><a href=\"(.*?)\" target=\"_blank\" title=\"(.*?)\">(.*?)</a></li>)?\s*<li>(.*?)</li></ul></div></li>#";
					preg_match_all($vname, $rurl, $xarr);
					$xbflist = $xarr[1];
					$xname = $xarr[2];
					$ximg = $xarr[4];
					$shijian = $xarr[7];
					$bofang = $xarr[13];
					foreach ($xname as $key => $xvau) {
						$ccb = "./fplay/".base64_encode($xbflist[$key]).".html";
					?>
					<li class='col-md-6 col-sm-4 col-xs-3'>
					<div class='stui-vodlist__box'>
					<a class='stui-vodlist__thumb lazyload' href='<?php echo $ccb;?>' title='<?php echo $xname[$key];?>' data-original='<?php echo $ximg[$key];?>'>
					<span class='play hidden-xs'></span>
					<span class='pic-tag pic-tag-b'><?php echo $shijian[$key];?></span></a>
					<div class='stui-vodlist__detail'>
					<h4 class='title text-overflow'><a href='<?php echo $ccb;?>' title='<?php echo $xname[$key];?>' title='<?php echo $xname[$key];?>'><?php echo $xname[$key];?></a></h4>
					<p class='text text-overflow text-muted hidden-xs'><?php echo $bofang[$key];?></p>
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
	$response = str_replace("//list.youku.com/category/show/", "yule_", $response);
	$response = str_replace("<a class=\"next\" title=\"下一页\">", "", $response);
	$response = str_replace("上一页", "<", $response);
	$response = str_replace("下一页", ">", $response);
	echo $response;
?>
</ul>
<?php  include 'footer.php';?>