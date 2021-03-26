<?php
for($i=2,$j=1;$i<=9 || $j<=9;$j++){
    if($j>=9){
        $i++;
        $i=1;
        echo "\n";
        }
    {
        echo "$i*$j=". $i*$j;","
    }
}
?>