<?php

/**
 * validate if a number is divisible by 3 or 5 or both
 */

 function isDivisible($number){
    $divisible = 'Non';
    if($number % 3 == 0 && $number % 5 == 0){
            $divisible = 'Both';
    }
    elseif($number % 3 == 0){
        $divisible = '3';
    }
    elseif($number % 5 == 0){
        $divisible = '5';
    }
    echo '<br>- Number <strong>'.$number.'</strong> is divisible by 3 or 5 or both? = <strong>'.$divisible.'</strong>';
    return $divisible;
 }
 echo '<pre>';
 for($number = 1;$number <= 80;$number++){
     isDivisible(rand($number,150));
 }