<?php 
    $i = 0;
    $lastInteration = 100;

    for ($i; $i <= $lastInteration; $i++) {
        echo "$i, ";
    }
    

    $i = 100;
    $lastInteration = 1;

    for ($i; $i >= $lastInteration; $i--) {
        echo "$i, ";
    }
    

    $a = 5;
    $b = 7;

    echo $a + $b;


    $a = "ABCD";
    $b = "EFGH";

    echo 'Alphabet' . $a . $b;


    $lastIteration = 100;
    $i = 0;

    while ($i < $lastIteration) {
        echo "$i, ";

        $i++;
    }
