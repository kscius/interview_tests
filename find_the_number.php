<?php
  
  /*
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY arr (contains the numbers maybe repeated)
 *  2. INTEGER k
 */
function findNumber($arr, $k) {
  $arr    = array_unique($arr);
  $found  = 'NO';
  if(in_array($k,$arr)){
    $found = 'YES';
  }
  echo 'Is <strong>'.$k.'</strong> in the Array? <strong>'.$found.'</strong><br>';
  return $found;
}
echo '<pre>';

$List = [1,2,3,6,9,10,12,14,18,19,20,21,23,24,25,32,36,46,49,51,53,60,61,63,65,70,72,73,76,78,79,80,87,88,90,95,97];

echo '<strong>[1,2,3,6,9,10,12,14,18,19,20,21,23,24,25,32,36,46,49,51,53,60,61,63,65,70,72,73,76,78,79,80,87,88,90,95,97]</strong><br>';

for($number = 1;$number <= 75;$number++){
    findNumber($List, rand($number,100));
}
?>