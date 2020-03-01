<?php
include('system/inc.php');
if(!file_exists('./install/install.lock')){
header('location:/install/');
}
include('template/'.$mkcms_bdyun.'/live.php');
?>