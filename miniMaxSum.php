<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    // Write your code here
	$a = $arr[1] + $arr[2] + $arr[3] + $arr[4];
	$b = $arr[0] + $arr[2] + $arr[3] + $arr[4];
	$c = $arr[0] + $arr[1] + $arr[3] + $arr[4];
	$d = $arr[0] + $arr[1] + $arr[2] + $arr[4];
	$e = $arr[0] + $arr[1] + $arr[2] + $arr[3];
	$minSum = min($a,$b,$c,$d,$e);
	$maxSum = max($a,$b,$c,$d,$e);
	echo($minSum . " " . $maxSum);
}

//$arr_temp = rtrim(fgets(STDIN));

//$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$arr = [1,3,5,7,9];

miniMaxSum($arr);

