<?php
error_reporting(0);
header('Content-type:text/html;charset=utf-8'); 
function unicode_decode($name){
	$json = '{"str":"'.$name.'"}';
	$arr = json_decode($json,true);
	if(empty($arr)) return '';
	return $arr['str'];
}
$urllist='https://www.360kan.com'.$_GET['play']; 
$tvinfo=fileget2($urllist,5);
$tvinfo = str_replace('-->', '', "$tvinfo");
$tvinfo = str_replace('<!--', '', "$tvinfo");
$tvinfo = urldecode(str_replace('https://p.ssl.so.com/p/', '', "$tvinfo"));
$tvzz='#<div (class="site-wrap")?\s*id="js-site-wrap">[\s\S]+?(class="num-tab-main\s*g-clear\s*js-tab")?\s*(style="display:none;")?>[\s\S]+?<a data-num="(.*?)"\s*data-daochu="to=(.*?)" href="(.*?)">[\s\S]+?</div>#';
$tvzz1 = '#<a data-num="(.*?)"\s*data-daochu="to=(.*?)" href="(.*?)">#';
$dyzz= '#<span class="txt">站点排序 ：</span>[\s\S]+?<div style=\' visibility:hidden\'#';
$bflist = '#<a data-daochu=(.*?) class="btn js-site ea-site (.*?)" href="(.*?)">(.*?)</a>#';
$jianjie = '#style="display:none;"><span>简介[\s\S]+?js-close btn#';
$jianjie1 = '#</span>(.*?)<a href#';
$biaoti = '#<h1>(.*?)</h1>#';
$pan = '#<h2 class="title g-clear">(.*?)</h2>#';
$pan1 = '#<div id="js-juji" class="juji g-clear p-mod"(.*?)data-site#';
$str=$_GET['play'];
$arr = explode('/', $str);
$mkcmsid=str_replace('.html', '', "$arr[2]");
$mkcmstyle=$arr[1];
$laiyuan = '#{"ensite":"(.*?)","cnsite":"(.*?)","vip":(.*?)}#';
$tupian = '#大海报[\s\S]*?src="(.*?)">#';
$gengxin = '#<p class="tag">(.*?)</p>#';
$daoyan = '#<span>导演 ：</span>[\s\S]*?</p>#';
$bochu = '#<span>播出 ：</span>[\s\S]*?</p>#';
$leixing = '#<span>类型 ：</span>[\s\S]*?</p>#';
$niandai = '#<p class="ite(.*?)"><span>年代(.*?)</span>(.*?)</p>#';
$diqu = '#<p class="ite(.*?)"><span>地区(.*?)</span>(.*?)</p>#';
$diqu1 = '#<p class="ite(.*?)"><span>地区 ：</span>[\s]+?<a class="area(.*?)" href=(.*?)>(.*?)</a>[\s]+?</p>#';
$zhuyan = '#<p class="item item-actor">[\s\S]*?</p>#';
$mingxing = '#<span>明星 ：</span>[\s\S]*?</p>#';
preg_match_all($jianjie, $tvinfo, $jjarr1);
$jjarr1 = implode($glue, $jjarr1[0]);
$jjarr1 = str_replace(PHP_EOL, '', $jjarr1);
preg_match_all($jianjie1, $jjarr1, $jjarr);
preg_match_all($tvzz, $tvinfo, $tvarr);
preg_match_all($dyzz, $tvinfo, $dyarr);
preg_match_all($pan, $tvinfo, $ptvarr);
preg_match_all($pan1, $tvinfo, $ptvarr1);
preg_match_all($dyzz, $tvinfo, $tvlist);
preg_match_all($biaoti, $tvinfo, $btarr);
preg_match_all($tupian, $tvinfo, $tparr);
$mvsrc = implode($glue, $tvlist[0]);
preg_match_all($gengxin, $tvinfo, $gengxino);
preg_match_all($daoyan, $tvinfo, $daoyano);
preg_match_all($bochu, $tvinfo, $bochuo);
preg_match_all($leixing, $tvinfo, $leixingo);
preg_match_all($niandai, $tvinfo, $niandaio);
preg_match_all($diqu, $tvinfo, $diquo);
preg_match_all($diqu1, $tvinfo, $diquo1);
preg_match_all($zhuyan, $tvinfo, $zhuyano);
preg_match_all($mingxing, $tvinfo, $mingxingo);
preg_match_all($bflist, $mvsrc, $dyarr1);
//剧集动漫多来源判断
preg_match_all($laiyuan, $tvinfo, $laiyuanarr);
$yuan=$laiyuanarr[1];//来源英文
$yuanname=$laiyuanarr[2];//来源中文
//电影链接
$dysrc=$dyarr1[0];
$c=$dyarr1[3];//电影的播放链接
$d=$dyarr1[4];//电影来源
$gx=$gengxino[1][0];
$e=strip_tags($daoyano[0][0]);
if(!empty($e)){
	$e=strip_tags($daoyano[0][0]);
}else{
	$e=strip_tags($bochuo[0][0]);
}
$f=strip_tags($leixingo[0][0]);
$g=$niandaio[3][0];
$h=$diquo[3][0];
$hh=$diquo1[4][0];
$hi=strip_tags($zhuyano[0][0]);
if(!empty($hi)){
	$hi=strip_tags($zhuyano[0][0]);
}else{
	$hi=strip_tags($mingxingo[0][0]);
}
$jian = $jjarr[1][0];//简介
$jian = str_replace('<p class="item-desc">', '', "$jian");
$timu = $btarr[1][0];//标题
$imgs = $tparr[1][0];//图片
$panduan = $ptvarr[1][0];
$panduan1 = $ptvarr1[1][0];
$zyv="#<div class=\"g-clear js-month-page\" style=\"display:block;\">[\s\S]+?<div monitor-desc#";
$qi="#<span class='w-newfigure-hint'>(.*?)</span>#";
$zyimg="#data-src='(.*?)' alt='(.*?)'#";
preg_match_all($zyv, $tvinfo,$zyvarr);
$zylist = implode($glue, $zyvarr[0]);
$ztlizz="#<a href='(.*?)' data-daochu=to=(.*?) class='js-link'><div class='w-newfigure-imglink g-playicon js-playicon'>#";
preg_match_all($ztlizz, $zylist,$zyliarr);
preg_match_all($qi, $zylist,$qiarr);
preg_match_all($zyimg, $zylist,$imgarr);
$zyvi=$zyliarr[1];
$noqi=$qiarr[1];
$zypic=$imgarr[1];
$zyname=$imgarr[2];
$zcf = implode($glue, $tvarr[0]);
preg_match_all($tvzz1, $zcf, $tvar1);
$b = $tvar1[3];
$much = 1;
$mjk=$mkcms_mjk;
$d_scontent=explode(',',$mkcms_shoufei);
for($i=0;$i<count($d_scontent);$i++)
{
if($timu==$d_scontent[$i]){
//提示错误值
alert_href('对不起,您的观看的视频已经下架,请到官网观看.谢谢!',''.$mkcms_domain.'');
}
}
if($mkcms_user==1){//开启收费模式
//判定会员是否登录
if(!isset($_SESSION['user_name'])){
		alert_href('请注册会员登录后观看',''.$mkcms_domain.'ucenter/login.php');
	};
//获取会员信息
 $result = mysqli_query($conn,'select * from mkcms_user where u_name="'.$_SESSION['user_name'].'"');//查询会员积分
if($row = mysqli_fetch_array($result)){
	$u_points=$row['u_points'];//会员积分
	$u_plays=$row['u_plays'];//会员观看记录
	$u_end=$row['u_end'];//到期时间
	$u_group=$row['u_group'];//会员组
	}
//判断会员组
if ($u_group==2||$u_group==3){
$endtime = date('Y-m-d H:i:s',$row['u_end']);
$dqsj = date('Y-m-d H:i:s');
	if ($dqsj > $endtime) {
		$sql = 'update mkcms_user set u_group="1" where u_name="'.$_SESSION['user_name'].'"';
		alert_href('对不起,您的会员已到期,请充值续费！',''.$mkcms_domain.'ucenter/mingxi.php');
}}		
if ($u_group==1){
$d_cishu=explode(',',$u_plays);
for($i=0;$i<count($d_cishu);$i++)
{
$cishu=$i;
}
if ($cishu>=$mkcms_cishu){
	//大于免费观看次数出现此信息
	 alert_href('对不起,您的观看次数已经用完，请推荐本站给您的好友、赚取更多积分',''.$mkcms_domain.'ucenter/yaoqing.php');	
}
else
//写入观看记录
{
$uplays = $u_plays.",".$mkcmsid;
$uplays = str_replace(",,",",",$uplays);
$_data['u_plays'] =$uplays;
$sql = 'update mkcms_user set '.arrtoupdate($_data).' where u_name="'.$_SESSION['user_name'].'"';
if (mysqli_query($conn,$sql)) {
}
} 
}
//视频收费
}
?>