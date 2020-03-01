<?php $dt='active';?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
<meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
<title>大厅</title>
<link rel="stylesheet" type="text/css" href="/template/jingpin/css/aui.css"/>
<link rel="stylesheet" type="text/css" href="/template/jingpin/css/aui-hall.css"/>
<link rel="stylesheet" type="text/css" href="/template/jingpin/css/phone_style.css"/>
<style> 
body {background-repeat: repeat;background-size: inherit;background-attachment: fixed;background-position: center center;background: url(/style/bg.jpg);}
.aui-slide-wrap {overflow: hidden;}
</style>
</head>
<body class="index">
<div id="wrap" class="flex-wrap flex-vertical">	
	<div id="main" class="flex-con" >
		<div class="br"></div>
		<div id="aui-slide" class="fx-box">
			<div id="slidebox" class="aui-slide-wrap" style="margin: 10px;border-radius:0.5rem;box-shadow:0.1rem 0.1rem 0.4rem rgba(99, 99, 99, 0.3);">
			<img id="bpic" src="/template/jingpin/img/default_banner.png">
			</div>
		</div>
		<div class="list-title">
			<div class="list-title-l">
			<span style="color:#444;font-size: 0.6rem"><i class="iconfont icon-zuirehotchunse" style="color:#ff7600;font-size: 0.8rem"></i>VIP大厅</span>
			</div>
			<div class="list-title-r" id="wzbox_top"></div>
		</div>
		<section class="aui-grid aui-margin-b-15">
			<div class="aui-row" id="div_list_f">
				<div class="aui-col-xs-4 pt-list">
				<a href="/cx.html"><i class="aui-iconfont"><img src="/template/jingpin/img/qiang.png"></i><div class="aui-grid-label">抢先看</div></a>
				</div>
				<div class="aui-col-xs-4 pt-list">
				<a href="/movie_all_all_all_all_rankhot_1.html"><i class="aui-iconfont"><img src="/template/jingpin/img/movie.png"></i><div class="aui-grid-label">热门电影</div></a>
				</div>
				<div class="aui-col-xs-4 pt-list">
				<a href="/tv_all_all_all_all_rankhot_1.html"><i class="aui-iconfont"><img src="/template/jingpin/img/juji.png"/></i><div class="aui-grid-label">电视剧集</div></a>
				</div>
				<div class="aui-col-xs-4 pt-list">
				<a href="/dongman.html"><i class="aui-iconfont"><img src="/template/jingpin/img/dongman.png"></i><div class="aui-grid-label">热血动漫</div></a>
				</div>
				<div class="aui-col-xs-4 pt-list">
				<a href="/zongyi_all_all_all_rankhot_1.html"><i class="aui-iconfont"><img src="/template/jingpin/img/zongyi.png"></i><div class="aui-grid-label">热门综艺</div></a>
				</div>
				<div class="aui-col-xs-4 pt-list">
				<a href="/yule.html"><i class="aui-iconfont"><img src="/template/jingpin/img/yule.png"></i><div class="aui-grid-label">娱乐资讯</div></a>
				</div>
				<div class="aui-col-xs-4 pt-list">
				<a href="/fun.html"><i class="aui-iconfont"><img src="/template/jingpin/img/xiao.png"></i><div class="aui-grid-label">搞笑视频</div></a>
				</div>
				<div class="aui-col-xs-4 pt-list">
				<a href="/music.html"><i class="aui-iconfont"><img src="/template/jingpin/img/yue.png"></i><div class="aui-grid-label">在线音乐</div></a>
				</div>
				<div class="aui-col-xs-4 pt-list">
				<a href="fuli.php"><i class="aui-iconfont"><img src="/template/jingpin/img/fu.png"></i><div class="aui-grid-label">福利</div></a>
				</div>
			</div>
		</section>
	</div>
	<div id="footer" class="border-t hidden-lg hidden-md" >
		<ul class="flex-wrap" style="font-weight:bold">
			<a class="flex-con <?php echo $index;?>" href="/index.html"><li onclick="randomSwitchBtn( this );">首页</li>
			<a class="flex-con <?php echo $cx;?>" href="/cx.html"><li onclick="randomSwitchBtn( this );">抢先</li></a>
			<a class="flex-con <?php echo $dt;?>" href="/hall.html"><li onclick="randomSwitchBtn( this );">大厅</li></a>
			<a class="flex-con <?php echo $fl;?>" href="/fuli.html"><li onclick="randomSwitchBtn( this );">福利</li></a>
			<a class="flex-con <?php echo $so;?>" href="/so.html"><li onclick="randomSwitchBtn( this );">全网搜</li></a>
		</ul>
	</div>
</div>
</body>
</html>