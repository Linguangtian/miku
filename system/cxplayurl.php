<?php
error_reporting(0);
function unicode_decode($name){
	$json = '{"str":"'.$name.'"}';
	$arr = json_decode($json,true);
	if(empty($arr)) return '';
	return $arr['str'];
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