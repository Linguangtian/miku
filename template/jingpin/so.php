<?php  include 'head.php';$so='active';?>
<title>全网搜-在线观看-全网免费VIP影视搜索-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="<?php echo $q?>,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
<link href="/template/jingpin/css/zy.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<body>
<?php  include 'header.php';?>
<div class="container">
<div class="row">
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
			<div class="hy-video-head" style=" text-align: center;">
				<p class="text-center"><a href="so.html" title="全网搜"><img src="/images/flogo.png" width="200" height="133" alt="全网搜"></a></p>
				<h4 class="margin-0"><span style="color:#F05D2E;">请选择下方<span style="color:red">【资源网】</span>进行搜索</span></h4>
					<div class="col-md-1"></div>
							<div class="row" style="padding-left: 15px; padding-right: 15px;">
                                <div class="col-md-2"></div>
                                    <div class=" col-md-4">
										<div class="input-group">
                                        <div class="input-group-addon">影片名称：</div>
										<input tabindex="2" class="form-control searchall" id="searchs" name="sousuo" type="text" placeholder="输入影片关键词" value="<?php echo $q?>" required="required" onkeydown='if(event.keyCode==13){cu.click()}'>
										</div>
                                    </div>  
                                    <div class=" col-md-4">
                                        <div class="input-group">
                                            <select style="color:blue;" name="mode" id="mode" class="form-control">
												<option value="">▼&nbsp;==请点击选择==&nbsp;▼</option>
												<option value="cxqx.php?wd=">全网搜①号线（极速线路）&nbsp;&nbsp;▼</option>
												<option value="cxqx1.php?wd=">全网搜②号线（高速线路）&nbsp;&nbsp;▼</option>
												<option value="seacherwl.php?wd=">卧龙资源站&nbsp;&nbsp;▼</option>
												<option value="seacherbj.php?wd=">八戒资源站&nbsp;&nbsp;▼</option>
												<option value="seacher123.php?wd=">123资源站&nbsp;&nbsp;▼</option>
												<option value="seacherjsy.php?wd=">极快资源站&nbsp;&nbsp;▼</option>
												<option value="seacher131.php?wd=">131资源站&nbsp;&nbsp;▼</option>
												<option value="seacher135.php?wd=">135资源站&nbsp;&nbsp;▼</option>
												<option value="seacher156.php?wd=">156资源站&nbsp;&nbsp;▼</option>
												<option value="seacher158.php?wd=">158资源站&nbsp;&nbsp;▼</option>
												<option value="seacherbw.php?wd=">百万资源站&nbsp;&nbsp;▼</option>
												<option value="seachersb.php?wd=">速播资源站&nbsp;&nbsp;▼</option>
												<option value="seacherdb.php?wd=">豆办资源站&nbsp;&nbsp;▼</option>
												<option value="seacherok.php?wd=">OK资源站&nbsp;&nbsp;▼</option>
												<option value="seacherzd.php?wd=">最大资源站&nbsp;&nbsp;▼</option>
												<option value="seacher8k.php?wd=">8k资源站&nbsp;&nbsp;▼</option>
												<option value="seacheryj.php?wd=">永久资源站&nbsp;&nbsp;▼</option>
												<option value="seacherky.php?wd=">酷云资源站&nbsp;&nbsp;▼</option>
												<option value="seacherkb.php?wd=">酷播资源站&nbsp;&nbsp;▼</option>
												<option value="seacherzk.php?wd=">最快资源站&nbsp;&nbsp;▼</option>
												<option value="seachermh.php?wd=">麻花资源站&nbsp;&nbsp;▼</option>
												<option value="seacherzx.php?wd=">最新资源站&nbsp;&nbsp;▼</option>
												<option value="seachercz.php?wd=">C值资源站&nbsp;&nbsp;▼</option>
                                            </select>
                                            <span class="input-group-btn "> 
												<button id="cu" class="btnn btn-danger" onclick="sub2()"> &nbsp; 搜 &nbsp; 索 &nbsp; </button>
                                            </span>
                                        </div><!-- /input-group -->
                                    </div>
                                        <div class="col-md-2"></div>
                            </div>
                                <p style="text-align: center; margin: 15px 0 10px 0;"><span style="color:#d9534f; padding: 5px;">温馨提示：合并一块搜会有点卡，请耐心等待5-20秒，或者使用单个资源站进行搜索！</span></p>	
                                </div>

                               <div class="stui-pannel stui-pannel-bg clearfix">
	<div class="single-strong" style="color: #333;"><a href="/movie.html" title="今日电影排行榜">今日电影排行榜</a></div>
			
<div class="stui-pannel_bd clearfix">
			<ul class="stui-vodlist clearfix">

	<?php  include './data/dyjx.php'; 
$i=0;
foreach ($namearr[1] as $key => $value) 
{if ($i<14){
$gul=$listarr[1][$key]; 
$_GET['id']=$gul; 
$zimg=$imgarr[1][$key]; 
$zname=$namearr[1][$key]; 
$fname=$fnamearr[1][$key]; 
$nname=$nnamearr[1][$key]; 
$zstar=$stararr[1][$key];
$sstar=$sstararr[1][$key];
$tok=$gul; 
$playurl=vod.$tok;
echo '<li class="col-md-7 col-sm-4 col-xs-3 col-xs-2">	
<div class="stui-vodlist__box">
<a class="stui-vodlist__thumb1 lazyload xtcms" href="'.$playurl.'" title="'.$zname.'"  data-original="'.$zimg.'">
<span class="play hidden-xs"></span>
<span class="pic-tag pic-tag-l">豆瓣分:'.$sstar.'</span>
<span class="pic-tag pic-tag-b">'.$nname.'</span>
</a>
<div class="stui-vodlist__detail">
<h4 class="title text-overflow">
<a href="'.$playurl.'" title="'.$zname.'">'.$zname.'</a></h4>
<h4><p class="text text-overflow text-muted hidden-xs">'.$zstar.'</p></h4>
</h4>

</div>
</div>
</li>';
$i ++;}
} ?>
</ul>
</div>

<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="single-strong" style="color: #333;"><a href="/tv.html" title="今日电影排行榜">今日电视剧排行榜</a></div>
			
<div class="stui-pannel_bd clearfix">
			<ul class="stui-vodlist clearfix">
	<?php  include './data/tvjx.php'; 
$i=0;
foreach ($namearr[1] as $key => $value) 
{if ($i<14){
$gul=$listarr[1][$key]; 
$_GET['id']=$gul; 
$zimg=$imgarr[1][$key]; 
$zname=$namearr[1][$key]; 
$fname=$fnamearr[1][$key]; 
$nname=$nnamearr[1][$key]; 
$zstar=$stararr[1][$key];
$tok=$gul; 
$playurl=vod.$tok;
echo '<li class="col-md-7 col-sm-4 col-xs-3 col-xs-2">	
<div class="stui-vodlist__box">
<a class="stui-vodlist__thumb1 lazyload xtcms" href="'.$playurl.'" title="'.$zname.'"  data-original="'.$zimg.'">
<span class="play hidden-xs"></span>
<span class="pic-text text-right">'.$nname.'</span>
</a>
<div class="stui-vodlist__detail">
<h4 class="title text-overflow">
<a href="'.$playurl.'" title="'.$zname.'">'.$zname.'</a></h4>
<h4><p class="text text-overflow text-muted hidden-xs">'.$zstar.'</p></h4>
</h4>

</div>
</div>
</li>';
$i ++;}
} ?>

	</ul>
	</div>
	
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="single-strong" style="color: #333;"><a href="/zongyi.html" title="今日综艺排行榜">今日综艺排行榜</a></div>
			
<div class="stui-pannel_bd clearfix">
			<ul class="stui-vodlist clearfix">
	<?php  include './data/zyjx.php'; 
$i=0;
foreach ($namearr[1] as $key => $value) 
{if ($i<14){
$gul=$listarr[1][$key]; 
$_GET['id']=$gul; 
$zimg=$imgarr[1][$key]; 
$zname=$namearr[1][$key]; 
$fname=$fnamearr[1][$key]; 
$nname=$nnamearr[1][$key]; 
$zstar=$stararr[1][$key];
$tok=$gul; 
$playurl=vod.$tok;
echo '<li class="col-md-7 col-sm-4 col-xs-3 col-xs-2">	
<div class="stui-vodlist__box">
<a class="stui-vodlist__thumb1 lazyload xtcms" href="'.$playurl.'" title="'.$zname.'"  data-original="'.$zimg.'">
<span class="play hidden-xs"></span>
<span class="pic-text text-right">'.$nname.'</span>
</a>
<div class="stui-vodlist__detail">
<h4 class="title text-overflow">
<a href="'.$playurl.'" title="'.$zname.'">'.$zname.'</a></h4>
<h4><p class="text text-overflow text-muted hidden-xs">'.$zstar.'</p></h4>
</h4>

</div>
</div>
</li>';
$i ++;}
} ?>
</ul>
</div>	
			
			<div class="stui-pannel stui-pannel-bg clearfix">
			<div class="single-strong" style="color: #333;"><a href="/dongman.html" title="今日动漫排行榜">今日动漫排行榜</a></div>
			
<div class="stui-pannel_bd clearfix">
			<ul class="stui-vodlist clearfix">
<?php  include './data/dmjx.php'; 
$i=0;
foreach ($namearr[1] as $key => $value) 
{if ($i<14){
$gul=$listarr[1][$key]; 
$_GET['id']=$gul; 
$zimg=$imgarr[1][$key]; 
$zname=$namearr[1][$key]; 
$fname=$fnamearr[1][$key]; 
$nname=$nnamearr[1][$key]; 
$zstar=$stararr[1][$key];
$tok=$gul; 
$playurl=vod.$tok;
echo '<li class="col-md-7 col-sm-4 col-xs-3 col-xs-2">	
<div class="stui-vodlist__box">
<a class="stui-vodlist__thumb1 lazyload xtcms" href="'.$playurl.'" title="'.$zname.'"  data-original="'.$zimg.'">
<span class="play hidden-xs"></span>
<span class="pic-text text-right">'.$nname.'</span>
</a>
<div class="stui-vodlist__detail">
<h4 class="title text-overflow">
<a href="'.$playurl.'" title="'.$zname.'">'.$zname.'</a></h4>
<h4><p class="text text-overflow text-muted hidden-xs">'.$zstar.'</p></h4>
</h4>

</div>
</div>
</li>';
$i ++;}
} ?>
</ul>
</div></div></div></div></div></div></div>
<?php  include 'footer.php';?>