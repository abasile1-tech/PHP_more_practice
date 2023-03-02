<?php
	function diagonalDifference($arr) {
    // Write your code here
		$newArray = [];
		foreach($arr as $item) {
			foreach($item as $thingy) {
				array_push($newArray,$thingy);
			}
		}
		$arrayLength = count($newArray);
		$sideLength = sqrt(count($newArray));
		$skipA = $sideLength + 1;
		$skipB = $sideLength - 1;
		$a = $newArray[0];
		$b = 0;
		$i = 0;
		while ($i < $arrayLength-1) {
			$i += $skipA;
			$a += $newArray[$i];
		}
		$i = 0;
		while ($i < $arrayLength- 1 - $skipB) {
			$i += $skipB;
			$b += $newArray[$i];
		}
		return abs($a-$b);
	}
	$arr = [[1,2,3],[4,5,6],[9,8,9]];
	echo (diagonalDifference(($arr)));