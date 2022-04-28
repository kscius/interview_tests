<?php

/**
 * Given an array of $numbers, find the two numbers that sum up get $target, if not, throw and and exception
*/

function sumTwoNumbers($numbers,$target){
	for($index = 0; $index < count($numbers); $index++){
		$_number = $target - $numbers[$index];
		
		if(in_array($_number,$numbers)){
			return [$numbers[$index],$_number];
		}
	}
	
	throw new Exception("Target no encontrado");
}

var_dump(sumTwoNumbers([2,10,6,5,7],15));
var_dump(sumTwoNumbers([2,10,6,5,7],9));
var_dump(sumTwoNumbers([2,10,6,5,7],17));
var_dump(sumTwoNumbers([2,10,6,5,7],7));
