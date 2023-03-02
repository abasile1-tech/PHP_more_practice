<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    // Write your code here
	$total = 0;
	foreach ($arr as $item)
		$total += $item;
	$a = $total - $arr[0];
	$b = $total - $arr[1];
	$c = $total - $arr[2];
	$d = $total - $arr[3];
	$e = $total - $arr[4];

	$minSum = min($a,$b,$c,$d,$e);
	$maxSum = max($a,$b,$c,$d,$e);
	echo($minSum . " " . $maxSum);
}

//$arr_temp = rtrim(fgets(STDIN));

//$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$arr = [1,3,5,7,9];

miniMaxSum($arr);

