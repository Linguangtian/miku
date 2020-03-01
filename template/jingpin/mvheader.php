<div id="wrap" class="flex-wrap flex-vertical">
<div id="main" class="flex-con">
<!--head-->
<header class="stui-header__top clearfix" id="header-top">
<div class="container">
<div class="row">
<div class="stui-header_bd clearfix">
<div class="stui-header__logo">
<a class="logo" href="/index.html"></a>
</div>
<ul class="stui-header__menu">
<li class="<?php echo $index;?>"><a href="/index.html">首页</a></li>
<li class="<?php echo $movie;?> hidden-xs"><a href="/movie.html">电影</a></li>
<li class="<?php echo $tv;?> hidden-xs"><a href="/tv.html">剧集</a></li>
<li class="<?php echo $dm;?> hidden-xs"><a href="/dongman.html">动漫</a></li>
<li class="<?php echo $zy;?> hidden-xs"><a href="/zongyi.html">综艺</a></li>
<li><a href="javascript:;">更多 <i class="icon iconfont icon-moreunfold"></i></a>
<ul class="dropdown">
<li class="<?php echo $movie;?>"><a href="/movie.html">电影</a></li>
<li class="<?php echo $tv;?>"><a href="/tv.html">剧集</a></li>
<li class="<?php echo $dm;?>"><a href="/dongman.html">动漫</a></li>
<li class="<?php echo $zy;?>"><a href="/zongyi.html">综艺</a></li>
<li class="<?php echo $yl;?>"><a href="/yule.html">娱乐</a></li>
<li class="<?php echo $mv;?>"><a href="/mv.html">MV</a></li>
<li class="<?php echo $music;?>"><a href="/music.html">音乐</a></li>
<li class="<?php echo $yy;?>"><a href="/yy.html">美女</a></li>
<li class="<?php echo $cx;?>"><a href="/cx.html">尝鲜</a></li>
<li class="<?php echo $zx;?>"><a href="/news.html">资讯</a></li>
<li class="<?php echo $zb;?>"><a href="/zhibo.html">直播</a></li>
<li class="<?php echo $mx;?>"><a href="/star.html">明星</a></li>
<li class="<?php echo $mx;?>"><a href="/huya.php">虎牙直播</a></li>
<li class="<?php echo $hj;?>"><a href="/hjzb.php">花椒直播</a></a></li>
<li class="<?php echo $kg;?>"><a href="/mv1.php">酷狗MV</a></a></li>
<li class="<?php echo $jx;?>"><a href="/jx.html">视频解析</a></li>
<li class="<?php echo $so;?>"><a href="/so.html">全网搜</a></li>
<?php $result = mysqli_query($conn,'select * from mkcms_nav order by id asc');while($row = mysqli_fetch_array($result)) {?>
<li class="act<?php echo $row['id'];?>"><a href="<?php echo $row['n_url'];?>" target="_blank"><?php echo $row['n_name'];?></a></li><?php } ?>
</ul>
</li>
</ul>
<script type="text/javascript" src="/template/jingpin/js/jquery.autocomplete.js"></script>
<div class="stui-header__search">
<input type="text" id="sousuo" name="sousuo" class="mac_wd form-control" value="<?php echo $q?>" placeholder="输入明星、MV关键词" onkeydown='if(event.keyCode==13){mv.click()}'/>
<button class="submit" id="mv" type="submit" onclick="submv()"><i class="icon iconfont icon-search"></i></button>
<a class="search-close visible-xs" href="javascript:;"><i class="icon iconfont icon-close"></i></a>
</div>
<ul class="stui-header__user">
<li>
<?php if($_SESSION['user_name']!=''){?>
<a href="javascript:;"><i class="icon iconfont icon-account"></i></a>
<div class="userdown">
<ul class="history clearfix">
<li><a href="#" title="个人设置">个人设置</a></li>
<li class="top-line"><a href="#" title="账号中心">账号中心</a></li>
<li class="top-line"><a href="#" title="退出登录">退出登录</a></li>
</ul>
</div>
<?php }else{?>
<a href="#" title="账户"><i class="icon iconfont icon-account"></i></a>
<?php }?>
</li>
<li>
<a href="javascript:;"><i class="icon iconfont icon-clock"></i></a>
<div class="dropdown">
<h5 class="margin-0 text-muted">
<a class="historyclean text-muted pull-right" href="">清空</a>播放记录
</h5>
<ul class="history clearfix" id="stui_history"></ul>
</div>
</li>
<li class="hidden-xs">
<a href="/book.html" title="留言板"><i class="icon iconfont icon-comments"></i></a>
</li>
<li class="hidden-xs">
<a href="/" title="APP下载"><i class="icon iconfont icon-icondownload"></i></a>
</li>
<li class="visible-xs">
<a class="open-search" href="javascript:;"><i class="icon iconfont icon-search"></i></a>
</li>
</ul>
</div>
</div>
</div>
</header>
<script type="text/javascript">
	$(".stui-header__user li,.stui-header__menu li").click(function(){
		$(this).find(".dropdown").toggle();
	});
	$(".open-search").click(function(){
		var Seacrh=$(".stui-header__search");
		Seacrh.addClass("active").siblings().hide();
		Seacrh.find(".form-control").focus();
		$(".search-close").click(function(){
			Seacrh.removeClass("active").siblings().show();
		});
	});
</script>
<!--head-->