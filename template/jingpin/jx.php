<?php  include 'head.php';$jx='active'?>
<title>视频解析 - <?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="视频解析,全网影视解析,视频在线解析">
<meta name="description" content="热剧快播,最好看的剧情片尽在<?php echo $mkcms_description;?>,在线视频解析,视频解析">
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
		<div class="stui-pannel stui-pannel-bg clearfix">
			<div class="stui-pannel_hd">
				<div class="stui-pannel__head active bottom-line clearfix">
				<span class="more text-muted pull-right hidden-xs">VIP视频在线解析</span>
					<ul class="nav nav-tabs">
					<li class="active"><a href="#">极速无广告接口</a></li>
					</ul>
				</div>
			</div>
			<div class="stui-pannel_bd">
				<ul class="stui-vodlist clearfix">
				<iframe class="jx-jx" src="https://jx.yueliangjx.com/?v=<?php echo $q; ?>" allowfullscreen="true" width="100%" height="600" scrolling="no" frameborder="0"></iframe>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php  include 'footer.php';?>