<?php
$array = [1,2,3,4,5,6];

$min = $array[0];

for ($step = 1 ; $step < count($array) ; $step++){
    if ($min > $array[$step]){
        $min = $array[$step];
    }
}

echo $min;