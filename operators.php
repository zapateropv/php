<?php

    //ARITHMETIC OPERATORS
    // + -  * / ** %

    $x = 10;
    $y = 2;
    $z = null;

    //$z = $x + $y;
    //$z = $x - $y;
    //$z = $x * $y;
    //$z = $x + $y;
    //$z = $x ** $y;
    $z = $x % $y;
    echo "{$z}<br>";


    //INCREMENT / DECREMENT OPERATORS
    // ++ --

    $counter = 0;
    $counter++;
    echo "{$counter} <br>";

    //OPERATOR PRESEDENCE
    // () ** * / % + -

    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo $total;



?>
