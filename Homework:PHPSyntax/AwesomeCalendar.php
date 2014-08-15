<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 8/14/14
 * Time: 5:04 PM
 */

date_default_timezone_set("Europe/Sofia");
?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>Calendar</title>
		<link rel="stylesheet" type="text/css" href="AwesomeCalendar.css">
	</head>
	<body>
	<div class="wrapper">
		<article class="calendar">
			<header>
				<h1>2014</h1>
			</header>
			<?php
			$calendar = new Calendar();
			$calendar->printCalendar(2014);
			?>

		</article>
	</div>
	</body>
	</html>
<?php

class Calendar
{
	const JANUARY = 1;
	const FEBRUARY = 2;
	const MARCH = 3;
	const APRIL = 4;
	const MAY = 5;
	const JUNE = 6;
	const JULY = 7;
	const AUGUST = 8;
	const SEPTEMBER = 9;
	const OCTOBER = 10;
	const NOVEMBER = 11;
	const DECEMBER = 12;


	public function printCalendar($year)
	{
		$calendar = [
			self::JANUARY => cal_days_in_month(0, self::JANUARY, $year),
			self::FEBRUARY => cal_days_in_month(0, self:: FEBRUARY, $year),
			self::MARCH => cal_days_in_month(0, self::MARCH, $year),
			self::APRIL => cal_days_in_month(0, self::APRIL, $year),
			self::MAY => cal_days_in_month(0, self::MAY, $year),
			self::JUNE => cal_days_in_month(0, self::JUNE, $year),
			self::JULY => cal_days_in_month(0, self::JULY, $year),
			self::AUGUST => cal_days_in_month(0, self::AUGUST, $year),
			self::SEPTEMBER => cal_days_in_month(0, self::SEPTEMBER, $year),
			self::OCTOBER => cal_days_in_month(0, self::OCTOBER, $year),
			self::NOVEMBER => cal_days_in_month(0, self::NOVEMBER, $year),
			self::DECEMBER => cal_days_in_month(0, self::DECEMBER, $year),
		];
		foreach ($calendar as $month => $days) {

			$this->_printMont($days, $month, $year);
		}
	}


	private function _printMont($days, $month, $year)
	{
		$weekDays = ['M', 'T', 'W', 'T', 'F', 'S', 'Sun'];

		$firstMontDay = date("l", mktime(00, 00, 00, $month, 1, $year));
		$emptyField = 0;
		switch ($firstMontDay) {
			case 'Monday':
				$emptyField = 0;
				break;
			case 'Tuesday':
				$emptyField = 1;
				break;
			case 'Wednesday':
				$emptyField = 2;
				break;
			case 'Thursday':
				$emptyField = 3;
				break;
			case 'Friday':
				$emptyField = 4;
				break;
			case 'Saturday':
				$emptyField = 5;
				break;
			case 'Sunday':
				$emptyField = 6;
				break;
		}

		echo '<article class="month">';
		echo '<header class="monthHead">';
		echo '<h2 class="monthName">' . date("F", mktime(00, 00, 00, $month, 1, $year)) . '</h2>';
		foreach ($weekDays as $weekday) {
			echo '<span class="weekDays">' . $weekday . '</span>';
		}
		echo '</header>';
		echo '<section class="monthDays">';
		for ($i = 0; $i < $emptyField; $i++) {
			echo '<span class="days"></span>';
		}
		for ($i = 1; $i <= $days; $i++) {
			echo '<span class="days">' . $i . '</span>';
		}
		echo '</section>';
		echo '</article>';
	}
}

