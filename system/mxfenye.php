<?php
$fenyeurl = "https://so.360kan.com/index.php?kw=".$flid1."&tab=".$leixing."&from=&pageno=".$pageno; 
$prurl=fileget2($fenyeurl,5);
$fenyema="#<div monitor-desc='分页' id='js-ew-page' data-block='js-ew-page'  class='ew-page'>[\s\S]+?<div class=\"eb-foot \" data-block=\"tj-foot\" monitor-desc=\"foot\" monitor-shortpv>#";
preg_match_all($fenyema, $prurl,$yeshua); 
$yeshu=implode($glue, $yeshua[0]);
$yeshu = str_replace('<div class="eb-foot " data-block="tj-foot" monitor-desc="foot" monitor-shortpv>', '', "$yeshu");
$yeshu = str_replace('<a href=', '<li><a href=', "$yeshu");
$yeshu = str_replace('?kw=', 'mxstar_', "$yeshu");
$yeshu = str_replace('&tab=', '_', "$yeshu");
$yeshu = str_replace('&from=&pageno=', '_', "$yeshu");
$yeshu = str_replace("' target='_self", ".html' target='_self", "$yeshu");
$yeshu = str_replace(" class='btn'","", "$yeshu");
$yeshu = str_replace(" <a target='_self' class='on'>", "<li class='active'> <a target='_self' class='on'>", "$yeshu");
$yeshu = str_replace('</a>', '</a></li>', "$yeshu");
$yeshu = str_replace("下一页&gt;", '下一页', "$yeshu");
$yeshu = str_replace("&lt;上一页", '上一页', "$yeshu");
echo $yeshu;
?>