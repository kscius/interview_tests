<?php

/*
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER l
 *  2. INTEGER r
 */

function oddNumbers($l, $r) {
    $odds = [];
    for($number = $l;$number <= $r;$number++){
        if($number % 2 != 0){
            $odds[] = $number;   
        }
    }
    echo '<br>retunring <strong>['.implode(',',$odds).']</strong> of odd numbers between <strong>'.$l.' and '.$r.'</strong>';
    return $odds;
}

echo '<pre>';
for($number = 1;$number <= 80;$number++){
    $final = rand($number,90);

    if($final === $number){
        $final = rand($number,90);
    }

    oddNumbers($number,$final);
}