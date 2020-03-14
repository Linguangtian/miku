<?php
error_reporting(0);
header('Content-type:text/html;charset=utf-8');
include 'head.php';
include 'data/bangdan.php';
$index = 'active';
?>
    <title><?php echo $mkcms_seoname; ?></title>
    <meta name="keywords" content="<?php echo $mkcms_keywords; ?>">
    <meta name="description" content="<?php echo $mkcms_description; ?>">
    </head>
    <body style="padding: 0;">
<style type="text/css">
    .stui-header__top {
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0) 100%);
    }

    .stui-header__top.headroom--not-top {
        background: #292838;
    }

    .stui-header__menu .dropdown li{
        padding-bottom:0;
        margin-bottom: 10px;
        height: 28px;
    }
    .index-header1{
        margin-top: 1rem;
        padding-right: 10px;
        padding-left: 10px;
        width: calc(100%-20px);
    }
    .index-header1 a{
        display: inline-block;
        width: 29%;
        margin:0  1.5%;
        margin-bottom: 10px;
        font-size: 1.2rem;line-height: 2rem;
        text-align: center;
        background-color: #d8d7d7;
        border-radius: 5px;
    }
</style>



<style type="text/css">
.stui-banner__pic{ padding-top: 29%; background-position: center center !important;}
@media (max-width:1023px){.stui-banner__pic{ padding-top: 45%; background-position: 50% 50% !important; background-size: cover !important;}}
@media (max-width:767px){.stui-banner__pic{ padding-top: 55%; background-position: 50% 50% !important; background-size: cover !important;}}


</style>

<div class="container ">
    <div class="index-header1">
        <a href="/movie.html">电影</a>
        <a href="/tv.html">剧集</a>
        <a href="/dongman.html">动漫</a>
        <a href="/zongyi.html">综艺</a>
        <a href="/yule.html">娱乐</a>
        <a href="/mv.html">MV</a>
        <a href="/music.html">音乐</a>
        <a href="/news.html">资讯</a>
        <a href="/zhibo.html">直播</a>
    </div>




</div>




<div class="container ">
    <div class="row" style="padding-left: 15px; padding-right: 15px;">
        <div class="col-md-2"></div>
        <div class=" col-md-4">
            <div class="input-group">
                <div class="input-group-addon">片名：</div>
                <input tabindex="2" class="form-control searchall" id="wd" name="sousuo" type="text"
                       placeholder="输入明星、影片关键词" value="" required="required" onkeydown="if(event.keyCode==13){submi.click()}">
                <span class="input-group-btn ">
					<button id="cu" class="btnn btn-danger" style="border:0" onclick="submit()"> &nbsp; 搜 &nbsp; 索 &nbsp; </button>
                </span>
            </div>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>

<!-- 公告start
<div class="stui-pannel-bg clearfix" style="background-color: #ff6600;">
<div class="clearfix">
<div class="container stui-pannel_hd">
<div class="stui-pannel__head clearfix">
	<li class="active">
		<table border="0" width="100%">
			<tbody><tr>
			<td width="22" height="22">
			<img src="images/notice.png" width="22" height="22">
			</td>
			<td width="12" height="22"></td>
			<td><strong><marquee scrollamount="6" direction="left" align="Middle" style="padding-right:20px;color:#fff;"><?php echo $mkcms_gonggao; ?></marquee></strong></td>
			</tr>
			</tbody>
		</table>
	</li>
  </div>
  </div>
</div>
</div> 公告end -->
<div class="container">
    <div class="row">
        <div class="stui-pannel stui-pannel-bg clearfix">
            <ul class="stui-vodlist clearfix">
                <?php echo $mkcms_ad2; ?>
            </ul>
        </div>
        <div class="stui-pannel stui-pannel-bg clearfix">
            <div class="stui-pannel-box">
                <div class="stui-pannel_hd">
                    <div class="stui-pannel__head active bottom-line clearfix">
                        <h3 class="title">
                            <svg class="iconm" aria-hidden="true">
                                <use xlink:href="#icon-remen"></use>
                            </svg>
                            热播推荐
                        </h3>
                        <a class="more text-muted pull-right" href="movie_____rankhot_1.html">更多 <i
                                    class="icon iconfont icon-more"></i></a>
                    </div>
                </div>
                <div class="stui-pannel_bd clearfix">
                    <ul class="stui-vodlist clearfix">
                        <?php
                        include './data/dyjx.php';
                        $playurl = vod . $listarr[1][0];
                        $zimg = $imgarr[1][0];
                        $zname = $namearr[1][0];
                        $zstar = $stararr[1][0];
                        echo '<li class="col-lg-4 col-md-4 col-sm-3 col-xs-3 hidden-md hidden-sm hidden-xs">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb active first lazyload" href="' . $playurl . '" title="' . $zname . '" data-original="' . $zimg . '" style="padding-top: 176%;"><span class="play hidden-xs"></span><span class="pic-tag pic-tag-h">HOT</span></a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow"><a href="' . $playurl . '" title="">' . $zname . '</a></h4>
<p class="text text-overflow visible-lg"><span class="text-muted"></span>' . $zstar . '</p>
</div>
</div>
</li>';
                        ?>
                        <?php
                        include './data/dyjx.php';
                        $i = 0;
                        foreach ($namearr[1] as $key => $value) {
                            if ($i < 11) {
                                $playurl = vod . $listarr[1][$key];
                                $zimg = $imgarr[1][$key];
                                $zname = $namearr[1][$key];
                                $fname = $fnamearr[1][$key];
                                $nname = $nnamearr[1][$key];
                                $zstar = $stararr[1][$key];
                                echo '<li class="col-lg-7 col-md-5 col-sm-3 col-xs-3 ';
                                if ($i < 1) {
                                    echo 'hidden-lg hidden-md';
                                }
                                if ($i > 8) {
                                    echo 'hidden-xs';
                                }
                                echo '">';
                                ?>
                                <div class="stui-vodlist__box stui-vodlist__bg">
                                    <a class="stui-vodlist__thumb active lazyload" href="<?php echo $playurl; ?>"
                                       title="<?php echo $zname; ?>" data-original="<?php echo $zimg; ?>"><span
                                                class="play hidden-xs"></span><?php if (!empty($fname)) {
                                            echo '<span class="pic-tag pic-tag-h">' . $fname . '</span>';
                                        } ?></span><span class="pic-tag pic-tag-b"><?php echo $nname ?></span></a>
                                    <div class="stui-vodlist__detail active">
                                        <h4 class="title text-overflow"><a href="<?php echo $playurl; ?>"
                                                                           title="<?php echo $zname; ?>"><?php echo $zname; ?></a>
                                        </h4>
                                    </div>
                                </div>
                                </li>
                                <?php $i++;
                            }
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
        <!--剧集-->
        <?php if ($mkcms_dianshi == 1) { ?>
            <div class="stui-pannel stui-pannel-bg clearfix">
                <ul class="stui-vodlist clearfix">
                    <?php echo $mkcms_ad5; ?>
                </ul>
            </div>
            <div class="stui-pannel stui-pannel-bg clearfix">
                <div class="stui-pannel-box">
                    <div class="stui-pannel_hd">
                        <div class="stui-pannel__head active bottom-line clearfix">
                            <a class="more text-muted pull-right" href="tv.html">更多 <i
                                        class="icon iconfont icon-more"></i></a>
                            <h3 class="title">
                                <svg class="iconm" aria-hidden="true">
                                    <use xlink:href="#icon-tv"></use>
                                </svg>
                                <a href="tv.html">热播剧集</a></h3>
                            <ul class="nav nav-text pull-right hidden-sm hidden-xs">
                                <li><a href="tv___10__rankhot_1.html" class="text-muted">国产剧</a> <span
                                            class="split-line"></span></li>
                                <li><a href="tv___11__rankhot_1.html" class="text-muted">港台剧</a> <span
                                            class="split-line"></span></li>
                                <li><a href="tv___12__rankhot_1.html" class="text-muted">日韩剧</a> <span
                                            class="split-line"></span></li>
                                <li><a href="tv___13__rankhot_1.html" class="text-muted">欧美剧</a> <span
                                            class="split-line"></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="stui-pannel_bd clearfix">
                        <div class="col-lg-wide-8 col-xs-1 padding-0">
                            <ul class="stui-vodlist clearfix">
                                <?php include './data/tvjx.php';
                                $i = 0;
                                foreach ($namearr[1] as $key => $value) {
                                    if ($i < 12) {
                                        $zimg = $imgarr[1][$key];
                                        $zname = $namearr[1][$key];
                                        $jishu = $xjishu[1][$key];
                                        $zstar = $stararr[1][$key];
                                        $chuandi = './vod' . $listarr[1][$key];
                                        echo
                                        <<<EOT
<li class="col-md-6 col-sm-4 col-xs-3">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb lazyload img-shadow" href="' . $chuandi . '" title="' . $zname . '" alt="' . $zname . '" data-original="' . $zimg . '">
<span class="play hidden-xs"></span>
<span class="pic-tag pic-tag-b">' . $jishu . '</span>
</a><div class="stui-vodlist__detail active">
<h4 class="title text-overflow">
<a href="' . $chuandi . '" title="' . $zname . '">' . $zname . '</a>
</h4>
<p class="text text-overflow text-muted hidden-xs">' . $zstar . '</p>
</div>
</div>
</li>
EOT;


                                        $i++;
                                    }
                                } ?>
                            </ul>
                        </div>
                        <div class="col-lg-wide-2 hidden-md hidden-sm hidden-xs">
                            <div class="stui-pannel_bd clearfix">
                                <div class="stui-pannel__head">
                                    <a class="more text-muted pull-right" href="tv.html">更多 <i
                                                class="icon iconfont icon-more"></i></a>
                                    <h3 class="title">
                                        <svg class="iconm" aria-hidden="true">
                                            <use xlink:href="#icon-bang"></use>
                                        </svg>
                                        剧集排行
                                    </h3>
                                </div>
                            </div>
                            <div class="stui-pannel_bd clearfix">
                                <ul class="stui-vodlist__text active col-pd clearfix">
                                    <?php
                                    foreach ($bdArr['tv']['title'] as $k => $title) {
                                        $bdurl = $bdArr['tv']['url'][$k];//url
                                        $bdurl = str_replace("http://www.360kan.com", "", $bdurl);
                                        $bdurl = str_replace("https://www.360kan.com", "", $bdurl);
                                        $bdnum = $bdArr['tv']['num'][$k];//num
                                        $topnum = $bdArr['tv']['top'][$k];//topnum
                                        $chuandi = './vod' . $bdurl;
                                        echo "<li class='col-xs-1 padding-0'><a class='text-overflow' href='$chuandi' title='$title'><span class='am-badge am-round pull-left'>$topnum</span><span class='text-muted pull-right'>$bdnum</span><em class='text-red'></em>&nbsp;$title</a></li>";
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="stui-pannel_bd">
                                <div class="stui-pannel__head clearfix">
                                    <a class="more text-muted pull-right" href="tv.html">更多 <i
                                                class="icon iconfont icon-more"></i></a>
                                    <h3 class="title">
                                        <svg class="iconm" aria-hidden="true">
                                            <use xlink:href="#icon-shoucang-"></use>
                                        </svg>
                                        剧集筛选
                                    </h3>
                                </div>
                            </div>
                            <div class="stui-pannel_bd col-pd">
                                <ul class="stui-vodlist__screen clearfix">
                                    <li>
                                        <a href="tv_107____rankhot_1.html" title="军事">军事</a></li>
                                    <li><a href="tv_104____rankhot_1.html" title="古装">古装</a></li>
                                    <li><a href="tv_118____rankhot_1.html" title="谍战">谍战</a></li>
                                    <li><a href="tv_109____rankhot_1.html" title="喜剧">喜剧</a></li>
                                    <li><a href="tv_101____rankhot_1.html" title="言情">言情</a></li>
                                    <li><a href="tv_105____rankhot_1.html" title="伦理">伦理</a></li>
                                    <li><a href="tv_111____rankhot_1.html" title="都市">都市</a></li>
                                    <li><a href="tv_103____rankhot_1.html" title="警匪">警匪</a></li>
                                    <li><a href="tv_112____rankhot_1.html" title="历史">历史</a></li>
                                    <li><a href="tv_117____rankhot_1.html" title="神话">神话</a></li>
                                    <li><a href="tv_106____rankhot_1.html" title="武侠">武侠</a></li>
                                    <li><a href="tv_119____rankhot_1.html" title="青春">青春</a></li>
                                </ul>
                                <ul class="stui-vodlist__screen top-line-dot clearfix">
                                    <li><a href="tv__2019___rankhot_1.html" title="2019">2019</a></li>
                                    <li><a href="tv__2018___rankhot_1.html" title="2018">2018</a></li>
                                    <li><a href="tv__2017___rankhot_1.html" title="2017">2017</a></li>
                                    <li><a href="tv__2016___rankhot_1.html" title="2016">2016</a></li>
                                    <li><a href="tv__2015___rankhot_1.html" title="2015">2015</a></li>
                                    <li><a href="tv__2014___rankhot_1.html" title="2014">2014</a></li>
                                    <li><a href="tv__2013___rankhot_1.html" title="2013">2013</a></li>
                                    <li><a href="tv__2012___rankhot_1.html" title="2012">2012</a></li>
                                    <li><a href="tv__2011___rankhot_1.html" title="2011.html">2011</a></li>
                                    <li><a href="tv__2010___rankhot_1.html" title="2010">2010</a></li>
                                    <li><a href="tv__2009___rankhot_1.html" title="2009">2009</a></li>
                                    <li><a href="tv__other___rankhot_1.html" title="更早">更早</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--剧集-->
        <?php } ?>
        <!--抢先看-->

         <?php if ($mkcms_qianxian == 1) { ?>
            <div class="stui-pannel stui-pannel-bg clearfix">
                <ul class="stui-vodlist clearfix">
                    <?php echo $mkcms_ad3; ?>
                </ul>
            </div>
            <div class="stui-pannel stui-pannel-bg clearfix">
                <div class="stui-pannel-box">
                    <div class="stui-pannel_hd">
                        <div class="stui-pannel__head active bottom-line clearfix">
                            <a class="more text-muted pull-right" href="cx.html">更多 <i
                                        class="icon iconfont icon-more"></i></a>
                            <h3 class="title">
                                <svg class="iconm" aria-hidden="true">
                                    <use xlink:href="#icon-play"></use>
                                </svg>
                                <a href="cx.html">影视尝鲜</a></h3>
                        </div>
                    </div>
                    <div class="stui-pannel_bd clearfix">
                        <ul class="stui-vodlist clearfix">
                            <?php
                            for ($i = 0; $i < 7; $i++) {
                                if (mb_strpos($data['data'][$i]['list_name'], '美女写真') === false) {
                                    if (mb_strpos($data['data'][$i]['list_name'], '伦理片') === false) {
                                        if (mb_strpos($data['data'][$i]['list_name'], '福利') === false) {
                                            if (mb_strpos($data['data'][$i]['list_name'], '伦理') === false) {
                                                if (mb_strpos($data['data'][$i]['list_name'], '论理') === false) {
                                                    $ccb = "./cxplay/" . $data['data'][$i]['vod_id'] . ".html";
                                                    if ($row['d_jifen'] > 0) {
                                                        $ok = "onclick=\"return confirm('此视频为收费视频，观看需要支付" . $row['d_jifen'] . "积分，您是否观看？')\"";
                                                    } else {
                                                        $ok = "";
                                                    }
                                                    echo '<li class="col-md-7 col-sm-3 col-xs-3 ';
                                                    if ($i >= 6) {
                                                        echo 'hidden-xs';
                                                    }
                                                    echo '">';
                                                    ?>
                                                    <div class='stui-vodlist__box stui-vodlist__bg'>
                                                        <a class='stui-vodlist__thumb lazyload' <?php echo $ok; ?>
                                                           href='<?php echo $ccb; ?>'
                                                           title='<?php echo $data['data'][$i]['vod_name']; ?>'
                                                           data-original='<?php echo $data['data'][$i]['vod_pic']; ?>'>
                                                            <span class='play hidden-xs'></span>
                                                            <span class='pic-tag pic-tag-b'><?php echo $data['data'][$i]['vod_year']; ?><?php echo $data['data'][$i]['d_year']; ?></span>
                                                        </a>
                                                        <div class='stui-vodlist__detail active'>
                                                            <h4 class='title text-overflow'><a
                                                                        href='<?php echo $ccb; ?>'
                                                                        title='<?php echo $data['data'][$i]['vod_name']; ?>'><?php echo $data['data'][$i]['vod_name']; ?></a>
                                                            </h4>
                                                            <p class='text text-overflow text-muted hidden-xs'>
                                                                主演：<?php if (empty($data['data'][$i]['vod_actor'])) {
                                                                    echo "未知";
                                                                } else {
                                                                    echo $data['data'][$i]['vod_actor'];
                                                                }
                                                                ?></p>
                                                        </div>
                                                    </div>
                                                    </li>
                                                <?php }
                                            }
                                        }
                                    }
                                }
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!--抢先看-->

        <!--电影-->
        <?php if ($mkcms_dianying == 1) { ?>
            <div class="stui-pannel stui-pannel-bg clearfix">
                <ul class="stui-vodlist clearfix">
                    <?php echo $mkcms_ad4; ?>
                </ul>
            </div>
            <div class="stui-pannel stui-pannel-bg clearfix">
                <div class="stui-pannel-box">
                    <div class="stui-pannel_hd">
                        <div class="stui-pannel__head active bottom-line clearfix">
                            <a class="more text-muted pull-right" href="movie.html">更多 <i
                                        class="icon iconfont icon-more"></i></a>
                            <h3 class="title">
                                <svg class="iconm" aria-hidden="true">
                                    <use xlink:href="#icon-movie"></use>
                                </svg>
                                <a href="movie_____createtime_1.html">最新电影</a></h3>
                            <ul class="nav nav-text pull-right hidden-sm hidden-xs">
                                <li><a href="movie___10__rankhot_1.html" class="text-muted">华语强档</a> <span
                                            class="split-line"></span></li>
                                <li><a href="movie_____rankhot_1.html" class="text-muted">网络热映</a> <span
                                            class="split-line"></span></li>
                                <li><a href="movie___11__rankhot_1.html" class="text-muted">欧美范儿</a> <span
                                            class="split-line"></span></li>
                                <li><a href="movie___13__rankhot_1.html" class="text-muted">亚洲风情</a> <span
                                            class="split-line"></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="stui-pannel_bd clearfix">
                        <div class="col-lg-wide-8 col-xs-1 padding-0">
                            <ul class="stui-vodlist clearfix">
                                <?php include './data/dyjx2.php';
                                $i = 0;
                                foreach ($namearr[1] as $key => $value) {
                                    if ($i < 12) {
                                        $playurl = vod . $listarr[1][$key];
                                        $zimg = $imgarr[1][$key];
                                        $zname = $namearr[1][$key];
                                        $fname = $fnamearr[1][$key];
                                        $nname = $nnamearr[1][$key];
                                        $zstar = $stararr[1][$key];
                                        echo '<li class="col-md-6 col-sm-4 col-xs-3">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb lazyload img-shadow" href="' . $playurl . '" title="' . $zname . '" alt="$name" data-original="' . $zimg . '">
<span class="play hidden-xs"></span>';
                                        if (!empty($fname)) {
                                            echo '<span class="pic-tag pic-tag-h">' . $fname . '</span>';
                                        }
                                        echo '<span class="pic-tag pic-tag-b">' . $nname . '</span>
</a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow">
<a href="' . $playurl . '" title="' . $zname . '">' . $zname . '</a>
<p class="text text-overflow text-muted hidden-xs">' . $zstar . '</p>
</h4>
</div>
</div>
</li>';
                                        $i++;
                                    }
                                } ?>
                            </ul>
                        </div>
                        <div class="col-lg-wide-2 hidden-md hidden-sm hidden-xs">
                            <div class="stui-pannel_bd clearfix">
                                <div class="stui-pannel__head">
                                    <a class="more text-muted pull-right" href="movie.html">更多 <i
                                                class="icon iconfont icon-more"></i></a>
                                    <h3 class="title">
                                        <svg class="iconm" aria-hidden="true">
                                            <use xlink:href="#icon-bang"></use>
                                        </svg>
                                        影视排行
                                    </h3>
                                </div>
                            </div>
                            <div class="stui-pannel_bd clearfix">
                                <ul class="stui-vodlist__text active col-pd clearfix">
                                    <?php
                                    foreach ($bdArr['dy']['title'] as $k => $title) {
                                        $bdurl = $bdArr['dy']['url'][$k];//url
                                        $bdurl = str_replace("http://www.360kan.com", "", $bdurl);
                                        $bdurl = str_replace("https://www.360kan.com", "", $bdurl);
                                        $bdnum = $bdArr['dy']['num'][$k];//num
                                        $topnum = $bdArr['dy']['top'][$k];//topnum
                                        $chuandi = './vod' . $bdurl;
                                        echo "<li class='col-xs-1 padding-0'><a class='text-overflow' href='$chuandi' title='$title'><span class='am-badge am-round pull-left'>$topnum</span><span class='text-muted pull-right'>$bdnum</span><em class='text-red'></em>&nbsp;$title</a></li>";
                                    } ?>
                                </ul>
                            </div>
                            <div class="stui-pannel_bd">
                                <div class="stui-pannel__head clearfix">
                                    <a class="more text-muted pull-right" href="movie.html">更多 <i
                                                class="icon iconfont icon-more"></i></a>
                                    <h3 class="title">
                                        <svg class="iconm" aria-hidden="true">
                                            <use xlink:href="#icon-shoucang-"></use>
                                        </svg>
                                        电影筛选
                                    </h3>
                                </div>
                            </div>
                            <div class="stui-pannel_bd col-pd">
                                <ul class="stui-vodlist__screen clearfix">
                                    <li><a href="movie_103____rankhot_1.html" title="喜剧">喜剧</a></li>
                                    <li><a href="movie_100____rankhot_1.html" title="爱情">爱情</a></li>
                                    <li><a href="movie_106____rankhot_1.html" title="动作">动作</a></li>
                                    <li><a href="movie_102____rankhot_1.html" title="恐怖">恐怖</a></li>
                                    <li><a href="movie_104____rankhot_1.html" title="科幻">科幻</a></li>
                                    <li><a href="movie_112____rankhot_1.html" title="剧情">剧情</a></li>
                                    <li><a href="movie_105____rankhot_1.html" title="犯罪">犯罪</a></li>
                                    <li><a href="movie_108____rankhot_1.html" title="战争">战争</a></li>
                                    <li><a href="movie_115____rankhot_1.html" title="悬疑">悬疑</a></li>
                                    <li><a href="movie_117____rankhot_1.html" title="文艺">文艺</a></li>
                                    <li><a href="movie_118____rankhot_1.html" title="记录">记录</a></li>
                                    <li><a href="movie_121____rankhot_1.html" title="古装">古装</a></li>
                                </ul>
                                <ul class="stui-vodlist__screen top-line-dot clearfix">
                                    <li><a href="movie__2019___rankhot_1.html" title="2019">2019</a></li>
                                    <li><a href="movie__2018___rankhot_1.html" title="2018">2018</a></li>
                                    <li><a href="movie__2017___rankhot_1.html" title="2017">2017</a></li>
                                    <li><a href="movie__2016___rankhot_1.html" title="2016">2016</a></li>
                                    <li><a href="movie__2015___rankhot_1.html" title="2015">2015</a></li>
                                    <li><a href="movie__2014___rankhot_1.html" title="2014">2014</a></li>
                                    <li><a href="movie__2013___rankhot_1.html" title="2013">2013</a></li>
                                    <li><a href="movie__2012___rankhot_1.html" title="2012">2012</a></li>
                                    <li><a href="movie__2011___rankhot_1.html" title="2011.html">2011</a></li>
                                    <li><a href="movie__2010___rankhot_1.html" title="2010">2010</a></li>
                                    <li><a href="movie__2009___rankhot_1.html" title="2009">2009</a></li>
                                    <li><a href="movie__other___rankhot_1.html" title="更早">更早</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!--电影-->

        <!--动漫-->
        <?php if ($mkcms_dongman == 1) { ?>
            <div class="stui-pannel stui-pannel-bg clearfix">
                <ul class="stui-vodlist clearfix">
                    <?php echo $mkcms_ad9; ?>
                </ul>
            </div>
            <div class="stui-pannel stui-pannel-bg clearfix">
                <div class="stui-pannel-box">
                    <div class="stui-pannel_hd">
                        <div class="stui-pannel__head active bottom-line clearfix">
                            <a class="more text-muted pull-right" href="dongman.html">更多 <i
                                        class="icon iconfont icon-more"></i></a>
                            <h3 class="title">
                                <svg class="iconm" aria-hidden="true">
                                    <use xlink:href="#icon-dongman"></use>
                                </svg>
                                <a href="dongman____createtime_1.html">最新动漫</a></h3>
                            <ul class="nav nav-text pull-right hidden-sm hidden-xs">
                                <li><a href="dongman_100___rankhot_1.html" class="text-muted">热血</a> <span
                                            class="split-line"></span></li>
                                <li><a href="dongman_101___rankhot_1.html" class="text-muted">恋爱</a> <span
                                            class="split-line"></span></li>
                                <li><a href="dongman_108___rankhot_1.html" class="text-muted">悬疑</a> <span
                                            class="split-line"></span></li>
                                <li><a href="dongman_111___rankhot_1.html" class="text-muted">少儿</a> <span
                                            class="split-line"></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="stui-pannel_bd clearfix">
                        <div class="col-lg-wide-8 col-xs-1 padding-0">
                            <ul class="stui-vodlist clearfix">
                                <?php include './data/dmjx.php';
                                $i = 0;
                                foreach ($namearr[1] as $key => $value) {
                                    if ($i < 12) {
                                        $zimg = $imgarr[1][$key];
                                        $zname = $namearr[1][$key];
                                        $nname = $nnamearr[1][$key];
                                        $playurl = vod . $listarr[1][$key];
                                        echo '<li class="col-md-6 col-sm-4 col-xs-3">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb lazyload img-shadow" href="' . $playurl . '" title="' . $zname . '" alt="$name" data-original="' . $zimg . '">
<span class="play hidden-xs"></span>
<span class="pic-tag pic-tag-b">' . $nname . '</span>
</a><div class="stui-vodlist__detail active">
<h4 class="title text-overflow">
<a href="' . $playurl . '" title="' . $zname . '">' . $zname . '</a>
</h4>
</div>
</div>
</li>';
                                        $i++;
                                    }
                                } ?>
                            </ul>
                        </div>
                        <div class="col-lg-wide-2 hidden-md hidden-sm hidden-xs">
                            <div class="stui-pannel_bd clearfix">
                                <div class="stui-pannel__head">
                                    <a class="more text-muted pull-right" href="dongman.html">更多 <i
                                                class="icon iconfont icon-more"></i></a>
                                    <h3 class="title">
                                        <svg class="iconm" aria-hidden="true">
                                            <use xlink:href="#icon-bang"></use>
                                        </svg>
                                        动漫排行
                                    </h3>
                                </div>
                            </div>
                            <div class="stui-pannel_bd clearfix">
                                <ul class="stui-vodlist__text active col-pd clearfix">
                                    <?php
                                    foreach ($bdArr['dm']['title'] as $k => $title) {
                                        $bdurl = $bdArr['dm']['url'][$k];//url
                                        $bdurl = str_replace("http://www.360kan.com", "", $bdurl);
                                        $bdurl = str_replace("https://www.360kan.com", "", $bdurl);
                                        $bdnum = $bdArr['dm']['num'][$k];//num
                                        $topnum = $bdArr['dm']['top'][$k];//topnum
                                        $chuandi = './vod' . $bdurl;
                                        echo "<li class='col-xs-1 padding-0'><a class='text-overflow' href='$chuandi' title='$title'><span class='am-badge am-round pull-left'>$topnum</span><span class='text-muted pull-right'>$bdnum</span><em class='text-red'></em>&nbsp;$title</a></li>";
                                    } ?>
                                </ul>
                            </div>
                            <div class="stui-pannel_bd">
                                <div class="stui-pannel__head clearfix">
                                    <a class="more text-muted pull-right" href="dongman.html">更多 <i
                                                class="icon iconfont icon-more"></i></a>
                                    <h3 class="title">
                                        <svg class="iconm" aria-hidden="true">
                                            <use xlink:href="#icon-shoucang-"></use>
                                        </svg>
                                        动漫筛选
                                    </h3>
                                </div>
                            </div>
                            <div class="stui-pannel_bd col-pd">
                                <ul class="stui-vodlist__screen clearfix">
                                    <li>
                                        <a href="dongman_100___rankhot_1.html" title="热血">热血</a></li>
                                    <li><a href="dongman_134___rankhot_1.html" title="科幻">科幻</a></li>
                                    <li><a href="dongman_109___rankhot_1.html" title="魔幻">魔幻</a></li>
                                    <li><a href="dongman_135___rankhot_1.html" title="经典">经典</a></li>
                                    <li><a href="dongman_107___rankhot_1.html" title="冒险">冒险</a></li>
                                    <li><a href="dongman_111___rankhot_1.html" title="少儿">少儿</a></li>
                                    <li><a href="dongman_137___rankhot_1.html" title="推理">推理</a></li>
                                    <li><a href="dongman_104___rankhot_1.html" title="校园">校园</a></li>
                                    <li><a href="dongman_112___rankhot_1.html" title="机战">机战</a></li>
                                    <li><a href="dongman_123___rankhot_1.html" title="青春">青春</a></li>
                                    <li><a href="dongman_115___rankhot_1.html" title="战争">战争</a></li>
                                    <li><a href="dongman_126___rankhot_1.html" title="动作">动作</a></li>
                                </ul>
                                <ul class="stui-vodlist__screen top-line-dot clearfix">
                                    <li><a href="dongman__2019__rankhot_1.html" title="2019">2019</a></li>
                                    <li><a href="dongman__2018__rankhot_1.html" title="2018">2018</a></li>
                                    <li><a href="dongman__2017__rankhot_1.html" title="2017">2017</a></li>
                                    <li><a href="dongman__2016__rankhot_1.html" title="2016">2016</a></li>
                                    <li><a href="dongman__2015__rankhot_1.html" title="2015">2015</a></li>
                                    <li><a href="dongman__2014__rankhot_1.html" title="2014">2014</a></li>
                                    <li><a href="dongman__2013__rankhot_1.html" title="2013">2013</a></li>
                                    <li><a href="dongman__other__rankhot_1.html" title="更早">更早</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!--动漫-->
        <!--综艺-->
        <?php if ($mkcms_zongyi == 1) { ?>
            <div class="stui-pannel stui-pannel-bg clearfix">
                <ul class="stui-vodlist clearfix">
                    <?php echo $mkcms_ad7; ?>
                </ul>
            </div>
            <div class="stui-pannel stui-pannel-bg clearfix">
                <div class="stui-pannel-box">
                    <div class="stui-pannel_hd">
                        <div class="stui-pannel__head active bottom-line clearfix">
                            <a class="more text-muted pull-right" href="zongyi.html">更多 <i
                                        class="icon iconfont icon-more"></i></a>
                            <h3 class="title">
                                <svg class="iconm" aria-hidden="true">
                                    <use xlink:href="#icon-zongyi"></use>
                                </svg>
                                <a href="zongyi____createtime_1.html">最新综艺</a></h3>
                            <ul class="nav nav-text pull-right hidden-sm hidden-xs">
                                <li><a href="zongyi_101___rankhot_1.html" class="text-muted">选秀</a> <span
                                            class="split-line"></span></li>
                                <li><a href="zongyi_104___rankhot_1.html" class="text-muted">情感</a> <span
                                            class="split-line"></span></li>
                                <li><a href="zongyi_107___rankhot_1.html" class="text-muted">搞笑</a> <span
                                            class="split-line"></span></li>
                                <li><a href="zongyi_108___rankhot_1.html" class="text-muted">音乐</a> <span
                                            class="split-line"></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="stui-pannel_bd clearfix">
                        <div class="col-lg-wide-8 col-xs-1 padding-0">
                            <ul class="stui-vodlist clearfix">
                                <?php include './data/zyjx.php';
                                $i = 0;
                                foreach ($namearr[1] as $key => $value) {
                                    if ($i < 12) {
                                        $playurl = vod . $listarr[1][$key];
                                        $zimg = $imgarr[1][$key];
                                        $zname = $namearr[1][$key];
                                        $nname = $nnamearr[1][$key];
                                        $zstar = $stararr[1][$key];
                                        echo '<li class="col-md-6 col-sm-4 col-xs-3">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb lazyload img-shadow" href="' . $playurl . '" title="' . $zname . '" alt="$name" data-original="' . $zimg . '">
<span class="play hidden-xs"></span>
<span class="pic-tag pic-tag-b">' . $nname . '</span>
</a><div class="stui-vodlist__detail active">
<h4 class="title text-overflow">
<a href="' . $playurl . '" title="' . $zname . '">' . $zname . '</a>
</h4>
<p class="text text-overflow text-muted hidden-xs">' . $zstar . '</p>
</div>
</div>
</li>';
                                        $i++;
                                    }
                                } ?>
                            </ul>
                        </div>
                        <div class="col-lg-wide-2 hidden-md hidden-sm hidden-xs">
                            <div class="stui-pannel_bd clearfix">
                                <div class="stui-pannel__head">
                                    <a class="more text-muted pull-right" href="zongyi.html">更多 <i
                                                class="icon iconfont icon-more"></i></a>
                                    <h3 class="title">
                                        <svg class="iconm" aria-hidden="true">
                                            <use xlink:href="#icon-bang"></use>
                                        </svg>
                                        综艺排行
                                    </h3>
                                </div>
                            </div>
                            <div class="stui-pannel_bd clearfix">
                                <ul class="stui-vodlist__text active col-pd clearfix">
                                    <?php
                                    foreach ($bdArr['zy']['title'] as $k => $title) {
                                        $bdurl = $bdArr['zy']['url'][$k];//url
                                        $bdurl = str_replace("http://www.360kan.com", "", $bdurl);
                                        $bdurl = str_replace("https://www.360kan.com", "", $bdurl);
                                        $bdnum = $bdArr['zy']['num'][$k];//num
                                        $topnum = $bdArr['zy']['top'][$k];//topnum
                                        $chuandi = './vod' . $bdurl;
                                        echo "<li class='col-xs-1 padding-0'><a class='text-overflow' href='$chuandi' title='$title'><span class='am-badge am-round pull-left'>$topnum</span><span class='text-muted pull-right'>$bdnum</span><em class='text-red'></em>&nbsp;$title</a></li>";
                                    } ?>
                                </ul>
                            </div>
                            <div class="stui-pannel_bd">
                                <div class="stui-pannel__head clearfix">
                                    <a class="more text-muted pull-right" href="zongyi.html">更多 <i
                                                class="icon iconfont icon-more"></i></a>
                                    <h3 class="title">
                                        <svg class="iconm" aria-hidden="true">
                                            <use xlink:href="#icon-shoucang-"></use>
                                        </svg>
                                        综艺筛选
                                    </h3>
                                </div>
                            </div>
                            <div class="stui-pannel_bd col-pd">
                                <ul class="stui-vodlist__screen clearfix">
                                    <li>
                                        <a href="zongyi_121___rankhot_1.html" title="脱口秀">脱口秀</a></li>
                                    <li><a href="zongyi_120___rankhot_1.html" title="真人秀">真人秀</a></li>
                                    <li><a href="zongyi_103___rankhot_1.html" title="访谈">访谈</a></li>
                                    <li><a href="zongyi_104___rankhot_1.html" title="情感">情感</a></li>
                                    <li><a href="zongyi_105___rankhot_1.html" title="生活">生活</a></li>
                                    <li><a href="zongyi_106___rankhot_1.html" title="晚会">晚会</a></li>
                                    <li><a href="zongyi_107___rankhot_1.html" title="搞笑">搞笑</a></li>
                                    <li><a href="zongyi_110___rankhot_1.html" title="游戏">游戏</a></li>
                                    <li><a href="zongyi_112___rankhot_1.html" title="体育">体育</a></li>
                                    <li><a href="zongyi_113___rankhot_1.html" title="纪实">纪实</a></li>
                                    <li><a href="zongyi_116___rankhot_1.html" title="歌舞">歌舞</a></li>
                                    <li><a href="zongyi_115___rankhot_1.html" title="曲艺">曲艺</a></li>
                                </ul>
                                <ul class="stui-vodlist__screen top-line-dot clearfix">
                                    <li><a href="zongyi__邓超__rankhot_1.html" title="邓超">邓超</a></li>
                                    <li><a href="zongyi__陈赫__rankhot_1.html" title="陈赫">陈赫</a></li>
                                    <li><a href="zongyi__何炅__rankhot_1.html" title="何炅">何炅</a></li>
                                    <li><a href="zongyi__汪涵__rankhot_1.html" title="汪涵">汪涵</a></li>
                                    <li><a href="zongyi__谢娜__rankhot_1.html" title="谢娜">谢娜</a></li>
                                    <li><a href="zongyi__周杰伦__rankhot_1.html" title="周杰伦">周杰伦</a></li>
                                    <li><a href="zongyi__岳云鹏__rankhot_1.html" title="岳云鹏">岳云鹏</a></li>
                                    <li><a href="zongyi__杨幂__rankhot_1.html" title="杨幂">杨幂</a></li>
                                    <li><a href="zongyi__宋小宝__rankhot_1.html" title="宋小宝">宋小宝</a></li>
                                    <li><a href="zongyi__贾玲__rankhot_1.html" title="贾玲">贾玲</a></li>
                                    <li><a href="zongyi__华晨宇__rankhot_1.html" title="华晨宇">华晨宇</a></li>
                                    <li><a href="zongyi__范冰冰__rankhot_1.html" title="范冰冰">范冰冰</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!--综艺-->

     

        <!--YY-->
        <?php if ($mkcms_yy == 1) { ?>
            <div class="stui-pannel stui-pannel-bg clearfix">
                <ul class="stui-vodlist clearfix">
                    <?php echo $mkcms_ad6; ?>
                </ul>
            </div>
            <div class="stui-pannel stui-pannel-bg clearfix">
                <div class="stui-pannel-box">
                    <div class="stui-pannel_hd">
                        <div class="stui-pannel__head active bottom-line clearfix">
                            <a class="more text-muted pull-right" href="yy.html">更多 <i
                                        class="icon iconfont icon-more"></i></a>
                            <h3 class="title">
                                <svg class="iconm" aria-hidden="true">
                                    <use xlink:href="#icon-music"></use>
                                </svg>
                                <a href="yy.html">美女视听</a></h3>
                        </div>
                    </div>
                    <div class="stui-pannel_bd clearfix">
                        <ul class="stui-vodlist clearfix">
                            <?php
                            $url = 'http://www.yy.com/shenqu/clist/t10027_p1.html';
                            $arta = fileget($url, 5);
                            $uu1 = '#<img  src="(.*?)"   alt="(.*?)">#';
                            $qq = '#<p class="text">(.*?)</p>#';
                            $dj = '#<p class="pcount"><i class="play-ico"></i><span>(.*?)</span></p>#';
                            $ww = '#<a href="(.*?)" title="(.*?)" class="target-link"   >#';
                            preg_match_all($uu1, $arta, $lj);
                            preg_match_all($qq, $arta, $rs);
                            preg_match_all($ww, $arta, $ee);
                            preg_match_all($dj, $arta, $cs);
                            $bf = $lj[1];
                            $mz = $lj[2];
                            $gk = $rs[1];
                            $rr = $ee[1];
                            $tt = $ee[2];
                            $bj = $cs[1];
                            $responsg = str_replace('/shenqu/play/id_', '', $rr);
                            $responsa = str_replace('.html', '', $responsg);
                            $i = 0;
                            foreach ($bf as $gg => $qz1) {
                                if ($i < 6) {
                                    ?>
                                    <li class='col-md-6 col-sm-4 col-xs-3'>
                                    <div class='stui-vodlist__box stui-vodlist__bg'>
                                        <a class='stui-vodlist__thumb1 lazyload'
                                           href='yplay/<?php echo $responsa[$gg]; ?>.html'
                                           title='<?php echo $mz[$gg]; ?>' data-original='<?php echo $qz1; ?>'>
                                            <span class='play hidden-xs'></span>
                                            <span class='pic-tag pic-tag-b'><?php echo $gk[$gg]; ?></span></a>
                                        <div class='stui-vodlist__detail active'>
                                            <h4 class='title text-overflow'>
                                                <a href="yplay/<?php echo $responsa[$gg]; ?>.html"
                                                   title='<?php echo $xname[$key]; ?>'><?php echo $mz[$gg]; ?></a>
                                            </h4>
                                            <p class='text text-overflow text-muted hidden-xs'><?php echo $bj[$gg]; ?>
                                                次播放</p>
                                        </div>
                                    </div>
                                    </li><?php
                                    $i++;
                                }
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!--YY-->



        <!--合作-->
        <?php if ($mkcms_hz == 1) { ?>
            <div class="stui-pannel stui-pannel-bg clearfix hidden-sm hidden-xs">
                <div class="stui-pannel-box">
                    <div class="stui-pannel_hd">
                        <div class="stui-pannel__head active bottom-line clearfix">
                            <h3 class="title">
                                <svg class="iconm" aria-hidden="true">
                                    <use xlink:href="#icon-hezuo"></use>
                                </svg>
                                合作伙伴
                            </h3>
                        </div>
                    </div>
                    <div class="stui-pannel_bd clearfix">
                        <ul class="stui-link__pic clearfix">
                            <li class="col-md-7 col-sm-4 col-xs-3">
                                <a href="http://v.qq.com/" target="_blank" title=""> <img
                                            src="/template/jingpin/img/logo/qq.png"/> </a>
                            </li>
                            <li class="col-md-7 col-sm-4 col-xs-3">
                                <a href="http://www.youku.com/" target="_blank" title=""> <img
                                            src="/template/jingpin/img/logo/youku.png"/> </a>
                            </li>
                            <li class="col-md-7 col-sm-4 col-xs-3">
                                <a href="http://www.iqiyi.com/" target="_blank" title=""> <img
                                            src="/template/jingpin/img/logo/iqiyi.png"/> </a>
                            </li>
                            <li class="col-md-7 col-sm-4 col-xs-3">
                                <a href="http://v.sohu.com/" target="_blank" title=""> <img
                                            src="/template/jingpin/img/logo/sohu.png"/> </a>
                            </li>
                            <li class="col-md-7 col-sm-4 col-xs-3">
                                <a href="http://www.mgtv.com/" target="_blank" title=""> <img
                                            src="/template/jingpin/img/logo/mg.png"/> </a>
                            </li>
                            <li class="col-md-7 col-sm-4 col-xs-3">
                                <a href="http://www.pptv.com/" target="_blank" title=""> <img
                                            src="/template/jingpin/img/logo/pptv.png"/> </a>
                            </li>
                            <li class="col-md-7 col-sm-4 col-xs-3">
                                <a href="http://www.tudou.com/" target="_blank" title=""> <img
                                            src="/template/jingpin/img/logo/tudou.png"/> </a>
                            </li>
                            <li class="col-md-7 col-sm-4 col-xs-3">
                                <a href="http://www.letv.com/" target="_blank" title=""> <img
                                            src="/template/jingpin/img/logo/letv.png"/> </a>
                            </li>
                            <li class="col-md-7 col-sm-4 col-xs-3">
                                <a href="http://www.ku6.com/" target="_blank" title=""> <img
                                            src="/template/jingpin/img/logo/ku6.png"/> </a>
                            </li>
                            <li class="col-md-7 col-sm-4 col-xs-3">
                                <a href="https://v.wasu.cn/" target="_blank" title=""> <img
                                            src="/template/jingpin/img/logo/wasu.png"/> </a>
                            </li>
                            <li class="col-md-7 col-sm-4 col-xs-3">
                                <a href="http://www.kankan.com/" target="_blank" title=""> <img
                                            src="/template/jingpin/img/logo/kankan.png"/> </a>
                            </li>
                            <li class="col-md-7 col-sm-4 col-xs-3">
                                <a href="http://www.baofeng.com/" target="_blank" title=""> <img
                                            src="/template/jingpin/img/logo/baofeng.png"/> </a>
                            </li>
                            <li class="col-md-7 col-sm-4 col-xs-3">
                                <a href="http://www.fun.tv/" target="_blank" title=""> <img
                                            src="/template/jingpin/img/logo/fengxing.png"/> </a>
                            </li>
                            <li class="col-md-7 col-sm-4 col-xs-3">
                                <a href="http://www.1905.com/" target="_blank" title=""> <img
                                            src="/template/jingpin/img/logo/1905.png"/> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!--合作-->
        <!--友链-->
        <?php if ($mkcms_yq == 1) { ?>
            <div class="stui-pannel stui-pannel-bg clearfix">
                <ul class="stui-vodlist clearfix">
                    <?php echo $mkcms_ad10; ?>
                </ul>
            </div>
            <div class="stui-pannel stui-pannel-bg clearfix">
                <div class="stui-pannel-box">
                    <div class="stui-pannel_hd">
                        <div class="stui-pannel__head active bottom-line clearfix">
                            <h3 class="title">
                                <svg class="iconm" aria-hidden="true">
                                    <use xlink:href="#icon-link"></use>
                                </svg>
                                友情链接
                            </h3>
                        </div>
                    </div>
                    <div class="stui-pannel_bd clearfix">
                        <div class="col-xs-1">
                            <ul class="stui-link__text clearfix">
                                <?php
                                $result = mysqli_query($conn, 'select * from mkcms_link');
                                while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                    <li><a class="text-color-999" href="<?php echo $row['l_url']; ?>"
                                           target="_blank"><?php echo $row['l_name']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!--友链-->
    </div>
</div>
<?php include 'footer.php'; ?>