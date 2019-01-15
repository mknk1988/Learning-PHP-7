<?php
    $arr = array();
    $a = 0;

    for ($i=0; $i<10; $i++) { 
        # code...
        $arr[] = $i + $a;
        $a++;
    }

    print_r($arr);
?>