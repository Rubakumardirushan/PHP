<?php
$numbers = [1, 2, 3, 4, 5];
 $square= array_map(function($n){
    return $n*$n;
 }, $numbers);
 print_r($square);

foreach($square as $index=>$square){
    echo $index ."\n " .$square ."\n";
  
}
if(in_array(1, $square)){
    echo "yes\n";
}else{
    echo "no\n";
}
?>