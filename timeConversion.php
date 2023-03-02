<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s) {
    // Write your code here
	$converted_str = "";
	if ($s[8] == 'P') {
		if ($s[0] == '0') {
			if ($s[1] == '1')
				$converted_str .= "13";
			if ($s[1] == '2')
				$converted_str .= "14";
			if ($s[1] == '3')
				$converted_str .= "15";
			if ($s[1] == '4')
				$converted_str .= "16";
			if ($s[1] == '5')
				$converted_str .= "17";
			if ($s[1] == '6')
				$converted_str .= "18";
			if ($s[1] == '7')
				$converted_str .= "19";
			if ($s[1] == '8')
				$converted_str .= "20";
			if ($s[1] == '9')
				$converted_str .= "21";
			for ($i=2; $i < strlen($s)-2; $i++) {
				$converted_str .= $s[$i];
				}
		}
		elseif ($s[0] == '1' and $s[1] != '2') {
			if ($s[1] == '0')
				$converted_str .= "22";
			if ($s[1] == '1')
				$converted_str .= "23";
			for ($i=2; $i < strlen($s)-2; $i++) {
				$converted_str .= $s[$i];
				}
		}
		else {
			for ($i=0; $i < strlen($s)-2; $i++) {
				$converted_str .= $s[$i];
			}
		}
		return $converted_str;
	}

	if ($s[8] == 'A') {
		if ($s[0] == '1' and $s[1] == '2') {
			$converted_str .= "00";
			for ($i=2; $i < strlen($s)-2; $i++) {
				$converted_str .= $s[$i];
			}
		}
		else {
			for ($i=0; $i < strlen($s)-2; $i++) {
				$converted_str .= $s[$i];
			}
		}
		return $converted_str;
	}
	return $converted_str;
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

//$s = rtrim(fgets(STDIN), "\r\n");

//$result = timeConversion($s);

//fwrite($fptr, $result . "\n");

//fclose($fptr);

$s = '11:59:59PM';
echo(timeConversion(($s)) . "\n");

