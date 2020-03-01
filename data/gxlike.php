<?php
$vname ="#href=\"(.*?)\" data-from=\"(.*?)\">#";
$lname ="#<div class=\"title\">(.*?)</div>#";
$vvlist ="#<div id=\"listitem_page[\s\S]+?</code>#";
$vimg ="#<img _src=\"(.*?)\"#";
preg_match_all($vvlist, $rurl,$imglist);
$zcf=implode($glue, $imglist[0]);
preg_match_all($vimg, $zcf,$imgarr); 
preg_match_all($lname, $rurl, $xarr0);
preg_match_all($vname, $rurl, $xarr);
$xbflist = $xarr[1];
$xname = $xarr[2];
$ximg = $imgarr[1];
$yname = $xarr0[1];
$i=0;
foreach ($xname as $key => $xvau) {
if ($i<12){
$ccb = base64_encode($xbflist[$key]).".html";
echo "<li class='col-md-6 col-sm-4 col-xs-3'>
<div class='stui-vodlist__box'>
<a title='$yname[$key]' class='stui-vodlist__thumb lazyload' href='$ccb' data-original='$ximg[$key]'>
<span class='play hidden-xs'></span>
<span class='pic-text text-right'></span>
</a>
<div class='stui-vodlist__detail padding-0'>
<h4 class='title text-overflow'>
<a title='$yname[$key]' href='$ccb'>$yname[$key]</a>
</h4>
<p class='text text-overflow text-muted hidden-xs'></p>
</div>
</div>
</li>";
$i ++;}
}?>