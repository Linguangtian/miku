<?php include 'head.php';$live='active';?>
<title>网络直播-<?php echo $mkcms_seoname;?></title>
<meta name="description" content="<?php echo $mkcms_description;?>">
<link href="//cdn.staticfile.org/aplayer/1.10.1/APlayer.min.css" rel="stylesheet" type="text/css" />
<link href="//cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.plr10{padding-left:10px;padding-right:10px;max-width:620px;min-width:300px;margin:10px auto;background-color:#fff;}
</style>
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<body>
<?php  include 'header.php';?>
<div class="container">
<div class="row">
	<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>网络直播</h3></div>
</div>
<!-- 筛选 -->
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul2">
<li><span class="text-muted">按类型</span></li>
<li><a href="./mv.html" >优酷MV</a></li>
<li><a href="./meipai.php" >美拍视频</a></li>
<li><a href="./live.php" >网络直播</a></li>
</ul>
<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");
header("Content-type: text/html;charset=utf-8");
date_Default_TimeZone_set("PRC");
echo '<div class="plr10"><script type="text/javascript" src="live1.php" charset="utf-8"></script></div>';
?>
<?php  include 'footer.php';?>