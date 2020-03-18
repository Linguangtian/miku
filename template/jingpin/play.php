<><?php  include 'head.php';?>
<title><?php echo $timu; ?>-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="<?php echo $timu; ?>,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $timu; ?>,主要讲述<?php echo mb_substr(preg_replace("/<(.*?)>/si", "", $jian ),0,85,'utf-8').'...'; ?>">
<style type="text/css">
#timer{background: rgba(0, 0, 0, 0.59);padding: 5px;text-align: center;width: 30px;position: absolute;top: 5%;right: 2%;color: #fff;font-size: 16px;border-radius: 50%;height: 30px;line-height: 20px}
#xiang{background: rgba(177, 13, 13, 0.87);padding: 5px;text-align: center;width: auto;position: absolute;bottom: 2%;right: 1%;color: #fff;font-size: 16px;border-radius: 10px;height: 20px;line-height: 9px}
#ys,.jkbtn1{border: 1px solid #FF9900;background-color: #FF9900;color: #FFFFFF;}
.stui-player__video {margin-bottom: 10px;}
.embed-responsive{ padding-bottom: 56.25%;}
</style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box clearfix">
<div class="col-pd text-center">
<?php echo $mkcms_ad2;?>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-wide-75 col-xs-1">
			<div class="stui-player__item myui-player__item clearfix" style="background-color: #fff;">
				<div id="player-left" class="stui-player__video embed-responsive embed-responsive-16by9 clearfix">
				  <div class="myui-player__box player-fixed"> <a class="player-fixed-off" href="javascript:;" style="display: none;"><i class="icon iconfont icon-close"></i></a>
                   <div class="embed-responsive clearfix">
					<div id="shiping_box"></div>
<script type="text/javascript">
function run(){
	var s = document.getElementById("timer");
	if(!s){
		return false;
		}else{
			s.innerHTML = s.innerHTML * 1 - 1;
			}
			}
	window.setInterval("run();", 1000);
	$('#shiping_box').html('<div style="text-align:center;width:100%;"><?php echo $mkcms_ad1; ?></div><div id="timer"><?php echo $mkcms_miaoshu;?></div>');
	//设置延时函数
	function adsUp(){
		$("#shiping_box").html('<iframe id="video" src="<?php
		if(empty($panduan) && empty($panduan1)){
			$dyurl = str_replace('http://cps.youku.com/redirect.html?id=0000028f&url=', '', "$c[0]");
			echo"$mjk$dyurl";
			}
			else{
				if(!empty($b[0])){echo "$mjk$b[0]";}
				else{
					echo"$mjk$zyvi[1]";}}
					?>
        " allowfullscreen="true" allowtransparency="true" style="width:100%;border:none"></iframe>');}
//五秒钟后自动收起
var t = setTimeout(adsUp,<?php echo $mkcms_miaoshu*1000;?>);   
</script></div></div></div>
				<div class="stui-player__detail detail" id="dianshijuid">
				<ul class="more-btn">
				<li><a href="javascript:void(0)" onclick="location.reload()" class="btn btn-sm btn-default" title="刷新">刷新</a></li>
				<li><div class="dropdown">
				<a href="javascript:scroll(0,0)" class="dropbtn btn btn-sm btn-default" title="切换线路">线路</a>
				<div class="dropdown-content">
				<span class="text-muted" id="xlus">
				<?php if($mjk!=""){ ?><a onclick="xldata(this)" data-jk="<?php echo $mjk; ?>" class="btn btn-sm btn-default">推荐</a>  <?php } ?>
				<?php
				$jkjk=explode("\r\n",$mkcms_jiekou);
				for($k=0;$k<count($jkjk);$k++){
				$jkjk[$k]=explode('$',$jkjk[$k]);
				echo '<a onclick="xldata(this)" data-jk="'.$jkjk[$k][1].'" class="btn btn-sm btn-default">'.$jkjk[$k][0].'</a>  ';}?>
				</span>
				</div>
				</div></li>
				<?php if($mkcmstyle=='m'){ echo "";}else{
				echo '<li><a href="javascript:scroll(0,0)" class="btn btn-default" id="btn-prev" title="上一集"><i class="icon iconfont icon-back hidden-xs"></i> 上一集</a></li>
				<li><a href="javascript:scroll(0,0)" class="btn btn-default" id="btn-next" title="下一集">下一集 <i class="icon iconfont icon-more hidden-xs"></i></a></li>';
                 } ?>
				<li><a href="/jx-<?php echo $timu;?>.html" class="dropbtn btn btn-sm btn-default" title="换源">换源</a></li>
				</ul>
				<h1 class="title" id="xuji"><a href="/seacher-<?php echo $timu; ?>.html" title="<?php echo $timu; ?>"><?php echo $timu; ?></a><span class="js"></span></h1>
				<span class="text-muted">地区：</span><?php if ($h == ""){ $h=$hh; echo $h;} else{echo $h;}?><span class="split-line"></span>
				<span class="text-muted">年份：</span><?php echo $g; ?>
				<?php if ($gx == ""){ echo $gx; } else{ echo '<span class="split-line"></span><span class="text-muted">状态：</span>'.$gx; }?>
				</div>
			</div>
<!-- 播放器-->
			<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box b playlist mb">
				<?php
				if (empty($panduan) && empty($panduan1)) {
				echo '<div class="stui-pannel_hd"><div class="stui-pannel__head bottom-line active clearfix"><span class="more text-muted pull-right">无需安装任何插件，即可快速播放</span><h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-play"></use></svg>播放列表</h3></div></div><div class="stui-pannel_bd col-pd clearfix dianshijua" id="dianshijuid"><ul class="stui-content__playlist column10 clearfix" id="playlist">';
				foreach ($c as $kk => $vod) {
				$dyurl = str_replace('http://cps.youku.com/redirect.html?id=0000028f&url=', '', "$vod");
				$dyname = str_replace('(付费)', '', "$d[$kk]");
				echo "<li class='dyli active'><a href='$dyurl' id='' title='$timu.$dyname'>";
				echo "$dyname</a></li>";}
				if (empty($vod)) {echo "<li class='dyli'><a>暂无资源</a></li>";}
				echo '</ul></div>';
				} else {
					$i=0;
					foreach ($yuan as $vv => $ly) {
						echo '<div class="stui-pannel_hd"><div class="stui-pannel__head bottom-line active clearfix"><span class="more text-muted pull-right">无需安装任何插件，即可快速播放</span><h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-play"></use></svg>'.unicode_decode("$yuanname[$vv]").'播放列表</h3></div></div>';
						echo '<div class="stui-pannel_bd col-pd clearfix dianshijua" id="dianshijuid"><ul class="stui-content__playlist column10 clearfix" id="playlist">';
						$site = $ly;
						$id=$mkcmsid;
						if ($mkcmstyle==tv){
							$category="2";}
							else{
								$category="4";
								}
				$url = "http://www.360kan.com/cover/switchsite?site=".$site."&id=".$id."&category=".$category;
				$html = fileget($url,5);
				$data=json_decode($html, ture);
				$data=implode("",$data);
				$tvzzx = "#<div class=\"num-tab-main g-clear\\s*js-tab\"\\s*(style=\"display:block;\")?>[\\s\\S]+?<a data-num=\"(.*?)\" data-daochu=\"to=(.*?)\" href=\"(.*?)\">[\\s\\S]+?<\/div>\r<\/div>#";
				$tvzzy = '#<a data-num="(.*?)" data-daochu="to=(.*?)" href="(.*?)">#';
				preg_match_all($tvzzx, $data, $tvarry);
				$zcf = implode($glue, $tvarry[0]);
				preg_match_all($tvzzy,  $zcf, $tvarry);
				$b = $tvarry[3];
				$yeshu=$tvarry[1];
				foreach ($b as $yy => $tvurl) {
					echo "<li class='active'><a data-num='$yeshu[$yy]' href='$b[$yy]' class='btn-play-source' title='$timu.$yeshu[$yy]'>";
					echo '第'.$yeshu[$yy].'集</a></li>';}
				echo '</ul></div>';
				$i ++;}
				if (!empty($panduan1)){
				echo '<div class="stui-pannel_hd"><div class="stui-pannel__head bottom-line active clearfix"><span class="more text-muted pull-right">无需安装任何插件，即可快速播放</span><h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-play"></use></svg>播放列表</h3></div></div><div class="stui-pannel_bd col-pd clearfix dianshijua" id="dianshijuid" id="playlist"><ul class="stui-content__playlist column6 clearfix">';
				foreach ($zyvi as $keya=>$tvideoa){
				echo "<li class='zyli active'><a data-num='$noqi[$keya]' href='$tvideoa' class='btn btn-danger btn-play-source 1' title='$noqi[$keya]$zyname[$keya]'><img src='$zypic[$keya]' onerror=src='/template/jingpin/img/load.gif' alt='$zyname[$keya]' width=100%/><br>$noqi[$keya]<br>$zyname[$keya]</a></li>";}
				echo '</ul></div>';}}?>
					</div>
				</div><!-- 播放地址-->
<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box">
		<div class="stui-pannel__head bottom-line active clearfix">
			<div class="stui-pannel__head clearfix">
				<h3 class="title">
					<svg class="iconm" aria-hidden="true"><use xlink:href="#icon-jie"></use></svg>
					剧情简介
				</h3>
			</div>
		</div>
	</div>
	<div class="stui-pannel-box">
		<div class="stui-content__thumb">
			<a class="stui-vodlist__thumb picture v-thumb" href="#" title="<?php echo $timu; ?>">
			<img src="<?php if(!empty($imgs)) {echo $imgs;} ?>" data-original="<?php if(!empty($imgs)) {echo $imgs;} ?>" class="lazyload" alt="<?php echo $timu; ?>" title="<?php echo $timu; ?>" width="100%"/>
			<span class="pic-text text-right"></span>
			</a>
		</div>
	<div class="stui-content__detail">
	<h1 class="title"><a href="<?php echo $mkcms_domain; ?>seacher-<?php echo $timu; ?>.html" title="<?php echo $timu; ?>"><?php echo $timu; ?></a></h1>	
	<p class="data">地区 ：<?php if ($hh == ""){ echo $h;} else{echo $hh;}?></p>
	<p class="data">年代 ：<?php echo $g; ?></p>
	<?php if ($gx == ""){ echo $gx; } else{ echo '<p class="data">状态 ：'.$gx.'</p>';}?>
	<p class="data"><?php if(!empty($f)){echo $f;} ?></p>
	<p class="data"><?php if(!empty($e)) {echo $e;} ?></p>
	<p class="data"><?php if(!empty($hi)){echo $hi;} ?></p>
	</div>
	<div class="stui-pannel_bd">
		<p class="col-pd detail">
		<span class="detail-sketch">简介：<?php echo $jian; ?></span>
		</p>
	</div>
	</div>
</div><!-- 剧情简介-->
<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box">
		<div class="stui-pannel_hd">
			<div class="stui-pannel__head bottom-line active clearfix">
				<h3 class="title">
					<svg class="iconm" aria-hidden="true"><use xlink:href="#icon-like"></use></svg>
					猜你喜欢
				</h3>
			</div>
		</div>
		<div class="stui-pannel_bd">
			<ul class="stui-vodlist__bd clearfix">
			<?php include 'data/like.php'; ?>
			</ul>
		</div>
	</div>
</div><!-- 猜你喜欢-->
</div>
<script>
 $(function () {
	 $.each($('.dianshijua'),function () {
		var al = $('.stui-content__playlist a');
		al.attr('class','btn-play-source am-btn am-btn-default lipbtn');
		});
		$.each($('.lipbtn'),function () {
               console.info(11);
			var url = $(this).attr('href');
			$(this).attr('data-href',url);
			$(this).attr('href','javascript:;');
			$(this).attr('onclick','bofang(this)');
			});
			$('#xlus').children('a:eq(0)').addClass('jkbtn0');
			var autourl = $('.lipbtn:eq(0)').attr('data-href');
			$('.lipbtn:eq(0)').attr('id','ys');
			var text = $('.lipbtn:eq(0)').text();
			$('.js').text('-'+text+'');
			var jiekou = $('#xlus').children('a:eq(0)').attr('data-jk');
			if(autourl!=''||autourl!=null){
				setTimeout(function () {
					$('#video').attr('src', jiekou + autourl);
					},0)
					}
		// 上一集
		$("#btn-pre").click(function() {
			$("#ys.btn-play-source").prev().click();
			});
		// 下一集
		$("#btn-next").click(function() {
		$("#ys.btn-play-source").next().click();
		});
		// 上一集
		$("#btn-pre1").click(function() {
		$("#ys.btn-play-source").prev().click();
		});
	// 下一集
	$("#btn-next1").click(function() {
		$("#ys.btn-play-source").next().click();
		});})
</script>
<script>
    function bofang(obj) {
        var href = $(obj).attr('data-href');
        var text = $(obj).text();
        $('.js').text('-' + text + '');
        $.each($('.lipbtn'), function () {
            $(this).attr('id', '');
        });
        $(obj).attr('id', 'ys');
        var jiekou = $('.jkbtn0').attr('data-jk');
        if (href != '' || href != null) {
            setTimeout(function () {
                $('#video').attr('src', jiekou + href);
            }, 0)
        }
    }

    function xldata(obj) {
        var url = $(obj).attr('data-jk');
        $.each($('.jkbtn0'), function () {
            $(this).removeClass('jkbtn0');
        });
        $(obj).addClass('jkbtn0');
        var src = $('#ys').attr('data-href');
        $('#video').attr('src', url + src);
    }
</script>


<script>
                $(function () {
                    $('#btn-prev').click(function () {
                        $('#ys').parent().prev().children('a:eq(0)').click();
                    })//上一集
                    $('#btn-next').click(function () {
                        $('#ys').parent().next().children('a:eq(0)').click();
                    })//上一集
                })
</script>

			<div class="col-lg-wide-25 col-xs-1 stui-pannel-side hidden-sm hidden-xs">
				<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box clearfix">
				<div class="col-pd text-center" style="border: 1px solid #eee; border-radius: 5px;">
				<p style="padding: 30px; margin: 0;"><img src="<?php echo $mkcms_appbt;?>"></p><p><?php echo $mkcms_apppic;?></p>
				</div>
				</div>
				</div><!-- 扫码-->
				<div class="stui-pannel stui-pannel-bg clearfix">
					<div class="stui-pannel-box">
						<div class="stui-pannel_hd">
						<div class="stui-pannel__head active clearfix">
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-bang"></use></svg>影视热度排行榜</h3>
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
				<!--相关明星-->
				<?php
						$i=0;
						$uu1 = '# class="avator-wrap">[\s]+?<img data-src="(.*?)" src="(.*?)" alt="(.*?)">#';
						preg_match_all($uu1,$tvinfo, $lj);
						$bf = $lj[1];
						$mz = $lj[3];
						if (empty($bf)){
							$yc = 'style="display: none;"';
						}
						?>
				<div class="stui-pannel stui-pannel-bg clearfix" <?php echo $yc; ?>>
					<div class="stui-pannel-box">
						<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-star"></use></svg>相关明星</h3>
						</div>
						</div>
						<div class="stui-pannel_bd">
						<ul class="stui-vodlist__bd clearfix">
						<?php
						foreach ($bf as $gg => $qz1){
						echo "<li class='col-md-4' style='text-align: center';>
						<div class='stui-vodlist__box'>
						<a title='$mz[$gg]' class='stui-vodlist__thumb lazyload' href='/mxstar_$mz[$gg]_dy_1.html' data-original='$qz1' style='padding-top: 100%;border-radius: 50%;'>
						</a>
						<div class='stui-vodlist__detail padding-0'>
						<h4 class='title text-overflow'>
						<a title='$mz[$gg]' href='/mxstar_$mz[$gg]_dy_1.html'>$mz[$gg]</a>
						</h4>
						</div>
						</div>
						</li>";}?>
						<?php $i ++;?>
						</ul>
						</div>
					</div>
				</div>
				<!--相关明星-->
				<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box clearfix">
<div class="col-pd text-center">
<?php echo $mkcms_ad2;?>
</div>
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
<script type="text/javascript" src="/template/jingpin/js/history.js"></script>
<script type="text/javascript">var vod_name='<?php echo $timu; ?>',vod_url=window.location.href,vod_part='1';</script>
<?php include 'footer.php'; ?></>