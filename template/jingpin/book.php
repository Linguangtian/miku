<?php  include 'head.php';?>
<title>留言求片,留言板-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="留言板,留言求片">
<meta name="description" content="留言求片:把你想看的大片留言给我们。我们会争取第一时间更新上！">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<style type="text/css">.gbook-form li{ margin-top: 15px;}.gbook-form li:first-child{ margin-top: 0;}</style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
<div class="row"  style="margin-top:10px">
<div class="stui-pannel stui-pannel-x">    
<div class="col-lg-wide-3 col-xs-1"><div class="stui-pannel stui-pannel-bg clearfix"><div class="stui-pannel-box clearfix">
<div class="stui-pannel_hd"><div class="stui-pannel__head clearfix"><h3 class="title">我要留言</h3></div></div>
<form method="post" class="messages">
<div class="col-pd clearfix">
<ul class="gbook-form"><li>
<input class="form-control" type="text" placeholder="匿名" id="input1" onblur="jieshou()" name="userid"></li>
<li><textarea cols="40" rows="5" class="form-control" placeholder="说点什么吧..." id="input4" onblur="content()" name="content"></textarea></li>
<li><input id="verifycode" class="form-control" name="verifycode" type="text" size="10" placeholder="验证码" style="width: 80px; display: inline-block; margin-right: 10px;" class="text" tabindex="3" />
<img style="height: 28px; cursor:pointer;" src="../system/verifycode.php" onclick="javascript:this.src='../system/verifycode.php?'+Math.random()" style="cursor:pointer;" title="看不清？点击更换" align="absmiddle" /></li>
<li><input type="submit" value="提交" name="submit" class="btn btn-primary pull-right" />
<input type="reset" value="重填" class="btn btn-default" />
</li></ul></div></form></div>
</div></div>
<div class="col-lg-wide-7 col-xs-1">
<?php
$sql = 'select * from mkcms_book order by id desc';
$pager = page_handle('page',5,mysqli_num_rows(mysqli_query($conn,$sql)));
$result = mysqli_query($conn,$sql.' limit '.$pager[0].','.$pager[1].'');
while($row= mysqli_fetch_array($result))
	{?>
<?php
$zhStr = $row['Reply'];
?>
<div class="stui-pannel stui-pannel-bg clearfix"><div class="stui-pannel-box clearfix"><div class="col-pd clearfix"><ul><li class="topwords"><strong><?php echo $row['userid'] ?></strong><span class="text-red pull-right">第<?php echo $row['id'] ?>楼</span></li><li class="top-line" style="margin-top: 10px; padding: 10px 0;"><?php echo $row['content'] ?><br/><font color=red><?php if(0 < strlen($zhStr)){echo '管理员回复：';echo $row['Reply'];}?></font>
</li><span class="font-12 text-muted">发表于: <?php echo $row['time'] ?></span></ul></div></div></div>
<?php } ?>
<ul class="stui-page text-center">
<?php echo page_show1($pager[2],$pager[3],$pager[4],2);?>
</ul>
</div>
</div>
</div>
</div>
<?php include 'footer.php'; ?>