<?php 
if($leixing=="dongman"){$fenyeurl = "http://www.360kan.com/".$leixing."/list.php?cat=".$cat."&year=".$year."&area=".$area."&rank=".$rank."&pageno=".$pageno;}
else if($leixing=="zongyi"){$fenyeurl = "http://www.360kan.com/".$leixing."/list.php?cat=".$cat."&act=".$act."&area=".$area."&rank=".$rank."&pageno=".$pageno;}
else{$fenyeurl = "http://www.360kan.com/".$leixing."/list.php?cat=".$cat."&year=".$year."&area=".$area."&act=".$act."&rank=".$rank."&pageno=".$pageno;}
$prurl=fileget($fenyeurl,5);
$fenyema="#class='ew-page'>[\s\S]+?<div class=\"s-common-body\">#";
preg_match_all($fenyema, $prurl,$yeshua); 
$yeshu=implode($glue, $yeshua[0]);
$yeshu = str_replace('class=\'ew-page\'>', '', "$yeshu");
$yeshu = str_replace('http://www.360kan.com/', '', "$yeshu");
$yeshu = str_replace('dianying/list.php?', 'movie', "$yeshu");
$yeshu = str_replace('dianshi/list.php?', 'tv', "$yeshu");
$yeshu = str_replace('dongman/list.php?', 'dongman', "$yeshu");
$yeshu = str_replace('zongyi/list.php?', 'zongyi', "$yeshu");
$yeshu = str_replace('cat=', '_', "$yeshu");
$yeshu = str_replace('&year=','_', "$yeshu");
$yeshu = str_replace('&area=', '_', "$yeshu");
$yeshu = str_replace('&act=','_', "$yeshu");
$yeshu = str_replace('&rank=', '_', "$yeshu");
$yeshu = str_replace('<a href=', '<li><a href=', "$yeshu");
$yeshu = str_replace('<a target=', '<li class="active"><a target=', "$yeshu");
$yeshu = str_replace('</a>', '</a></li>', "$yeshu");
$yeshu = str_replace("class='btn'", '', "$yeshu");
$yeshu = str_replace("&pageno=", '_', "$yeshu");
$yeshu = str_replace("' target='_self'", ".html' target='_self'", "$yeshu");
$yeshu = str_replace("<span>...</span>", '', "$yeshu");
$yeshu = str_replace("下一页&gt;", '&gt', "$yeshu");
$yeshu = str_replace("&lt;上一页", '&lt;', "$yeshu");
echo $yeshu;
?>