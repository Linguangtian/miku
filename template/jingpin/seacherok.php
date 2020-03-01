<?php include 'head.php';?>
<title>《<?php echo $q?>》在线观看-全网免费VIP影视搜索-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="<?php echo $q?>,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
<link href="/template/jingpin/css/zy.css" rel="stylesheet" type="text/css" />
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
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-remen"></use></svg><span style="color: #dd514c;">温馨提示：</span>若无影片资源可切换资源网进行搜索《<a href="/seacher-<?php echo $q?>.html" title="<?php echo $q?>"><?php echo $q?></a>》相关的影片
						</div>
						</div>
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
				<div class="stui-pannel_hd">
			<div class="stui-pannel__head active bottom-line clearfix">
				<span class="more text-muted pull-right hidden-xs"></span>
					<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg><span style="color: #FF00FF;">OK资源：</span>搜索到与《<a href="/seacher-<?php echo $q?>.html" title="<?php echo $q?>"><?php echo $q?></a>》相关的影片
					</h3>
			</div>
		</div>
		<div class="stui-pannel_hd">
		<ul class="stui-vodlist__media col-pd clearfix">
		<?php 
						foreach($data["data"] as $i =>$name){
						$dd="./okzyplay.php?id=";
						if ($data['data'][$i]['vod_cid']<30 ){
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
							
							<p class="margin-0 hidden-smss hidden-xss"><div class="m-description"><span class="text-muted">简介：</span><?php echo $data["data"][$i]["vod_content"]; ?></div></p><p class="margin-0 hidden-smss hidden-xss"><a class="text-muted" <?php echo $ok;?> href="<?php echo $ccb.$html;?>">查看详情</a></p>
							</div>
							</li>
						<?php }} ?>
						<?php $cxsearch=$data["data"][0]["vod_name"]; if (empty($cxsearch)||$data['data'][$i]['vod_cid']>=30 ){?> <p style="text-align: center;"><img class="sosoimg" src="/template/jingpin/img/blank.png" alt="暂无内容"/></p><?php }?>
						</ul>
					</div>
						</div>				</div>
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