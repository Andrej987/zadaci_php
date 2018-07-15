<?php

function eksponent($n, $m){

   $result = 1;
   for($i = 0; $i < $m; $i++){
       $result *= $n;
   }
   return $result;
}

echo eksponent(2,8);

 ?>
