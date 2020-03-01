<?php
$url= $_GET['url'];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<title>m3u8</title>
<style type="text/css">body,html,.a1{background-color:#000;padding: 0;margin: 0;width:100%;height:100%;}</style>
<script type="text/javascript" src="ckplayer/ckplayer.js"></script>
</head>
<body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false" style="overflow-y:hidden;">
<div id="video" style="width:100%;height:100%;"></div>
<script type="text/javascript">
	var videoObject = {
		container:'#video',
		variable:'player',
		autoplay:true,
		mobileCkControls:true,//是否在移动端（包括ios）环境中显示控制栏
		mobileAutoFull:true,//在移动端播放后是否按系统设置的全屏播放
		video:'<?php echo $url ?>'
	};
	var player=new ckplayer(videoObject);
</script>
</body>
</html>
