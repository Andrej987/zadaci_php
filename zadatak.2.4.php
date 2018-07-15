<?php

function lowest($array){

  $lowest = $array[0];

  foreach ($array as $key => $value) {
    if ($lowest > $value) {
      $lowest = $value;
    }
  }
  echo $lowest;
}

echo lowest($array = [2,2,5,7,1]);

?>
