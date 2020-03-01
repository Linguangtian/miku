<?php
include('system/inc.php');
include('system/simple_html_dom.php');
error_reporting(0); 
define('TOKEN', $mkcms_token);
define('DOMAIN', $mkcms_domain);
define('GUANZHU', $mkcms_guanzhu);
define('CXURL', $mkcms_cxzy);
$wechatObj = new wechatCallbackapiTest();
if (isset($_GET['echostr'])) {
	$wechatObj->valid();
	}else{
	$wechatObj->responseMsg();
}
class wechatCallbackapiTest
{
//验证签名
public function valid()
{
header('content-type:text');   
ob_clean(); 
$echoStr = $_GET["echostr"];
$signature = $_GET["signature"];
$timestamp = $_GET["timestamp"];
$nonce = $_GET["nonce"];
$token = TOKEN;
$tmpArr = array($token, $timestamp, $nonce);
sort($tmpArr, SORT_STRING);
$tmpStr = implode($tmpArr);
$tmpStr = sha1($tmpStr);
if($tmpStr == $signature){
	echo $echoStr;
	exit;
	}
	}
//响应消息
public function responseMsg()
{
	$postStr = file_get_contents('php://input');
	if (!empty($postStr)){
		$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
		$RX_TYPE = trim($postObj->MsgType);
			switch ($RX_TYPE)
			{
				case "event":
				$result = $this->receiveEvent($postObj);
				break;
				case "text":
				$result = $this->receiveText($postObj);
				break;
				case "image":
				$result = $this->receiveImage($postObj);
				break;
				case "voice":
				$result = $this->receiveVoice($postObj);
				break;
				default:
				$result = "unknown msg type: ".$RX_TYPE;
				break;
				}
				echo $result;
				}else {
					echo "";
					exit;
					}
					}
//接收事件消息
private function receiveEvent($object)
{
	$content = "";
	global $webname;
	switch ($object->Event)
	{
		case "subscribe":
		$content = GUANZHU;
		break;
		case "unsubscribe":
		$content = "取消关注";
		break;
		}
		if(is_array($content)){
			$result = $this->transmitNews($object, $content);
			}else{
				$result = $this->transmitText($object, $content);
				}
				return $result;
}
//接收文本消息
private function receiveText($object){
	$a = ($object->Content);
	$keyword = trim($a);
	$soword=urldecode($keyword);
	$murl=DOMAIN.'star.php?wd='.$keyword.'&tab=dy&pageno=1';
	$mseach=fileget($murl,5);
	$mxss="#<a class='stui-vodlist__thumb lazyload' href='(.*?)' title='(.*?)'#";
	$mxjj='#<div class="col-md-1 col-sm-1 col-xs-1">介绍：(.*?)</div>#';//简介
	preg_match_all($mxss,$mseach,$sarr1);
	preg_match_all($mxjj,$mseach,$sarr2);
	$mxinfo=$sarr2[1][0];
	$mxlink=$sarr1[1][0];//链接
	$mxtitle=$sarr1[2][0];//链接
	$mxlink = str_replace("../../", "", "$mxlink");
	$surl=DOMAIN.'seacher.php?wd='.$keyword;
	$seach=fileget($surl,5);
	$szz='#class="text-muted" href="(.*?)" title="(.*?)"#';
	$szz2='#<h3 class="title"><a href="(.*?)"#';
	preg_match_all($szz,$seach,$sarr3);
	preg_match_all($szz2,$seach,$sarr4);
	$title=$sarr3[2];//标题
	$link=$sarr4[1];//链接
	$link1 = str_replace("../../", "", "$link[0]");
	$link2 = str_replace("../../", "", "$link[1]");
	$link3 = str_replace("../../", "", "$link[2]");
	$link4 = str_replace("../../", "", "$link[3]");
	$link5 = str_replace("../../", "", "$link[4]");
	if (!empty($mxinfo)){
		$mtxt=$keyword."简介：".$mxinfo."\r\n\n点击播放<".$keyword.">的最新电影\r\n\n<a href='".DOMAIN.$mxlink."'><".$mxtitle."></a>\r\n\n";}
	if(!empty($link)){
		$txt="恭喜,成功找到视频,请点击播放：\r\n\n";}
	if(!empty($link1)){
		$txt1="<a href='".DOMAIN.$link1."'>《".$title[0]."》</a>\r\n\n";}else{$txt1="";}
	if(!empty($link2)){
		$txt2="<a href='".DOMAIN.$link2."'>《".$title[1]."》</a>\r\n\n";}else{$txt2="";}
	if(!empty($link3)){
		$txt3="<a href='".DOMAIN.$link3."'>《".$title[2]."》</a>\r\n\n";}else{$txt3="";}
	if(!empty($link4)){
		$txt4="<a href='".DOMAIN.$link4."'>《".$title[3]."》</a>\r\n\n";}else{$txt4="";}
	if(!empty($link5)){
		$txt5="<a href='".DOMAIN.$link5."'>《".$title[4]."》</a>\r\n\n";}else{$txt5="";}
	if ((!empty($mxinfo))||(!empty($link))){
		$arr = $mtxt.$txt.$txt1.$txt2.$txt3.$txt4.$txt5."<a href='".DOMAIN."seacher-".$soword.".html'>点击查看<".$keyword.">的更多搜索结果</a>";
	}else{
		$arr = "您搜索的影片<".$keyword.">未找到！！<a href='".DOMAIN."'>点击进入官网</a>";}
		if (is_array($arr)) {
			if (isset($arr[0])) {
				$result = $this->transmitNews($object, $arr);
				}
				} else {
					$result = $this->transmitText($object, $arr);
					}
					return $result;
					}
//接收图片消息
private function receiveImage($object)
{
	$content = array("MediaId"=>$object->MediaId);
	$result = $this->transmitImage($object, $content);
	return $result;
	}
//回复文本消息
private function transmitText($object, $content)
{
	if (!isset($content) || empty($content)){
		return "";
		}
		$xmlTpl = "<xml>
		<ToUserName><![CDATA[%s]]></ToUserName>
		<FromUserName><![CDATA[%s]]></FromUserName>
		<CreateTime>%s</CreateTime>
		<MsgType><![CDATA[text]]></MsgType>
		<Content><![CDATA[%s]]></Content>
		</xml>";
		$result = sprintf($xmlTpl, $object->FromUserName, $object->ToUserName, time(), $content);
		return $result;
}
//回复图文消息
private function transmitNews($object, $newsArray)
{
	if(!is_array($newsArray)){
		return "";
		}
		$itemTpl = "<item>
		<Title><![CDATA[%s]]></Title>
		<Description><![CDATA[%s]]></Description>
		<PicUrl><![CDATA[%s]]></PicUrl>
		<Url><![CDATA[%s]]></Url>
		</item>";
		$item_str = "";
		foreach ($newsArray as $item){
		$item_str .= sprintf($itemTpl, $item['Title'], $item['Description'], $item['PicUrl'], $item['Url']);
		}
		$xmlTpl = "<xml>
		<ToUserName><![CDATA[%s]]></ToUserName>
		<FromUserName><![CDATA[%s]]></FromUserName>
		<CreateTime>%s</CreateTime>
		<MsgType><![CDATA[news]]></MsgType>
		<ArticleCount>%s</ArticleCount>
		<Articles>
		$item_str</Articles>
		</xml>";
		$result = sprintf($xmlTpl, $object->FromUserName, $object->ToUserName, time(), count($newsArray));
		return $result;
		}
//回复图片消息
private function transmitImage($object, $imageArray){
	$itemTpl = "<Image>
	<MediaId><![CDATA[%s]]></MediaId>
	</Image>";
	$item_str = sprintf($itemTpl, $imageArray['MediaId']);
	$xmlTpl = "<xml>
	<ToUserName><![CDATA[%s]]></ToUserName>
	<FromUserName><![CDATA[%s]]></FromUserName>
	<CreateTime>%s</CreateTime>
	<MsgType><![CDATA[image]]></MsgType>
	$item_str
	</xml>";$result = sprintf($xmlTpl, $object->FromUserName, $object->ToUserName, time());
	return $result;
	}
}
?>