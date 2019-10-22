<?php
function product($arr){
    $result = 1;
    foreach($arr as $num){
        $result = $result * $num; 
    }
    return $result;
}
$array =[1,3,5,7,9];
echo product($array)
?>