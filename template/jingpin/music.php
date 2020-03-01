<?php  include 'head.php';$music='active'?>
<title>在线音乐 - <?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="在线音乐,网易音乐,QQ音乐,酷狗音乐,百度音乐,音乐下载">
<meta name="description" content="热剧快播,最好看的剧情片尽在<?php echo $mkcms_description;?>,在线音乐欣赏,音乐免费下载">
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
	<div class="row"><?php echo $mkcms_ad17; ?>
		<div class="stui-pannel stui-pannel-bg clearfix">
			<div class="stui-pannel_hd">
				<div class="stui-pannel__head active bottom-line clearfix">
				<span class="more text-muted pull-right hidden-xs">音乐来自于网络</span>
					<ul class="nav nav-tabs">
					<li class="active"><a href="#">在线音乐</a></li>
					</ul>
				</div>
			</div>
			<div class="stui-pannel_bd">
				<ul class="stui-vodlist clearfix">
				<iframe src="/music" width="100%" height="600" scrolling="no" frameborder="0"></iframe>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php  include 'footer.php';?>