<?php

function loca(){

  for ($i=0; $i < 100 ; $i++) {

    if ($i % (3 * 5) == 0) {
      echo "LOCASTIC <br>";

    }elseif ($i % 5 == 0) {
      echo "STIC <br>";

    }elseif  ($i % 3 == 0){
      echo "LOCA <br>";

    }else {
      echo $i ."<br>";
    }
  }
}

echo loca();

?>
