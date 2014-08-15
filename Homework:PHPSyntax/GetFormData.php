<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 8/14/14
 * Time: 2:49 PM
 */


/**
 * Method that take "GET" parameters from form and print them in string
 *
 */
function getFormData()
{
	$name = $_GET['name'];
	$age = $_GET['age'];
	$sex = $_GET['sex'];


	if ($name == '' || $age == '' || !isset($_GET['sex'])) {
		echo "Incorrect input";
		return;
	}
	if (!preg_match('/[a-zA-Z]/', $name) || !is_numeric($age)) {
		echo "Incorrect input";
		return;
	}
	echo "My name is $name. I am $age old. I am $sex";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Simple Form</title>
	<link rel="stylesheet" type="text/css" href="GetFormData.css">
</head>
<body>
<div class="wrapper">
	<header>
		<h1>This is a simple  form</h1>
	</header>
	<article>

		<form action="GetFormData.php" method="get">
			<fieldset>
				<legend>Personal Info:</legend>
				Name: <input type="text" name="name">
				Age: <input type="text" name="age">
				<input type="radio" name="sex" value="male">Male
				<input type="radio" name="sex" value="female">Female
				<input type="submit" name="submit" value="Submit">

				<p>
				<?php
				if (isset($_GET['submit'])) {
					getFormData();
				}
				?>
				</p>
			</fieldset>
		</form>
	</article>
</div>
</body>
</html>