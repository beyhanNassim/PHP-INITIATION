<?php

function estilMajeure($age) {
    if ($age >= 18){ 
        echo True; 
    }else{
        echo False;
    }

}
echo estilMajeure(5);

?>