<?php
include 'head.php';
$yy='active';
ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; SV1; .NET CLR 1.1.4322)');
$surl = 'http://www.yy.com/shenqu/show/info.do?resid=' .$_GET['post']. '';
$url = fileget($surl,5);
$lname ='#"songName":"(.*?)"#';
$aname ='#"anchorName":"(.*?)"#';
$cname ='#"watchCount":"(.*?)"#';
$uu1 = '#"resurl":"(.*?)"#';
preg_match_all($lname,$url, $xarr);
preg_match_all($aname,$url, $xarr1);
preg_match_all($cname,$url, $xarr2);
preg_match_all($uu1,$url, $lj);
$xname = $xarr[1];
$bname = $xarr1[1];
$rname = $xarr2[1];
$bf = $lj[1];
foreach ($xname as $cc => $dd){
	$ee=$bname[$cc];
	$hh=$rname[$cc];
?>
<title><?php echo $dd;?>-<?php echo $ee;?>-美女跳舞视频-YY舞曲-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="<?php echo $dd;?>,<?php echo $ee;?>,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $dd;?>-<?php echo $ee;?>,<?php echo $mkcms_description;?>">
<style type="text/css">
#timer{background: rgba(0, 0, 0, 0.59);padding: 5px;text-align: center;width: 30px;position: absolute;top: 5%;right: 2%;color: #fff;font-size: 16px;border-radius: 50%;height: 30px;line-height: 20px}
#xiang{background: rgba(177, 13, 13, 0.87);padding: 5px;text-align: center;width: auto;position: absolute;bottom: 2%;right: 1%;color: #fff;font-size: 16px;border-radius: 10px;height: 20px;line-height: 9px}
#ys,.jkbtn{border: 1px solid #FF9900;background-color: #FF9900;color: #FFFFFF;}
.stui-player__video {margin-bottom: 10px;}
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
			<div class="stui-player__item clearfix">
				<div class="stui-player__video embed-responsive embed-responsive-16by9 clearfix">
					<div id="shiping_box"></div>
					<?php
					foreach ($bf as $gg => $qz1){
					?>
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
					$("#shiping_box").html('<iframe id="video" src="/ck/index.php?url=<?php echo $qz1;?>"  allowfullscreen="true" allowtransparency="true" style="width:100%;border:none"></iframe>');
					}
					//五秒钟后自动收起
					var t = setTimeout(adsUp,<?php echo $mkcms_miaoshu*1000;?>);   
					</script>
					<?php }?>
				</div>
				<div class="stui-player__detail detail" id="dianshijuid">
				<ul class="more-btn">
				<li><a href="javascript:void(0)" onclick="location.reload()" class="btn btn-sm btn-default">刷新</a></li>
				</ul>
				<h1 class="title" id="xuji"><a href="<?php echo $links;?>" title="<?php echo $dd;?><?php echo $ee;?>"><?php echo $dd;?>-<?php echo $ee;?></a><span class="js"></span></h1>
				<span class="text-muted">主播：</span><?php echo $ee;?><span class="split-line"></span>
				<span class="text-muted">人气指数：</span><?php echo $hh;?>
				</div>
				<?php }?>
			</div><!-- 播放器-->
			<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box b playlist mb">
					<div class="stui-pannel_hd">
						<div class="stui-pannel__head bottom-line active clearfix">
						<span class="more text-muted pull-right">无需安装任何插件，即可快速播放</span>
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-play"></use></svg>相关视频</h3>
						</div>
					</div>
					<div class="stui-pannel_bd col-pd clearfix dianshijua" id="dianshijuid">
						<ul class="stui-content__playlist column6 clearfix">
						<?php
						$url1 = 'http://www.yy.com/shenqu/play/id_' .$_GET['post']. '.html';
						$url2 = fileget($url1,5);
						$link1 ='#<a class="v-related__item" href="(.*?)" data-url="(.*?)" data-title="(.*?)">[\s\S]+?<div class="v-related__item__cover card">[\s\S]+?<img src="(.*?)?ips_thumbnail/4/0/w/220/h/124/blur/1/format=jpg" alt="(.*?)">#';
						preg_match_all($link1,$url2,$ff);
						$link2 = $ff[1];
						$ximg = $ff[4];
						$title = $ff[3];
						$ximg = str_replace('?','', $ximg );
						$ximg = str_replace('//','http://', $ximg );
						$xlink = str_replace('/shenqu/play/id_','', $link2);
						foreach ($title as $key => $xvau) {
						$do='/yplay/'.$xlink[$key];
						?>
						<li class='zyli'><a href='<?php echo $do;?>' class='btn btn-play-source 1'><img src='<?php echo $ximg[$key];?>' class='lazyload'  height='70px'><br><?php echo $xvau;?></a></li>
						<?php } ?>
						</ul>
					</div>
				</div>
			</div><!-- 播放地址-->
		</div>
		<div class="col-lg-wide-25 col-xs-1 stui-pannel-side hidden-sm hidden-xs">
			<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box">
					<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-bang"></use></svg>神曲风云榜</h3>
						</div>
					</div>
					<div class="stui-pannel_bd clearfix">
						<ul class="stui-vodlist__text active col-pd clearfix">
						<?php
						$url0 = 'http://www.yy.com/shenqu/hot/daily.html';
						$url = fileget($url0,5);
						$hot = '#<span class="hot-count"><i class="hot-ico" title="热度"></i><i>(.*?)</i></span>#';
						$top = '#<span class="rank-index(.*?)">(.*?)</span>#';
						$link = '#<a href="(.*?)" class="target-link" title="(.*?)"></a>#';
						preg_match_all($hot,$url,$bd1);
						preg_match_all($top,$url,$bd2);
						preg_match_all($link,$url,$bd3);
						$xhot = $bd1[1];
						$xtop = $bd2[2];
						$xlink = $bd3[1];
						$title = $bd3[2];
						$xlink = str_replace('/shenqu/play/id_','', $xlink);
						$i = 0;
						foreach ($title as $key => $xvau) {
						if ($i<20){
						$do='/yplay/'.$xlink[$key];
						echo "<li class='col-xs-1 padding-0'><a class='text-overflow' href='$do' title='$xvau'><span class='am-badge am-round pull-left'>$xtop[$key]</span><span class='text-muted pull-right'>$xhot[$key]</span><em class='text-red'></em>&nbsp;$xvau</a></li>";
						$i ++;}}
						?>
						</ul>
					</div>
				</div>
			</div>
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
<script type="text/javascript" src="/template/jingpin/js/history.js"></script>
<script type="text/javascript">var vod_name='<?php echo $dd;?>-<?php echo $ee;?>',vod_url=window.location.href,vod_part='1';</script>
<?php include 'footer.php'; ?>