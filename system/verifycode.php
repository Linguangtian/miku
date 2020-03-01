<?php
session_start();
$image = imagecreate(60, 34);
$bcolor = imagecolorallocate($image, 51, 204, 204);
$fcolor = imagecolorallocate($image, 255, 255, 255);
$str = '0123456789abcdefghijklmnopqrstuvwxyz';
$rand_str = '';
for ($i = 0; $i < 5; $i++){
	$k = mt_rand(1, strlen($str));
	$rand_str .= $str[$k - 1];
}
$_SESSION['verifycode'] = $rand_str;
imagefill($image, 0, 0, $bcolor);
imagestring($image, 7, 7, 10, $rand_str, $fcolor);
header('content-type:image/png');
imagepng($image);
?>