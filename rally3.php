<?php
$array = [1, 2, "Second", "Third", true, false];



foreach ($array as $value) {
    if(gettype($value)=='string'){
        echo $value."\n";
    }
}
?>