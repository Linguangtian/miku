<?php  include 'head.php';$zx='active'?>
<link rel="stylesheet" href="/template/jingpin/css/news.css" type="text/css">
<title>影视资讯-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="追热剧-最新剧集-好看剧集-最新剧集排行,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
</head>
<body>
<?php include 'header.php';?>
<div class="container">
	<div class="row">
<div class="col-lg-wide-75 col-xs-1 padding-0">
	<div class="stui-pannel stui-pannel-bg clearfix">
			<div class="stui-pannel-box">
			<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
						<span class="more text-muted pull-right hidden-xs"></span>
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>
				影视资讯</h3></div>
					</div>
<?php
foreach ($one as $ni=>$cs){ 
?>
<div class="bottom-line clearfix">
     <dl class="fed-list-arti fed-deta-info fed-deta-padding fed-margin fed-part-rows fed-part-over">
      <dt class="fed-deta-images fed-list-info fed-col-xs3">
        <a class="fed-list-pics fed-lazy fed-part-16by9" href="content-<?php echo $one1[$ni] ?>-<?php echo $one2[$ni] ?>.html" target="_blank" style="background-image: url(&quot;<?php echo $one3[$ni] ?>&quot;);"><span class="fed-list-play fed-list-arts fed-hide-xs"></span></a>
      </dt>
      <dd class="fed-deta-content fed-col-xs7 fed-col-sm8 fed-col-lg9">
       <h3 class="fed-visible"><a class="fed-part-etwo fed-visible" href="content-<?php echo $one1[$ni] ?>-<?php echo $one2[$ni] ?>.html"target="_blank" ><?php echo $cs ?></a></h3>
       <div class="fed-hide-xs fed-text-muted">
        <p class="fed-part-etwo"><?php echo $nr[$ni] ?></p>
       </div>
       <span class="fed-visible fed-text-muted"><?php echo $sj[$ni] ?></span>
      </dd>
     </dl></div>
<?php } ?>
<ul class="stui-page text-center cleafix">
<?php echo getPageHtmll($page,99,'');?><li><a>共99页</a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-wide-25 stui-pannel-side hidden-md hidden-sm hidden-xs">
			<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box">
					<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-bang"></use></svg>影视热度排行榜</h3>
						</div>
					</div>
					<div class="stui-pannel_bd clearfix">
						<ul class="stui-vodlist__text active col-pd clearfix">
						<?php
						include './data/bangdan.php';
						foreach ($bdArr['dy']['title'] as $k=>$title){
						$bdurl=$bdArr['dy']['url'][$k];//url
						$bdurl = str_replace("http://www.360kan.com", "", $bdurl);
						$bdurl = str_replace("https://www.360kan.com", "", $bdurl);
						$bdnum=$bdArr['dy']['num'][$k];//num
						$topnum=$bdArr['dy']['top'][$k];//topnum
						$chuandi='./vod'.$bdurl;
						echo "<li class='col-xs-1 padding-0'><a class='text-overflow' href='$chuandi' title='$title'><span class='am-badge am-round pull-left'>$topnum</span><span class='text-muted pull-right'>$bdnum</span><em class='text-red'></em>&nbsp;$title</a></li>";}?>
						</ul>
					</div>
				</div>
			</div>
			<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box">
					<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-bang"></use></svg>剧集热度排行榜</h3>
						</div>
					</div>
					<div class="stui-pannel_bd clearfix">
						<ul class="stui-vodlist__text active col-pd clearfix">
						<?php
						include './data/bangdan.php';
						foreach ($bdArr['tv']['title'] as $k=>$title){
						$bdurl=$bdArr['tv']['url'][$k];//url
						$bdurl = str_replace("http://www.360kan.com", "", $bdurl);
						$bdurl = str_replace("https://www.360kan.com", "", $bdurl);
						$bdnum=$bdArr['tv']['num'][$k];//num
						$topnum=$bdArr['tv']['top'][$k];//topnum
						$chuandi='./vod'.$bdurl;
						echo "<li class='col-xs-1 padding-0'><a class='text-overflow' href='$chuandi' title='$title'><span class='am-badge am-round pull-left'>$topnum</span><span class='text-muted pull-right'>$bdnum</span><em class='text-red'></em>&nbsp;$title</a></li>";}
						?>
						</ul>
					</div>
				</div>
			</div>
			<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box">
					<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-bang"></use></svg>综艺热度排行榜</h3>
						</div>
					</div>
					<div class="stui-pannel_bd clearfix">
						<ul class="stui-vodlist__text active col-pd clearfix">
						<?php
						include './data/bangdan.php';
						foreach ($bdArr['zy']['title'] as $k=>$title){
						$bdurl=$bdArr['zy']['url'][$k];//url
						$bdurl = str_replace("http://www.360kan.com", "", $bdurl);
						$bdurl = str_replace("https://www.360kan.com", "", $bdurl);
						$bdnum=$bdArr['zy']['num'][$k];//num
						$topnum=$bdArr['zy']['top'][$k];//topnum
						$chuandi='./vod'.$bdurl;
						echo "<li class='col-xs-1 padding-0'><a class='text-overflow' href='$chuandi' title='$title'><span class='am-badge am-round pull-left'>$topnum</span><span class='text-muted pull-right'>$bdnum</span><em class='text-red'></em>&nbsp;$title</a></li>";}
						?>
						</ul>
					</div>
				</div>
			</div>
		</div>
</div>
</div>
<?php  include 'footer.php';?>