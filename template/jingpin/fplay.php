<?php  include 'head.php';$yl='active';
$mjk=$mkcms_mjk;
$srurl = 'http:'.$player;
$rurl = fileget2($srurl,10);
$cname='#<span id="subtitle" title="(.*?)">(.*?)</span>#';
$cimg='#<meta itemprop="thumbnailUrl" content="(.*?)"/>#';
$clink='#<link rel="canonical" href="(.*?)" />#';
preg_match_all($cname, $rurl, $carr1);
preg_match_all($cimg, $rurl, $carr2);
preg_match_all($clink, $rurl, $carr3);
$xcname = $carr1[1];
$xcimg = $carr2[1];
$xclink = $carr3[1];
$vlist='#"encodevid":"(.*?)","vid":"(.*?)","title":"(.*?)","seq"(.*?),"img":"(.*?)"#';
preg_match_all($vlist, $rurl,$arr);
$xlist = $arr[1];
$xname = $arr[3];
$ximg = $arr[5];
?>
<title><?php echo $xcname[0];?><?php echo "-娱乐视频-";echo $mkcms_seoname;?></title>
<meta name="keywords" content="<?php echo $xcname[0];?>,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $xcname[0];?>,<?php echo $mkcms_description;?>">
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
<div class="stui-player__item clearfix" style="background-color: #fff;">
<div class="stui-player__video embed-responsive embed-responsive-16by9 clearfix">
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
        $("#shiping_box").html('<iframe id="video" src="<?php echo $mjk;?>http:<?php echo $player;?>"  allowfullscreen="true" allowtransparency="true" style="width:100%;border:none"></iframe>');
    }
    //五秒钟后自动收起
    var t = setTimeout(adsUp,<?php echo $mkcms_miaoshu*1000;?>); 
</script>
</div>
<div class="stui-player__detail detail" id="dianshijuid">
				<ul class="more-btn">
				<li><a href="javascript:void(0)" onclick="location.reload()" class="btn btn-sm btn-default" title="刷新">刷新</a></li>
				<li>
				<div class="dropdown">
				<a href="javascript:scroll(0,0)" class="dropbtn btn btn-sm btn-default" title="切换线路">切换线路</a>
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
				<li><a href="javascript:scroll(0,0)" class="btn btn-default" id="btn-prev" title="上一集"><i class="icon iconfont icon-back hidden-xs"></i> 上一集</a></li>
				<li><a href="javascript:scroll(0,0)" class="btn btn-default" id="btn-next" title="下一集">下一集 <i class="icon iconfont icon-more hidden-xs"></i></a></li>
				</ul>
				<h1 class="title" id="xuji"><a></a><span class="js"></span></h1>
				</div>
</div>
<!-- 播放器-->
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box b playlist mb">
<div class="stui-pannel_hd">
<div class="stui-pannel__head bottom-line active clearfix">
<span class="more text-muted pull-right">无需安装任何插件，即可快速播放</span>
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-play"></use></svg>播放列表</h3>
</div>
					</div>
					<div class="stui-pannel_bd col-pd clearfix dianshijua" id="dianshijuid">
						<ul class="stui-content__playlist column6 clearfix">
<li style='display:none;'><a href='<?php echo $xclink[0];?>' class='btn btn-danger btn-play-source 1' title='<?php echo $xcname[0];?>'><img src='<?php echo $xcimg[0];?>' class='lazyload' alt='<?php echo $xcname[0];?>' width='100%'><br><?php echo $xcname[0];?></a></li>
<?php
foreach ($xname as $key => $xvau) {
	$do = "https://v.youku.com/v_show/id_".$xlist[$key].".html";
?>
<li class='zyli'><a href='<?php echo $do;?>' class='btn btn-danger btn-play-source 1' title='<?php echo $xname[$key];?>'><img src='<?php echo $ximg[$key];?>' class='lazyload' alt='<?php echo $xname[$key];?>' width='100%'><br><?php echo $xname[$key];?></a></li>
<?php } ?>
						</ul>
					</div>
	</div>
</div>
<!-- 播放地址-->
</div>
<script>
 $(function () {
	 $.each($('.dianshijua'),function () {
		var al = $('.stui-content__playlist a');
		al.attr('class','btn-play-source am-btn am-btn-default lipbtn');
		});
		$.each($('.lipbtn'),function () {
			var url = $(this).attr('href');
			$(this).attr('data-href',url);
			$(this).attr('href','javascript:;');
			$(this).attr('onclick','bofang(this)');
			});
			$('#xlus').children('a:eq(0)').addClass('jkbtn');
			var autourl = $('.lipbtn:eq(0)').attr('data-href');
			$('.lipbtn:eq(0)').attr('id','ys');
			var text = $('.lipbtn:eq(0)').text();
			$('.js').text(''+text+'');
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
$('.js').text('' + text+'');
$.each($('.lipbtn'), function () {
$(this).attr('id','');
});
$(obj).attr('id','ys');
var jiekou = $('.jkbtn').attr('data-jk');
if (href != '' || href != null) {
setTimeout(function () {
$('#video').attr('src', jiekou + href);
},0)}}
function xldata(obj) {
	var url = $(obj).attr('data-jk');
	$.each($('.jkbtn'), function () {
		$(this).removeClass('jkbtn');});
		$(obj).addClass('jkbtn');
		var src = $('#ys').attr('data-href');
		$('#video').attr('src', url + src);}
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
						$chuandi='/vod'.$bdurl;
		  echo "<li class='col-xs-1 padding-0'><a class='text-overflow' href='$chuandi' title='$title'><span class='am-badge am-round pull-left'>$topnum</span><span class='text-muted pull-right'>$bdnum</span><em class='text-red'></em>&nbsp;$title</a></li>";
      }
      ?>
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
						$chuandi='/vod'.$bdurl;
		  echo "<li class='col-xs-1 padding-0'><a class='text-overflow' href='$chuandi' title='$title'><span class='am-badge am-round pull-left'>$topnum</span><span class='text-muted pull-right'>$bdnum</span>
		 <em class='text-red'></em>&nbsp;$title</a></li>";}?>
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
<script type="text/javascript">var vod_name='<?php echo $xcname[0];?>',vod_url=window.location.href,vod_part='1';</script>
<?php include 'footer.php'; ?>