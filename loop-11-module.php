<?php

for($i = 1; $i <= 500; $i += 3 ){

    echo "loop val = {$i} <br/>";
        if($i % 11 == 0){
           break;
        }
}

?>