<?php  include 'head.php';$shop='active'?>
<title>天猫优惠券-每天实时更新千款优惠券，一折限时疯抢！-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="淘宝优惠券,天猫优惠券,优惠券折扣,9块9包邮,限时特卖,优品折扣,领券优惠,专业砍价,<?php echo $mkcms_keywords;?>">
<meta name="description" content="每天实时更新千款优惠券，纯人工筛选验货，限时限量特卖，全场1折包邮！">
</head>
<body>
<?php include 'header.php';?>
<div class="container">
<div class="row">
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-shopping"></use></svg>好货精选</h3>
</div>
</div>
</div>
<div class="stui-pannel_bd">
<ul class="stui-vodlist clearfix">
<?php
$i = 0;
foreach ($xtid as $cc => $dd){
if ($i<100){
$pic=$xtpic[$cc];
$title=$xttitle[$cc];
$yuanjia = $xyuanjia[$cc];
$jiage = $xjiage[$cc];
$quan = $xquan[$cc];
header('Content-Type:text/html;charset=UTF-8');
$title =  preg_replace_callback('/\\\\u([0-9a-f]{4})/i', create_function('$matches', 'return iconv("UCS-2BE","UTF-8",pack("H*", $matches[1]));'), $title);
				echo '<li class="col-md-5 col-sm-3 col-xs-2 ';
				if ($i>=98){echo 'hidden-xs';}
				echo '">';
	?>
<div class='stui-vodlist__box'>
<a class='stui-vodlist__thumb lazyload' style='padding-top:100%;' href='<?php echo $url;?>?r=l/d&u=<?php echo $u;?>&id=<?php echo $dd;?>' target='_blank' title='<?php echo $title;?>' data-original='<?php echo $pic;?>'>
<span class='pic-tag pic-tag-l'>原价<?php echo $yuanjia;?></span>
<span class='pic-tag pic-tag-b'>￥<?php echo $jiage;?></span>
<span class='pic-tag pic-tag-h'><?php echo $quan;?>元券</span>
</a>
<div class='stui-vodlist__detail'>
<h4 class='title text-overflow'><a href='<?php echo $url;?>?r=l/d&u=<?php echo $u;?>&id=<?php echo $dd;?>' target='_blank' title='<?php echo $title;?>'><?php echo $title;?></a></h4>
</div>
</div>
</li>
<?php $i ++;}} ?> 
</ul>
</div>
</div>
</div>
</div>
<ul class="stui-page text-center cleafix">
<?php include('system/shopfy.php');?>
</ul>
<?php  include 'footer.php';?>