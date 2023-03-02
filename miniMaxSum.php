<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    // Write your code here
	$total = array_sum($arr);
	$minSum = $total;
	$maxSum = 0;
	foreach ($arr as $item) {
		$tmpSum = $total - $item;
		if ($tmpSum < $minSum) {
			$minSum = $tmpSum;
		}
		if ($tmpSum > $maxSum)
			$maxSum = $tmpSum;
	}
	echo($minSum . " " . $maxSum);
}

//$arr_temp = rtrim(fgets(STDIN));

//$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$arr = [1,3,5,7,9];

miniMaxSum($arr);

