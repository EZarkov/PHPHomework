<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 8/13/14
 * Time: 11:43 AM
 */

/**
 * Method that print expression of sum of 2 numbers
 * @param $firstNumber
 * @param $secondNumber
 * @return void
 */

function sumTwoNumbers($firstNumber, $secondNumber)
{
	$result = $firstNumber + $secondNumber;
	$result = round($result, 2);
	//I use sprintf because result must be formated to 2 symbols after decimal delimeter
	echo sprintf("\$firstNumber + \$secondNumber = %1s + %2s = %3$0.2f\n", $firstNumber, $secondNumber, $result);
}

sumTwoNumbers(2, 5);

sumTwoNumbers(1.567808, 0.356);

sumTwoNumbers(1234.5678, 333);