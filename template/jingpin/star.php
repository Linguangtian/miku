<?php 
include 'head.php';
$mx='active';
?>
<title><?php if (!empty($mxq)) {echo '《'.$mxq.'》';} else{echo $mxq;}?>最新电影-最新电视剧-明星个人资料剧情综艺节目-VIP高清影院视频抢先片免费在线观看-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="<?php echo $mxq?>,影视资源,影片资源搜索,最新剧集,好看剧集,最新剧集排行,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
<script type="text/javascript">
function submit(){var str=document.getElementById("wd").value;if(str==""||str==null){alert("请输入影片关键词")}else{var s=$("#wd").val();s=s.replace(/\s/g,"");window.location.href="/seacher-"+s+".html"}};
</script>
</head>
<body>
<?php  include 'header.php';?>
	<div class="container">
		<div class="row">
			<div class="stui-pannel stui-pannel-bg clearfix">
					<div class="hy-video-head" style=" text-align: center;">
                        <h4 class="margin-t0"><span style="color:#F05D2E;">请在下方输入<span style="color:red">【明星名称】</span>进行搜索</span></h4>
                            <div class="row" style="padding-left: 5px; padding-right: 5px;">
<div class="col-md-3"></div>
<div class=" col-md-3">
<div class="input-group">
<div class="input-group-addon">明星名称：</div>
<input tabindex="2" class="form-control searchall" id="searchs" name="sousuo" type="text" placeholder="在这里输入明星关键词" value="<?php echo $mxq?>" required="required" onkeydown='if(event.keyCode==13){cu.click()}' />
<span class="input-group-btn "> 
<button id="cu" class="btnn btn-danger" onclick="sub3()"> &nbsp; 搜 &nbsp; 索 &nbsp; </button>
</span>
</div>
<div style="display:none;">
<div class="input-group">
<select style="color:#999999;" name="mode" id="mode" class="form-control">
<option value="mxstar">请输入明星名称搜索</option>
</select></div><!-- /input-group -->
</div>
</div>  
<div class="col-md-3"></div>
</div>
<p style="text-align: center; margin: 15px 0 10px 0;"><span style="color:#d9534f; padding: 5px;">温馨提示：如没有您想要的搜索结果，请通过邮箱反馈给我们，我们将尽快更新相关影片！</span></p>
</div>
<?php 
$flid1 = $mxq;
$leixing = $_GET['tab'];
if (!empty($flid1)){?>
			<div class="stui-pannel_hd">
				<div class="stui-pannel__head active bottom-line clearfix">
					<span class="more text-muted pull-right hidden-xs">最近更新<a href="/mxstar_<?php echo $mxq;?>_dy_1.html"><?php if (!empty($mxq)) {echo '《'.$mxq.'》';} else{echo $mxq;}?></a>的影片</span>
					<ul class="nav nav-head">
					<li <?php if ($leixing=="dy"){echo 'class="active"';}?>><a href="/mxstar_<?php echo $flid1;?>_dy_1.html">电影</a></li>
					<li <?php if ($leixing=="ds"){echo 'class="active"';}else{};?>><a href="/mxstar_<?php echo $flid1;?>_ds_1.html">电视剧</a></li>
					<li <?php if ($leixing=="zy"){echo 'class="active"';}else{};?>><a href="/mxstar_<?php echo $flid1;?>_zy_1.html">综艺</a></li>
					<li <?php if ($leixing=="dm"){echo 'class="active"';}else{};?>><a href="/mxstar_<?php echo $flid1;?>_dm_1.html">动漫</a></li>
					</ul>
				</div>
			</div>
			<div class="stui-pannel_bd">
				<ul class="stui-vodlist clearfix">
					<?php
					$flid1=$_GET['wd'];
					$pageno=$_GET['pageno'];
					if ($leixing==""){
						$leixing='dy';
					}
					include 'system/360mx.php';
					if (!empty($mingxing4)){
					echo '<div class="stui-pannel-box">
		<div class="stui-content__thumb">
			<a class="stui-vodlist__thumb picture v-thumb" href="'.$mingxing4[0].'" data-original="'.$mingxing5[0].'" target="_blank" title="'.$mingxing6[0].'">
			<img src="'.$mingxing5[0].'" data-original="'.$mingxing5[0].'" onerror=src="/template/jingpin/img/load.gif" alt="'.$mingxing6[0].'" title="'.$mingxing6[0].'" width="100%"/>
			<span class="pic-text text-right"></span>
			</a>
		</div>
	<div class="stui-content__detail">
	<div class="col-md-1"><h1 class="title"><a href="'.$mingxing4[0].'" target="_blank" title="'.$mingxing4[0].'">'.$mingxing6[0].'</a></h1></div>
	<div class="col-md-3 col-sm-2 col-xs-2">别名：'.$mingxing6[0].'</div>
	<div class="col-md-3 col-sm-2 col-xs-2">地区：'.$mingxing8[0].'</div>
	<div class="col-md-3 col-sm-2 col-xs-2">生日：'.$mingxing9[0].'</div>
	<div class="col-md-3 col-sm-2 col-xs-2">星座：'.$mingxing10[0].'</div>
	<div class="col-md-3 col-sm-2 col-xs-2">血型：'.$mingxing11[0].'</div>
	<div class="col-md-3 col-sm-2 col-xs-2">身高：'.$mingxing12[0].'</div>
	<div class="col-md-3 col-sm-2 col-xs-2">体重：'.$mingxing13[0].'</div>
	<div class="col-md-1 col-sm-1 col-xs-1">介绍：'.$mingxing14[0].'</div>
	</div>
	</div>';}
					foreach ($mingxing as $k=>$mx){
					$mvsrc1 = str_replace("http://www.360kan.com", "", "$mingxing[$k]");
							$tupian=$mingxing1[$k];
							$title=$mingxing2[$k];
							$jishu=$mingxing3[$k];
							$chuandi='../../vod'.$mvsrc1;
					echo "<li class='col-md-7 col-sm-4 col-xs-3'><div class='stui-vodlist__box'>
					<a class='stui-vodlist__thumb lazyload' href='".$chuandi."' title='".$title."' data-original='".$tupian."'>
					<span class='play hidden-xs'></span>";
					echo "<span class='pic-tag pic-tag-b'>".$jishu."</span></a>
					<div class='stui-vodlist__detail'>
					<h4 class='title text-overflow'><a href='".$chuandi."' title='".$title."'>".$title."</a></h4>
					</div>
					</div>
					</li>"; 
					}?>
				</ul>
              
							<ul class="stui-page text-center cleafix"><?php if (!empty($mingxing)){?>
<?php include('system/mxfenye.php');?><?php }else{?><p style="text-align: center;"><img class="sosoimg" src="/template/jingpin/img/blank.png" alt="暂无内容"/></p><?php }?>
</ul></div>
 <?php } else{echo "";}?>
			<div class="single-strong" style="color: #333;"><a href="/star.html" title="今日女明星排行榜">今日女明星排行榜</a></div>
			<ul class="wprm">
				<b><?php
					$queryURL = "http://top.baidu.com/buzz?b=1570&c=9&fr=topbuzz_b454_c9";
					$useragent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)";
					$header = array("Accept-Language: zh-cn", "Connection: Keep-Alive", "Cache-Control: no-cache");
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_REFERER, $queryURL);
					curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
					curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
					curl_setopt($ch, CURLOPT_URL, $queryURL);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
					$result = curl_exec($ch);
					$result = mb_convert_encoding($result, "utf-8", "gb2312");
					$result = str_replace("/ct/", "/play?make=dongman&id=", $result);
					$pattern = "#<a class=\"list-title\" target=\"_blank\" href=\"(.*?)\" href_top=\"(.*?)\">(.*?)</a>#";
					preg_match_all($pattern, $result, $matches);
					$xh = 0;
					while ($xh < 50) {?>
					<li><a href="/mxstar_<?php echo $matches[3][$xh];?>_dy_1.html" style="color:#333;" onclick="document.getElementById('searchs').value='<?php echo $matches[3][$xh];?>'" title="<?php echo $matches[3][$xh];?>"><?php echo $matches[3][$xh];?></a></li>
					<?php
						$xh = $xh + 1;}?>
				</b>
			</ul>
		</div>
		<div class="stui-pannel stui-pannel-bg clearfix">
			<div class="single-strong" style="color: #333;"><a href="/star.html" title="今日男明星排行榜">今日男明星排行榜</a></div>
			<ul class="wprm">
				<b>
				<?php
					$queryURL = "http://top.baidu.com/buzz?b=1569&c=9&fr=topbuzz_b1569_c9";
					$useragent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)";
					$header = array("Accept-Language: zh-cn", "Connection: Keep-Alive", "Cache-Control: no-cache");
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_REFERER, $queryURL);
					curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
					curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
					curl_setopt($ch, CURLOPT_URL, $queryURL);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
					$result = curl_exec($ch);
					$result = mb_convert_encoding($result, "utf-8", "gb2312");
					$result = str_replace("/ct/", "/play?make=dongman&id=", $result);
					$pattern = "#<a class=\"list-title\" target=\"_blank\" href=\"(.*?)\" href_top=\"(.*?)\">(.*?)</a>#";
					preg_match_all($pattern, $result, $matches);
					$xh = 0;
					while ($xh < 49) {?>
					<li><a href="/mxstar_<?php echo $matches[3][$xh];?>_dy_1.html" style="color:#333;" onclick="document.getElementById('searchs').value='<?php echo $matches[3][$xh];?>'" title="<?php echo $matches[3][$xh];?>"><?php echo $matches[3][$xh];?></a></li>
					<?php
						$xh = $xh + 1;}?>
				</b>
			</ul>
			</div>
            <div class="stui-pannel stui-pannel-bg clearfix">
			<div class="single-strong" style="color: #333;"><a href="/star.html" title="今日欧美明星排行榜">今日欧美明星排行榜</a></div>
			<ul class="wprm">
				<b>
				<?php
					$queryURL = "http://top.baidu.com/buzz?b=491&c=9&fr=topbuzz_b1569_c9";
					$useragent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)";
					$header = array("Accept-Language: zh-cn", "Connection: Keep-Alive", "Cache-Control: no-cache");
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_REFERER, $queryURL);
					curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
					curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
					curl_setopt($ch, CURLOPT_URL, $queryURL);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
					$result = curl_exec($ch);
					$result = mb_convert_encoding($result, "utf-8", "gb2312");
					$result = str_replace("/ct/", "/play?make=dongman&id=", $result);
					$pattern = "#<a class=\"list-title\" target=\"_blank\" href=\"(.*?)\" href_top=\"(.*?)\">(.*?)</a>#";
					preg_match_all($pattern, $result, $matches);
					$xh = 0;
					while ($xh < 50) {?>
					<li><a href="/mxstar_<?php echo $matches[3][$xh];?>_dy_1.html" style="color:#333;" onclick="document.getElementById('searchs').value='<?php echo $matches[3][$xh];?>'" title="<?php echo $matches[3][$xh];?>"><?php echo $matches[3][$xh];?></a></li>
					<?php
						$xh = $xh + 1;}?>
				</b>
			</ul>
			</div>
		</div>
 </div>
<?php  include 'footer.php';?>