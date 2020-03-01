<?php  include 'head.php';$zx='active'?>
</style><link rel="stylesheet" href="/template/jingpin/css/news.css" type="text/css">
<title><?php echo $onee [0]?>-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="<?php echo $ks[0] ?>,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $des[0] ?>">
</head>
<body>
<?php include 'header.php';?>
<div class="container">
	<div class="row">
	<div class="col-lg-wide-75 col-xs-1 padding-0">
	<div class="stui-pannel-box">
	<div class="stui-pannel stui-pannel-bg clearfix">
<div class="fed-arti-info fed-part-layout fed-back-whits">
   <div class="fed-arti-head fed-padding fed-part-rows fed-text-sm-center fed-line-bottom">
    <h1 class="fed-font-xxiv"><?php echo $onee[0] ?></h1>
    <p class="fed-text-muted"><?php echo $from; ?></p>
   </div>
   <div class="fed-arti-content fed-padding">
<?php
echo $string;
?> 
 </div>
   <script type="text/javascript">if(document.getElementById('fed-now')) document.getElementById('fed-now').innerHTML='1';if(document.getElementById('fed-count')) document.getElementById('fed-count').innerHTML='1';</script>
  </div>
  </div></div></div>
<div class="col-lg-wide-25 stui-pannel-side hidden-md hidden-sm hidden-xs">
<?php
						if (empty($mov[0])){
							$yc = 'style="display: none;"';
						}
						?>
				<div class="stui-pannel stui-pannel-bg clearfix" <?php echo $yc; ?>>
				<div class="stui-pannel-box">
                <div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-movie"></use></svg>相关电影</h3>
						</div>
				</div>
					<div class="stui-pannel_bd clearfix">
						<ul class="stui-vodlist__text active col-pd clearfix">
						<li class="col-xs-1 padding-0">
						<a class="text-overflow" href="/seacher-<?php echo $mov[0] ?>.html" title="查看《<?php echo $mov[0] ?>》最新影片"><img src="<?php echo $img[0] ?>" data-original="<?php echo $img[0] ?>" onerror=src="/template/jingpin/img/load.gif" alt="$mov[0]" style="width:80%;margin-left:10%;"/></a>
						<a class="text-overflow" href="/seacher-<?php echo $mov[0] ?>.html" title="查看《<?php echo $mov[0] ?>》最新影片"><h4 class="title" style="margin-left:10%;"><i class="icon iconfont icon-more text-muted pull-right"></i><?php echo $mov[0] ?></h4></a>
	<div class="stui-vodlist__detail"><p class="text text-overflow text-muted hidden-xs" tyle="margin-left:10%;">主演：<?php echo $actor[0]; ?>等</p></div></li>
						</ul>
						</div>
                  </div>
				</div>
			<div class="stui-pannel stui-pannel-bg clearfix">
					<div class="stui-pannel-box">
						<div class="stui-pannel_hd">
						<div class="stui-pannel__head active clearfix">
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-movie"></use></svg>影视热度排行榜</h3>
						</div>
						<div class="stui-pannel__head bottom-line clearfix">
								<ul class="hot-cate-title">
									<li data-index="dy" class="activee">电影</li>
								</ul>
								<ul class="hot-cate-title">
									<li data-index="ds" class="">电视剧</li>
								</ul>
								<ul class="hot-cate-title">
									<li data-index="zy" class="">综艺</li>
								</ul>
								<ul class="hot-cate-title">
									<li data-index="dm" class="">动漫</li>
								</ul>
						</div>
						</div>
						<div class="stui-pannel_bd clearfix">
						<ul class="hot-cate-list stui-vodlist__text active activee col-pd clearfix" data-pid="dy">
						<?php
						include './data/bangdan.php';
						foreach ($bdArr['dy']['title'] as $k=>$title){
						$bdurl=$bdArr['dy']['url'][$k];//url
						$bdurl = str_replace("http://www.360kan.com", "", $bdurl);
						$bdurl = str_replace("https://www.360kan.com", "", $bdurl);
						$bdnum=$bdArr['dy']['num'][$k];//num
						$topnum=$bdArr['dy']['top'][$k];//topnum
						$chuandi='/vod'.$bdurl;
						echo "<li class='col-xs-1 padding-0'><a class='text-overflow' href='$chuandi' title='$title'><span class='am-badge am-round pull-left'>$topnum</span><span class='text-muted pull-right'>$bdnum</span><em class='text-red'></em>&nbsp;$title</a></li>";}?>
						</ul>
						<ul class="hot-cate-list stui-vodlist__text active col-pd clearfix" data-pid="ds">
						<?php
						include './data/bangdan.php';
						foreach ($bdArr['tv']['title'] as $k=>$title){
						$bdurl=$bdArr['tv']['url'][$k];//url
						$bdurl = str_replace("http://www.360kan.com", "", $bdurl);
						$bdurl = str_replace("https://www.360kan.com", "", $bdurl);
						$bdnum=$bdArr['tv']['num'][$k];//num
						$topnum=$bdArr['tv']['top'][$k];//topnum
						$chuandi='/vod'.$bdurl;
						echo "<li class='col-xs-1 padding-0'><a class='text-overflow' href='$chuandi' title='$title'><span class='am-badge am-round pull-left'>$topnum</span><span class='text-muted pull-right'>$bdnum</span><em class='text-red'></em>&nbsp;$title</a></li>";}?>
						</ul>
						<ul class="hot-cate-list stui-vodlist__text active col-pd clearfix" data-pid="zy">
						<?php
						include './data/bangdan.php';
						foreach ($bdArr['zy']['title'] as $k=>$title){
						$bdurl=$bdArr['zy']['url'][$k];//url
						$bdurl = str_replace("http://www.360kan.com", "", $bdurl);
						$bdurl = str_replace("https://www.360kan.com", "", $bdurl);
						$bdnum=$bdArr['zy']['num'][$k];//num
						$topnum=$bdArr['zy']['top'][$k];//topnum
						$chuandi='/vod'.$bdurl;
						echo "<li class='col-xs-1 padding-0'><a class='text-overflow' href='$chuandi' title='$title'><span class='am-badge am-round pull-left'>$topnum</span><span class='text-muted pull-right'>$bdnum</span><em class='text-red'></em>&nbsp;$title</a></li>";}?>
						</ul>
						<ul class="hot-cate-list stui-vodlist__text active col-pd clearfix" data-pid="dm">
						<?php
						include './data/bangdan.php';
						foreach ($bdArr['dm']['title'] as $k=>$title){
						$bdurl=$bdArr['dm']['url'][$k];//url
						$bdurl = str_replace("http://www.360kan.com", "", $bdurl);
						$bdurl = str_replace("https://www.360kan.com", "", $bdurl);
						$bdnum=$bdArr['dm']['num'][$k];//num
						$topnum=$bdArr['dm']['top'][$k];//topnum
						$chuandi='/vod'.$bdurl;
						echo "<li class='col-xs-1 padding-0'><a class='text-overflow' href='$chuandi' title='$title'><span class='am-badge am-round pull-left'>$topnum</span><span class='text-muted pull-right'>$bdnum</span><em class='text-red'></em>&nbsp;$title</a></li>";}?>
						</ul>
						</div>
					</div>
				</div>
		</div>
  </div>
</div>
<script>
    $('.hot-cate-title li').hover(function () {
        var index = $(this).data('index'),
            cate_list = $('.hot-cate-list[data-pid=' + index + ']');
        if ($('.hot-cate-title.activee').data('index') === index) {
            //悬浮在已经选中的分类
            return true;
        }
        //移除已经选中的class
        $('.hot-cate-title li').removeClass('activee');
        $('.hot-cate-list').removeClass('activee');
        $(this).addClass('activee');
        cate_list.addClass('activee');
    }, function () {

    });
  </script>
<?php  include 'footer.php';?>