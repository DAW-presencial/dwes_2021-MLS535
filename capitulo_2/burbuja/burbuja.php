<?php

function ordenar($array) {
    for($i=1, $j=count($array); $i<$j; $i++) {
        $k = $i;
        while($k > 0 && $array[$k-1] > $array[$k]) {
            list($array[$k], $array[$k-1]) = array($array[$k-1], $array[$k]);
            $k--;
        }
    }
    return $array;
}
 
$array=array(10,8,7,5,1,2,3,4);


?>