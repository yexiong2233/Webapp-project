<?php
   $pi = 3.141592;
   echo "\$pi 轉成整數 : ".(int)$pi."\n"; //int 把3.141592轉成整數 3.
   $input = "3.141592pi";
   echo "pi 轉成浮點數 : ".(float)$input."\n";

   $pi = 3.141592;
  settype($pi, "int");
  echo "\$pi 轉成整數: ".$pi;
  $piString = "3.241592circle"; 
  echo "是否有轉成功".settype($piString, "string");//(string)把3.241592circle轉換成字串 .
  echo "\$piString 是: ".$piString;
?>