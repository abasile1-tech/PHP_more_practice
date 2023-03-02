<?php
	function countingSort($arr) {
    // Write your code here
		$B = [];
		for ($i=0; $i < 100; $i++) {
				array_push($B,0);
		}
		for ($i = 0; $i < count($arr); $i++) {
			$B[$arr[$i]]++;
		}
		return $B;
	}
$arr = [1,1,3,2,1];
print_r(countingSort($arr));