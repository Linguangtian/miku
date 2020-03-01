<?php
header('Content-type:text/html; charset=utf-8');//设置编码
define('PCFINAL', TRUE);
include('../system/library.php');
error_reporting(0);
if(version_compare(PHP_VERSION,'7.0.00','<')){die('<div class="php">请更换php7再来安装。</div><style>.php {text-align: center;margin-top: 120px;}</style>');}
if(file_exists('../install/install.lock')){
exit('<div class="alert alert-warning">您已经安装过，如需重新安装请修改<font color=red> install/install.lock为install.php</font>后再安装！</div>');
}
set_time_limit(0);
if (isset($_POST['save'])) {
	$str = '';
	$str .= '<?php';
	$str .= "\n";
	$str .= '//Mysql数据库信息';
	$str .= "\n";
	$str .= 'if(!defined(\'PCFINAL\')) exit(\'Request Error!\');';
	$str .= "\n";
	$str .= 'define(\'DATA_HOST\', \''.$_POST['db_host'].'\');';
	$str .= "\n";
	$str .= 'define(\'DATA_USERNAME\', \''.$_POST['db_username'].'\');';
	$str .= "\n";
	$str .= 'define(\'DATA_PASSWORD\', \''.$_POST['db_password'].'\');';
	$str .= "\n";
	$str .= 'define(\'DATA_NAME\', \''.$_POST['db_name'].'\');';
	$str .= "\n";
	$str .= '?>';
	$files = '../system/data.php';
	$ff = fopen($files,'w+');
	fwrite($ff,$str);
	if (!@$link = mysqli_connect($_POST['db_host'],$_POST['db_username'],$_POST['db_password'])) {
		alert_href('数据库连接失败！请重新输入连接参数。','index.php');
	}else{
		if (!mysqli_select_db($link,$_POST['db_name'])) {
			if (!mysqli_query($link,'CREATE DATABASE '.$_POST['db_name'].'')) {
				alert_back('创建失败，请联系空间商确认是否有数据库创建权限！');
			}
		}
		mysqli_select_db($link,$_POST['db_name']);
		mysqli_query($link,'set names utf8');
		$lines = file("data.sql");
		foreach ($lines as $line) {
			// Skip it if it's a comment
			if (substr($line, 0, 2) == '--' || $line == '') continue;
			// Add this line to the current segment
			$templine.= $line;
			// If it has a semicolon at the end, it's the end of the query
			if (substr(trim($line) , -1, 1) == ';') {
				// Perform the query
				mysqli_query($link,$templine) or print ('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
				// Reset temp variable to empty
				$templine = '';
			}
		}
		rename('install.php','install.lock');
		header("location:index_3.php");
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/install.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<title>MKCMS安装向导</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
<link rel="stylesheet" href="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<style>
	body{font-family:"微软雅黑"; font-size:14px;}
	.wrap1{position:absolute; top:0; right:0; bottom:0; left:0; margin:auto }/*把整个屏幕真正撑开--而且能自己实现居中*/
	.main_content{margin-left:auto; margin-right:auto; text-align:left; float:none; border-radius:8px;}
	.form-group{position:relative;}
	.input{width:100%; border:1px solid #3872f6; border-radius:3px; line-height:40px; padding:2px 5px 2px 30px; background:none;}
	.icon_font{position:absolute; bottom:15px; left:10px; font-size:18px; color:#3872f6;}
	.font16{font-size:16px;}
	.mg-t10{margin-top:10px;}
	.input-note{color: #999; font-size: 12px; padding-top: 2px; line-height: 12px; }
	@media (min-width:200px){.pd-xs-20{padding:20px;}}
	@media (min-width:768px){.pd-sm-50{padding:50px;}}
	#grad {
	  background: -webkit-linear-gradient(#4990c1, #52a3d2, #6186a3); /* Safari 5.1 - 6.0 */
	  background: -o-linear-gradient(#4990c1, #52a3d2, #6186a3); /* Opera 11.1 - 12.0 */
	  background: -moz-linear-gradient(#4990c1, #52a3d2, #6186a3); /* Firefox 3.6 - 15 */
	  background: linear-gradient(#4990c1, #52a3d2, #6186a3); /* 标准的语法 */
	}
</style>
</head>
<body>
   <form method="post"> 
    <div class="container wrap1" style="height:680px;">
            <h2 class="mg-b20 text-center">MKCMS安装向导</h2>
            <div class="col-sm-8 col-md-8 center-auto pd-sm-50 pd-xs-20 main_content">
			
                <p class="text-left font16">数据库服务器</p>
                    <div class="form-group mg-t10">
                        <input id="db_host" type="text" name="db_host" class="input" placeholder="请输入数据库服务器" value="localhost"/>
                    </div>
					<p class="input-note">按服务器提供商提供的填写，一般为 localhost 或者 127.0.0.1</p>
				<p class="text-left font16">数据库名</p>
                    <div class="form-group mg-t10">
                        <input id="db_name" name="db_name" type="text" class="input" placeholder="请输入数据库名" />
                    </div>
					<p class="input-note">按服务器提供商提供的填写，如果有权限也可自己创建。</p>
					<p class="text-left font16">数据库用户名</p>
                    <div class="form-group mg-t10">
                        <input id="db_username" name="db_username" name="db_password" type="text" class="input" placeholder="请输入数据库用户名" />
                    </div>
					<p class="input-note">按服务器提供商提供的填写</p>
					<p class="text-left font16">数据库密码</p>
                    <div class="form-group mg-t10">
                        <input id="db_password" name="db_password" type="text" class="input" placeholder="请输入数据库密码" />
                    </div>
					<p class="input-note">按服务器提供商提供的填写</p>
        </div><!--row end-->
    </div><!--container end-->
<div class="footer"> <span class="step3"></span>  <span class="formSubBtn"> <a href="javascript:void(0);" onclick="history.go(-1);return false;" class="back">返 回</a> <button id="save" name="save" class="submit">开始安装</a>
		</span> </div> </form>   
</body>
</html>
