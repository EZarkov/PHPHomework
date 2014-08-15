<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 8/13/14
 * Time: 1:31 PM
 */
/**
 * Method that return type of given variable
 * @param $value
 * @return void
 */
function dumpVariable($value)
{
	if (is_numeric($value)) {
		var_dump($value);
	} else {
		echo gettype($value) . "\n";
	}
}


dumpVariable("hello");
dumpVariable(15);
dumpVariable(1.234);
dumpVariable(array(1, 2, 3));
dumpVariable((object)[2, 34]);