<?php

start(array(
    'index_file' => dirname(__FILE__) . '/default.php', //你首页的文件名
    'cache_file' => dirname(__FILE__) . '/cache/index/index.html', //要缓存的文件名
    'expire_seconds' => 36000, //过期的秒数（60秒=1分钟）
));

function start($config) {
    $remain_seconds = $file_timestamp = 0;

  /*  if (hasCached($config, $remain_seconds, $file_timestamp)) {
        $html = '';
        //$html .= '<!-- [当前为缓存页面，距离更新还有剩余' . $remain_seconds . '秒] -->' . "\r\n";
       // $html .= '<!-- [该缓存页面生成于' . date('Y-m-d H:i:s', $file_timestamp) . '] -->' . "\r\n";
        $html .= file_get_contents($config['cache_file']);
        die($html);
    }*/

    ob_start();
    include($config['index_file']);
    $content = ob_get_contents();
    file_put_contents($config['cache_file'], $content);
    ob_end_flush();
}

function hasCached($config, &$remain_seconds, &$file_timestamp) {
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