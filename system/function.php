<?php
if (!defined('PCFINAL')) {
	exit('Request Error!');
}
function get_usergroup_name($_var_44)
{
	$_var_45 = mysqli_query($conn,'select * from mkcms_user_group where ug_id=' . $_var_44 . '');
	if (!!($_var_46 = mysqli_fetch_array($_var_45))) {
		return $_var_46['ug_name'];
	} else {
		return '';
	}
}
function getPageHtml($_var_60, $_var_61, $_var_62)
{
	$_var_63 = 5;
	$_var_60 = $_var_60 < 1 ? 1 : $_var_60;
	$_var_60 = $_var_60 > $_var_61 ? $_var_61 : $_var_60;
	$_var_61 = $_var_61 < $_var_60 ? $_var_60 : $_var_61;
	$_var_64 = $_var_60 - floor($_var_63 / 2);
	$_var_64 = $_var_64 < 1 ? 1 : $_var_64;
	$_var_65 = $_var_60 + floor($_var_63 / 2);
	$_var_65 = $_var_65 > $_var_61 ? $_var_61 : $_var_65;
	$_var_66 = $_var_65 - $_var_64 + 1;
	if ($_var_66 < $_var_63 && $_var_64 > 1) {
		$_var_64 = $_var_64 - ($_var_63 - $_var_66);
		$_var_64 = $_var_64 < 1 ? 1 : $_var_64;
		$_var_66 = $_var_65 - $_var_64 + 1;
	}
	if ($_var_66 < $_var_63 && $_var_65 < $_var_61) {
		$_var_65 = $_var_65 + ($_var_63 - $_var_66);
		$_var_65 = $_var_65 > $_var_61 ? $_var_61 : $_var_65;
	}
	if ($_var_60 > 1) {
		$_var_67 .= '<li><a  title="上一页" href="' . $_var_62 . ($_var_60 - 1) . '&page=' . ($_var_60 - 1) . '"">上一页</a></li>';
	}
	for ($_var_68 = $_var_64; $_var_68 <= $_var_65; $_var_68++) {
		if ($_var_68 == $_var_60) {
			$_var_67 .= '<li><a style="background:#1a9cd6;"><font color="#fff">' . $_var_68 . '</font></a></li>';
		} else {
			$_var_67 .= '<li><a href="' . $_var_62 . $_var_68 . '&page=' . $_var_68 . '">' . $_var_68 . '</a></li>';
		}
	}
	if ($_var_60 < $_var_65) {
		$_var_67 .= '<li><a  title="下一页" href="' . $_var_62 . ($_var_60 + 1) . '&page=' . ($_var_60 + 1) . '"">下一页</a></li>';
	}
	return $_var_67;
}
function getPageHtmll($_var_69, $_var_70, $_var_71)
{
	$_var_72 = 5;
	$_var_69 = $_var_69 < 1 ? 1 : $_var_69;
	$_var_69 = $_var_69 > $_var_70 ? $_var_70 : $_var_69;
	$_var_70 = $_var_70 < $_var_69 ? $_var_69 : $_var_70;
	$_var_73 = $_var_69 - floor($_var_72 / 2);
	$_var_73 = $_var_73 < 1 ? 1 : $_var_73;
	$_var_74 = $_var_69 + floor($_var_72 / 2);
	$_var_74 = $_var_74 > $_var_70 ? $_var_70 : $_var_74;
	$_var_75 = $_var_74 - $_var_73 + 1;
	if ($_var_75 < $_var_72 && $_var_73 > 1) {
		$_var_73 = $_var_73 - ($_var_72 - $_var_75);
		$_var_73 = $_var_73 < 1 ? 1 : $_var_73;
		$_var_75 = $_var_74 - $_var_73 + 1;
	}
	if ($_var_75 < $_var_72 && $_var_74 < $_var_70) {
		$_var_74 = $_var_74 + ($_var_72 - $_var_75);
		$_var_74 = $_var_74 > $_var_70 ? $_var_70 : $_var_74;
	}
	if ($_var_69 > 1) {
		$_var_76 .= '<li><a  title="上一页" href="news_' . ($_var_69 - 1) . '.html"">上一页</a></li>';
	}
	for ($_var_77 = $_var_73; $_var_77 <= $_var_74; $_var_77++) {
		if ($_var_77 == $_var_69) {
			$_var_76 .= '<li class="active"><a target="_self" class="on">' . $_var_69 . '</a></li>';
		} else {
			$_var_76 .= '<li><a href="news_' . $_var_71 .'' . $_var_77 . '.html">' . $_var_77 . '</a></li>';
		}
	}
	if ($_var_69 < $_var_74) {
		$_var_76 .= '<li><a  title="下一页" href="news_' . ($_var_69 + 1) . '.html">下一页</a></li>';
	}
	return $_var_76;
}
function  fileget($flid2,$timeout = 5) {
mkdir('./cache');
mkdir('./cache/runtime');
$gxpd=time()-filemtime('./cache/runtime/'.md5($flid2));
if($gxpd>2*60*60){
set_time_limit(0);  
$ch = curl_init(); 
curl_setopt($ch,CURLOPT_REFERER,$flid2);
curl_setopt($ch,CURLOPT_COOKIESESSION,true);  
curl_setopt($ch,CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);     
curl_setopt($ch, CURLOPT_URL,$flid2);
$fcon = curl_exec($ch);  
file_put_contents('./cache/runtime/'.md5($flid2),gzdeflate($fcon));
}
$fcon=gzinflate(file_get_contents('./cache/runtime/'.md5($flid2)));
return $fcon;
}
function  fileget2($url,$timeout = 5) {
	$user_agent = "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$curl = curl_init(); 
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_USERAGENT,$user_agent);
	curl_setopt($curl, CURLOPT_REFERER,$url) ;
	curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
	curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
	curl_setopt($curl, CURLOPT_HEADER, 0); 
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION,1);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, '0');
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, '0');
	curl_setopt($curl, CURLOPT_ENCODING, '');
	return curl_exec($curl);
	curl_close($curl);
}