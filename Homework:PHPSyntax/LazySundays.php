<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 8/14/14
 * Time: 12:48 PM
 */

/**
 * Printing all sundays in current month
 */
date_default_timezone_set("Europe/Sofia");
for ($i = 1; $i <= 31; $i++) {
	if (date("l", mktime(0, 0, 0, date("m"), $i, date("Y"))) == "Sunday") {
		echo date("l jS F, Y", mktime(0, 0, 0, date("m"), $i, date("Y")));
		echo "\n";
	}
}
