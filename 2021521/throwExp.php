<?php

function check($sum){
    if( $sum == 0){
        throw new Exception("Summary is Zero!!",100);
    
    }
    return $sum;
}
try{
    $sum = 0;
    echo "The Answer is".(5/check($num));
}catch(Exception $e){
    echo "Error Message:".$e->getMessage()."\n";
    echo "Error Code: ".$e->getCode()."\n";
}
?>