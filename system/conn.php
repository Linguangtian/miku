<?php
error_reporting(E_ALL^E_DEPRECATED);
ob_start();
if (!session_id()) session_start();
define('PCFINAL', TRUE);
date_default_timezone_set('PRC');//设置时区
header('Content-type:text/html; charset=utf-8');//设置编码
include('data.php');
$conn = mysqli_connect(DATA_HOST, DATA_USERNAME, DATA_PASSWORD);
mysqli_select_db($conn,DATA_NAME);
mysqli_query($conn,'set names utf8');
$cms_version = 'v6.2.6-修改版-20200205';




?>