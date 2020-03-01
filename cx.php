<?php
$start=time();
if (empty($_GET['page'])) {
    $_GET['page'] = '1';
}

$mkcms_cxzy = 'http://www.123ku.com/inc/feifei3.4/';

if (empty($_GET['cid'])) {
    $cxurl = $mkcms_cxzy;
    $url = $cxurl . "?p=" . $_GET['page'];
    $cache_file = dirname(__FILE__) . '/cache/index/cx_p' . $_GET['page'] . '.html';
} else {
    $cxurl = $mkcms_cxzy . "?cid=" . $_GET["cid"];
    $url = $mkcms_cxzy . "?p=" . $_GET['page'] . "&cid=" . $_GET['cid'];
    $cache_file = dirname(__FILE__) . '/cache/index/cx_p' . $_GET['page'] . '_cid' . $_GET['cid'] . '.html';
}
/*           开始缓存处理               */
$remain_seconds = $file_timestamp = 0;

$config = array(
    'index_file' => dirname(__FILE__) . '/cx.php', //你首页的文件名
    'cache_file' => $cache_file, //要缓存的文件名
    'expire_seconds' => 3600, //过期的秒数（60秒=1分钟）
);
/*
if (hasCached($config, $remain_seconds, $file_timestamp)) {

    $html = '';
    $html .= file_get_contents($config['cache_file']);

    die($html);
}*/

include('system/inc.php');
error_reporting(0);
header('Content-Type:text/html;charset=UTF-8');

$list=json_decode(file_get_contents($cxurl),true);
$data=json_decode(file_get_contents($url),true);
$recordcount = $data['page']['recordcount'];
$pagesize = $data['page']['pagesize'];



ob_end_flush();
ob_start();
include('template/' . $mkcms_bdyun . '/cx.php');
$content = ob_get_contents();
file_put_contents($cache_file, $content);
ob_end_flush();

function hasCached($config, &$remain_seconds, &$file_timestamp)
{

    if (!file_exists($config['cache_file'])) {
        return FALSE;
    }
    if (filesize($config['cache_file']) === 0) {
        return FALSE;
    }
    $file_timestamp = filemtime($config['cache_file']);
    $remain_seconds = $config['expire_seconds'] - (time() - $file_timestamp);
    if ($remain_seconds <= 0) {
        return FALSE;
    }
    return TRUE;
}


?>



