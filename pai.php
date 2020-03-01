<?php
$seach="http://mp34.butterfly.mopaasapp.com/meipai.php";
$rurl=file_get_contents($seach);
$rurl= str_replace("document.write('<a target=\"_blank\" href=\"https://weibo.com/1797430134/I61QPgQ1Q\"><img src=\"https://gitee.com/atool/mp34/raw/master/2019090822213072.gif\" width=\"100%\"></a>');",'', "$rurl");
$rurl= str_replace("https://js.users.51.la/18968191.js",'', "$rurl");
echo $rurl;
?>