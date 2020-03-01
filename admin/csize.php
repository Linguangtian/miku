<?php

 function getDirSize($dir)
 { 
  $handle = opendir($dir);
  while (false!==($FolderOrFile = readdir($handle)))
  { 
   if($FolderOrFile != "." && $FolderOrFile != "..") 
   { 
    if(is_dir("$dir/$FolderOrFile"))
    { 
     $sizeResult += getDirSize("$dir/$FolderOrFile"); 
    }
    else
    { 
     $sizeResult += filesize("$dir/$FolderOrFile"); 
    }
   } 
  }
  closedir($handle);
  return $sizeResult;
 }
 // 单位自动转换函数
 function getRealSize($size)
 { 
  $kb = 1024;   // Kilobyte
  $mb = 1024 * $kb; // Megabyte
  $gb = 1024 * $mb; // Gigabyte
  $tb = 1024 * $gb; // Terabyte
  if($size < $kb)
  { 
   return $size." 0";
  }
  else if($size < $mb)
  { 
   return round($size/$kb,2)." KB";
  }
  else if($size < $gb)
  { 
   return round($size/$mb,2)." MB";
  }
  else if($size < $tb)
  { 
   return round($size/$gb,2)." GB";
  }
  else
  { 
   return round($size/$tb,2)." TB";
  }
 }
?>