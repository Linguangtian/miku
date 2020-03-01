<?php
header('Content-type:text/html; charset=utf-8');//设置编码
error_reporting(0);
if(version_compare(PHP_VERSION,'7.0.00','<')){die('<div class="php">此程序只能安装于PHP7及以上版本！ 更改换php版本后重试。</div><style>.php {text-align: center;margin-top: 120px;}</style>');}
if(file_exists('../install/install.lock')){
header("location:index_4.php");
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MKCMS安装向导 - 协议说明</title>
<link href="css/install.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
</head>
<body>
<div class="header"></div>
<div class="mainBody">
	<div class="text">
		<h3>MKCMS授权协议</h3>
		<p>版权所有MKCMS开发团队保留所有权利。<br />
			感谢您选择MKCMS。希望我们的努力能为您提供一款适用于个人建站的首先利器</p>
		<p>MKCMS官方网站为 <a href="https://mk99.net" target="_blank">https://mk99.net</a>。</p>
		<p>使用者无论个人或组织、盈利与否、用途如何（包括以学习和研究为目的），均需仔细阅读本协议，在理解、同意、并遵守本协议的全部条款后，方可开始使用MKCMS。<br />
			本授权协议适用且仅适用于本产品，MKCMS开发团队拥有对本授权协议的最终解释权。</p>
		<p>
		<h4>I. 协议许可的权利</h4>
		您可以在完全遵守本最终用户授权协议的基础上，将本源码应用于非商业用途，而不必支付源码版权授权费用。<br />
		您可以在协议规定的约束和限制范围内修改MKCMS源代码(如果被提供的话)或界面风格以适应您的网站要求。<br />
		您拥有使用本源码构建的网站中全部会员资料、文章及相关信息的所有权，并独立承担与文章内容的相关法律义务。
		</p>
		<div class="hr_8"></div>
		<p>获得商业授权之后，您可以将本源码应用于商业用途，同时依据所购买的授权类型中确定的技术支持期限、技术支持方式和技术支持内容，自购买时刻起，在技术支持期限内拥有通过指定的方式获得指定范围内的技术支持服务。商业授权用户享有反映和提出意见的权力，相关意见将被作为首要考虑，但没有一定被采纳的承诺或保证。</p>
		<p>
		<h4>II. 协议规定的约束和限制</h4>
		未获商业授权之前，不得将本源码用于商业用途（包括但不限于企业网站、经营性网站、以营利为目或实现盈利的网站）。
		</p>
		<p>
		<h4>III. 有限担保和免责声明</h4>
		本源码及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。用户出于自愿而使用本源码，您必须了解使用本源码的风险，在尚未购买产品技术服务之前，我们不承诺提供任何形式的技术支持、使用担保，也不承担任何因使用本源码而产生问题的相关责任。MKCMS及其开发团队不对使用本源码构建的网站中的文章或信息承担责任。
		</p>
		<div class="hr_8"></div>
		<p>有关MKCMS最终用户授权协议、商业授权与技术服务的详细内容，均由MKCMS官方网站独家提供。MKCMS开发团队拥有在不事先通知的情况下，修改授权协议和服务价目表的权力，修改后的协议或价目表对自改变之日起的新授权用户生效。</p>
		<div class="hr_8"></div>
		<p>电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始安装MKCMS，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。</p>
	</div>
</div>
<div class="footer"> <span class="step"></span>  <span class="formSubBtn"> <a href="javascript:void(0);" onclick="window.close();return false;" class="back">不同意</a> <a href="index_2.php" class="submit">同　意</a> </span> </div>
</body>
</html>