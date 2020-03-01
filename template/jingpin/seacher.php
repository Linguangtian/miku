<?php include 'head.php';?>
<title>《<?php echo $q?>》在线观看-全网免费VIP影视搜索-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="<?php echo $q?>,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">

<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<body>
<?php  include 'header.php';?>
<div class="container">
	<div class="row">
		<div class="col-lg-wide-75 col-xs-1 padding-0">
			<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box">
					<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
						<span class="more text-muted pull-right hidden-xs"></span>
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg><span style="color: #FF00FF;">全网资源：</span>搜索到与《<a href="/seacher-<?php echo $q?>.html" title="<?php echo $q?>"><?php echo $q?></a>》相关的影片
					</h3>
						</div>
					</div>
					<div class="stui-pannel_bd">
						
<?php 
if (!empty($one)){
echo '<ul class="stui-vodlist__media col-pd clearfix">';
foreach ($one as $ni=>$cs){ 
$mvsrc1 = str_replace("http://www.360kan.com", "", "$five[$ni]");
$jianjie= str_replace("<p class=\"js-m-descwrap\">", '', "$four[$ni]");
$jianjie= str_replace("<div class=\"m-description\">",'', "$jianjie");
$jianjie= str_replace("<div>",'', "$jianjie");
$jianjie= str_replace("<p>",'', "$jianjie");
$jianjie= str_replace("</p>",'', "$jianjie");
$jianjie= str_replace("<i>", "<span class=text-muted>", "$jianjie");
$jianjie= str_replace("</i>","</span>", "$jianjie");
$jianjie= str_replace("</div>",'', "$jianjie");
$tupian=$two[$ni];
$chuandi='../../vod'.$mvsrc1;
//结束
$d_scontent=explode(',',$mkcms_shoufei);
for($i=0;$i<count($d_scontent);$i++)
{
if($cs==$d_scontent[$i]){
//提示错误值
$xianshi='style="display:none"';
}
}
?>
							<li class ="activeclearfix" <?php echo $xianshi?>>
							<div class="thumb">
							<a class="v-thumb stui-vodlist__thumb lazyload" href="<?php echo $chuandi?>" title="<?php echo $cs?>" data-original="<?php echo $tupian?>"><span class="play hidden-xs"></span>
							<?php if (!(strpos($three[$ni],"电影"))){ echo '<span class="pic-tag pic-tag-h">'.$jishu[$ni].'</span>';}?>
							<?php if (!(strpos($three[$ni],"电视剧"))){ echo '<span class="pic-tag pic-tag-b">'.$six[$ni].'</span>';}?>
							<span class="pic-text text-right"></span></a>
							</div>
							<div class="detail">
							<h3 class="title"><a href="<?php echo $chuandi?>"><?php echo $cs?><?php echo $three[$ni]?></a></h3>
							<p class="margin-0 hidden-smss hidden-xss"><div class="m-description"><?php echo $jianjie?></div></p>
							<p class="margin-0 hidden-smss hidden-xss"><a class="text-muted" href="<?php echo $chuandi?>">查看详情</a></p>
							</div>
							</li>
							<?php }echo '</ul>';}else if(!empty($mingxing)){
							echo '<ul class="stui-vodlist clearfix">';
							foreach ($mingxing as $k=>$mx){ 
							$mvsrc1 = str_replace("http://www.360kan.com", "", "$mingxing[$k]");
							$tupian=$mingxing1[$k];
							$title=$mingxing2[$k];
							$jishu=$mingxing3[$k];
							$fenshu1=$mingxing5[$k];
							$chuandi='../../vod'.$mvsrc1;
							//结束
							?>
							<li class="col-md-5 col-sm-4 col-xs-3">
							<div class='stui-vodlist__box stui-vodlist__bg'>
<a class="stui-vodlist__thumb lazyload" href="<?php echo $chuandi?>" title="<?php echo $title?>" data-original="<?php echo $tupian?>">
<span class="play hidden-xs"></span>
<?php if (!($fenshu1 == "")){ echo '<span class="pic-tag pic-tag-h">'.$fenshu1.'</span>';}?>
<span class="pic-tag pic-tag-b"><?php echo $jishu?></span>
</a>
<div class="stui-vodlist__detail  active">
<h4 class="title text-overflow"><a href="<?php echo $chuandi?>" title="<?php echo $title?>"><?php echo $title?></a></h4>
<p class="text text-overflow text-muted hidden-xs">主演：<?php echo $q?></p>
</div>
</div>
</li>
<?php }echo '</ul><p style="text-align: center;height: 50px;background: #eee;line-height: 50px;font-size: 16px;cursor: pointer;"><a href="/mxstar_'.$q.'_dy_1.html" title="更多 '.$q.' 的影片">点击查看 '.$q.' 更多影片&gt;&gt;</a></p>';} else {echo '<p style="text-align: center;"><img class="sosoimg" src="/template/jingpin/img/blank.png" alt="暂无内容"/></p>';}?></div>
				<div class="stui-pannel_hd">
			<div class="stui-pannel__head active bottom-line clearfix">
				<span class="more text-muted pull-right hidden-xs"></span>
					<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg><span style="color: #FF00FF;">尝鲜资源：</span>搜索到与《<a href="/seacher-<?php echo $q?>.html" title="<?php echo $q?>"><?php echo $q?></a>》相关的影片
					</h3>
			</div>
		</div>
		<div class="stui-pannel_hd">
		<ul class="stui-vodlist__media col-pd clearfix">
			<?php  
						foreach($data["data"] as $i =>$name){
						$dd="./cxplay.php?id=";
						if ($data['data'][$i]['vod_cid']<16 ){
						$cmname = explode("<",$data['data'][$i]['vod_name']);
						$ccb=$dd.$data['data'][$i]['vod_id'];
						$html="";
						$c_scontent=explode(',',$mkcms_shoufei);
for($c=0;$c<count($c_scontent);$c++)
{
if($data["data"][$i]["vod_name"]==$c_scontent[$c]){
//提示错误值
$cxianshi='style="display:none"';
}
}
						if ($row['d_jifen']>0){
							$ok="onclick=\"return confirm('此视频为收费视频，观看需要支付".$row['d_jifen']."积分，您是否观看？')\"";}
							else{$ok="";}?>
							<li class ="activeclearfix"  <?php echo $xianshi?>>
							<div class="thumb">
							<a class="v-thumb stui-vodlist__thumb lazyload" <?php echo $ok;?> href="<?php echo $ccb.$html;?>" title="<?php echo $cmname[0]; ?>" data-original="<?php echo $data["data"][$i]["vod_pic"]; ?>"><span class="play hidden-xs"></span>
							<span class="pic-tag pic-tag-h"><?php echo $data["data"][$i]["vod_continu"];?> </span>
							<span class="pic-tag pic-tag-b"><?php echo $data["data"][$i]["vod_area"];?> </span>
							<span class="pic-text text-right"></span></a>
							</div>
							<div class="detail">
							<h3 class="title"><a href="<?php echo $ccb.$html;?>"><?php echo $cmname[0]; ?><span class="playtype"><?php echo $data["data"][$i]["list_name"];?>·<?php echo $data["data"][$i]["vod_year"];?></span></a></h3>
							<p class="margin-0 hidden-smss hidden-xss"><div class="m-description"><span class="text-muted">主演：</span><?php echo $data["data"][$i]["vod_actor"]; ?></span></p>
							<p class="margin-0 hidden-smss hidden-xss"><div class="m-description"><span class="text-muted">简介：</span><?php echo $data["data"][$i]["vod_content"]; ?></div></p><p class="margin-0 hidden-smss hidden-xss"><a class="text-muted" <?php echo $ok;?> href="<?php echo $ccb.$html;?>">查看详情</a></p>
							</div>
							</li>
						<?php }} ?>
						<?php $cxsearch=$cmname[0]; if (empty($cxsearch)||$data['data'][$i]['vod_cid']>=16 ){?> <p style="text-align: center;"><img class="sosoimg" src="/template/jingpin/img/blank.png" alt="暂无内容"/></p><?php }?>
						</ul>
						</div>
<p style="text-align: center;height: 50px;background: #eee;line-height: 50px;font-size: 16px;cursor: pointer;"><a href="./so.html" title="更多 <?php echo $q?> 的影片">如果没有 《<?php echo $q?>》 相关的影片点击进入全网搜&gt;&gt;</a></p>
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
		</div>
	</div>
</div>
<?php  include 'footer.php';?>