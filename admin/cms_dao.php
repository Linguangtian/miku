<?php

include('../system/inc.php');
Header( "Content-type:   application/octet-stream "); 
Header( "Accept-Ranges:   bytes "); 
header( "Content-Disposition:   attachment;   filename=mkcms.txt "); 
header( "Expires:   0 "); 
header( "Cache-Control:   must-revalidate,   post-check=0,   pre-check=0 "); 
header( "Pragma:   public "); 

if (isset($_GET['cpass'])) {
$result = mysqli_query($conn,'select * from mkcms_user_card where c_pass like "%'.$_GET['cpass'].'%" and c_used=0');
}else
{
$result = mysqli_query($conn,'select * from mkcms_user_card where c_used=0');	
}
echo "卡密"."\r\n";
while ($rs=mysqli_fetch_array($result)){
	
	echo $rs['c_number']."\r\n";

}
?>
