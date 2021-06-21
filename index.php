<?php
function checkCount($arr,$number){
    $count=0;
    for ($i=0;$i<count($arr);$i++){
        if ($number==$arr[$i]){
            $count++;
        }
    }
    return $count;
}
$array=[1,5,4,7,8,5,2,1,5,5,7,8,9,6,21,5,23,58,7,5,21,47,8,5,1,47,8,5,2,4,5,2,6];
echo checkCount($array,2);
