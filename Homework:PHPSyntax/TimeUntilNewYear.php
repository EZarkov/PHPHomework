<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 8/14/14
 * Time: 3:58 PM
 */

date_default_timezone_set("Europe/Sofia");

/**
 * Method that print hours, minutes, seconds and days with remaining  time till NEW YEAR
 */
function timeUntilNewYear(){
	$newYear =  mktime(00, 00, 00, 1, 1, 2015 );
	$today = time();
	$seconds =  $newYear - $today;
	$minutes =round($seconds / 60);
	$hours = round($seconds / 3600);
	function getTimeInDays($secs){
		$d = floor($secs / 86400);
        $h = $secs / 3600 % 24;
        $m = $secs / 60 % 60;
        $s = $secs % 60;
		return "Days:Hours:Minutes:Seconds $d:$h:$m:$s\n";
	}
	echo "Hours until new year : $hours \n";
	echo "Minutes until new year : $minutes \n";
	echo "Seconds until new year : $seconds \n";
	echo getTimeInDays($seconds);
}

timeUntilNewYear();