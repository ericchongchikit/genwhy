<?php
    function secondLargest($array){
        rsort($array);

        return $array[1];
    }

    $array = [1,8,2,11,60,6,73,81,9,10];
    echo secondLargest($array);
?>