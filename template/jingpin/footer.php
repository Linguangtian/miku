<style>
    body{padding-bottom: 50px;
    }
    .carousel-control{
        display: none;;
    }
#footer{
    left: 0;
    min-height: 3rem;
    border-top:1px solid #c5c5c5;
    box-shadow:0 -2px 3px -1px  #c5c5c5;
    bottom: -2px;
}
#footer  a{
   height: 3rem;
    padding-top: 0rem;
    font-size:0.8rem;
}
#footer  a.active{
    color: #d80704;
}

#footer img{
    width: auto;
    height: 1.5rem;
    margin-bottom: 0.5rem;
}
.paiban{
    width: 25%;
}
.lodoing{
    width: 100%;
    background: rgba(0, 0, 0, .9);
    z-index: 10;
    height: auto;
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    display: none;

}
.jiazai{
    position: fixed;
    z-index: 13;
    width: 8rem;
    height: 8rem;
    background: url("images/ajax-loader.gif") no-repeat center center;
    background-size: 100% 100%;
    left: 25%;
    top: 30%;
    opacity: 1;
    visibility: visible;
    display: none;
}
</style>
<!--遮羞布-->
<div class="lodoing"><div class="jiazai"></div></div>


<script>
    $("a").click(function (e) {
        var str=$(this).attr("href");
        if($(this).attr("href") && str.indexOf('javascr') && str.indexOf('(') &&  str.indexOf('onclick') ){
            $(' .lodoing').show();
            $(' .jiazai').show();

        }
    })

</script>













<div id="footer" class="border-t hidden-lg hidden-md" >
	<div class="flex-wrap" style="font-weight:bold">
		<a class="flex-con paiban <?php echo $index;?>" href="/index.html">
            <img src="/template/jingpin/img/shouye_<?php echo $index;?>.png?v=101">
            <li >首页</li>

        </a>
		<a class="flex-con paiban <?php echo $cx;?>" href="/cx.html">
            <img src="/template/jingpin/img/yingyuan_<?php echo $cx;?>.png?v=101">
            <li >抢先</li>

        </a>
        <a class="flex-con paiban <?php echo $so;?>" href="/so.html">
            <img src="/template/jingpin/img/zhibo_<?php echo $so;?>.png?v=101">
            <li >搜索 <?php echo $so;?></li>

        </a>

        <a class="flex-con paiban <?php echo $history;?>" href="/history.html">
            <img src="/template/jingpin/img/fuli_<?php echo $history;?>.png?v=101">
            <li >历史<?php echo $history;?></li>

        </a>

	<!--	<a class="flex-con paiban <?php /*echo $dt;*/?>" href="/hall.html"><li onclick="randomSwitchBtn(this);">大厅</li></a>
		<a class="flex-con paiban <?php /*echo $fl;*/?>" href="/fuli.html"><li onclick="randomSwitchBtn(this);">福利</li></a>
		<a class="flex-con paiban <?php /*echo $so;*/?>" href="/so.html"><li onclick="randomSwitchBtn(this);">全网搜</li></a>-->
	</div>
</div>
	<ul class="stui-extra clearfix">
		<li><a class="backtop" href="javascript:scroll(0,0)" style="display: block;"><i class="icon iconfont icon-less"></i></a></li>
	<!--	<li><a class="backtop" href="javascript:scroll($('body')[0].scrollHeight)" style="display: block;"><i class="icon iconfont icon-less"></i></a></li>
-->
	</ul>
</div>
</body>
</html>