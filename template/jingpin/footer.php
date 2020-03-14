<style>
#footer{
    min-height: 65px;
}
.stui-page {
    margin-bottom: 105px
}
.paiban{
    width: 25%;
}
</style>

<div id="footer" class="border-t hidden-lg hidden-md" >
	<ul class="flex-wrap" style="font-weight:bold">
		<a class="flex-con paiban <?php echo $index;?>" href="/index.html"><li >首页</li></a>
		<a class="flex-con paiban <?php echo $cx;?>" href="/cx.html"><li >抢先</li></a>
        <a class="flex-con paiban " href="/so.html"><li >搜索</li></a>
        <a class="flex-con paiban " href="/so.html"><li >历史</li></a>

	<!--	<a class="flex-con paiban <?php /*echo $dt;*/?>" href="/hall.html"><li onclick="randomSwitchBtn(this);">大厅</li></a>
		<a class="flex-con paiban <?php /*echo $fl;*/?>" href="/fuli.html"><li onclick="randomSwitchBtn(this);">福利</li></a>
		<a class="flex-con paiban <?php /*echo $so;*/?>" href="/so.html"><li onclick="randomSwitchBtn(this);">全网搜</li></a>-->
	</ul>
</div>
	<ul class="stui-extra clearfix">
		<li><a class="backtop" href="javascript:scroll(0,0)" style="display: block;"><i class="icon iconfont icon-less"></i></a></li>
		<li class="visible-xs"><a class="open-share" href="javascript:;"><i class="icon iconfont icon-share"></i></a></li>
		<li class="hidden-xs"><span><i class="icon iconfont icon-qrcode"></i></span>
		<div class="sideslip">
			<div class="col-pd  text-center">
			<img width="150" height="150" class="qrcode">
			<p class="text-center font-12">扫码用手机访问</p>
			</div>
		</div>
		</li>
		<li title="会员中心"><a class="open-share" href="/ucenter"><i class="icon iconfont icon-smile"></i></a></li>
		<li><a href="/book.html"><i class="icon iconfont icon-comments"></i></a></li>
	</ul>
</div>
</body>
</html>