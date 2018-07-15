<?php

function result_count($array){

  $result = [];

  foreach ($array as $item) {
    ++$result[$item];

  }
  foreach ($result as $item => $value) {
  echo $value;
  echo "<br>";
  }

}

echo result_count($array = [7,4,4,4,9]);

?>
