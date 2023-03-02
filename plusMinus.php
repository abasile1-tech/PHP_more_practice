<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    // Write your code here
    $array_length = count($arr);
    $num_pos = 0;
    $num_neg = 0;
    $num_zero = 0;
    foreach ($arr as $item) {
        if ($item > 0)
            $num_pos++;
        elseif ($item < 0)
            $num_neg++;
        else
            $num_zero++;
    }

    $ratio_pos = $num_pos / $array_length;
    $ratio_neg = $num_neg / $array_length;
    $ratio_zero = $num_zero / $array_length;

    echo(number_format($ratio_pos, 6) . "\n");
    echo(number_format($ratio_neg, 6) . "\n");
    echo(number_format($ratio_zero, 6));

}

//$n = intval(trim(fgets(STDIN)));

//$arr_temp = rtrim(fgets(STDIN));

//$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$arr = [1,1,0,-1,-1];

plusMinus($arr);
