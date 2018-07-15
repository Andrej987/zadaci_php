<?php

function palindrome ($string){

$i = 0;
$k = -1;

while($string[$i] && $string[$k]){
   $k++;
   $i--;


   if($string[$i] == $string[$k]){
       echo "TRUE";
       break;
   } else {
       echo "FALSE";
       break;
   }

}
}

echo palindrome("ANA8");


?>
