<?php
	function lonelyinteger($a) {
    // Write your code here
		sort($a);
		print_r($a);
		for ($i = 1; $i < count($a) - 1; $i++) {
			if ($i == 1 and $a[$i] != $a[$i-1]) {
				return $a[0];
			}
			else if ($a[$i] != $a[$i-1] and $a[$i] != $a[$i+1]) {
				return $a[$i];
			}
		}
		return $a[count($a)-1];
	}
	$a = [2,1,4,4,3,2,1];
	echo(lonelyinteger($a));

