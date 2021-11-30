<?php

$str='zdrova boy ';





function swap(&$str, $i1, $i2) {
    $tmp = $str[$i1];
    $str[$i1] = $str[$i2];
    $str[$i2] = $tmp;
    return  $str[$i2];
}


function revers($str){
$keywords = preg_split("/[\s,]+/", $str);  
for($i=0;$i<=count($keywords);$i++)
{
$a = 0;
$b = strlen($keywords[$i])-1;
        while($a < $b) {
      swap($keywords[$i], $a, $b);
        $a ++;
        $b --;
        
    }
  
 print_r($keywords[$i]);
 echo ' ';
}
}
revers($str);
?>