<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 8/14/14
 * Time: 10:39 AM
 */

/**
 * Method that check print all 3 unique digits number smaller or equal of given number;
 * @param $number
 * @return void
 */
function nonRepeatingDigits($number)
{
	$count = 0;
	if (!is_int($number)) {
		echo('not a integer');
		return;
	}
	if ($number < 102) {
		echo 'no';

	}
	if ($number > 999) {
		$number = 999;
	}

	for ($i = 100; $i <= $number; $i++) {

		$digitArray = array_map("intval", str_split((string)$i));
		$digitMap = array();

		foreach ($digitArray as $digit) {
			$digitMap[$digit] = "";
		}

		if (sizeof($digitArray) == sizeof($digitMap)) {
			if ($count == 0) {
				echo "$i";
			} else {
				echo ", $i";
			}
			$count++;
		}
	}
	echo "\n";
}

nonRepeatingDigits(1234);

nonRepeatingDigits(145);

nonRepeatingDigits(15);

nonRepeatingDigits(247);

