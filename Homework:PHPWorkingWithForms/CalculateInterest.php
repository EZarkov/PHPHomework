<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 8/18/14
 * Time: 10:12 AM
 */
/**
 * Method that take post parameters, calculate interest and print it.
 */
function calculateInterest(){
	$money = $_POST['money'];
	$currency = $_POST['currency'];
	$cia = $_POST['cia'];
	$months = $_POST['months'];

	if(!is_numeric($money) || !is_numeric($cia)){
		echo"Not a correct input";
		return;
	}

	switch ($currency){
		case 'USD' : $currency = '&#36;'; break;
		case 'EUR' : $currency = '&#8364;'; break;
		case 'BGN' : $currency = 'BGN'; break;
	}
	$interest = $money * pow((1+ ($cia/100)/12),$months);
	printf('%1$s %2$01.2f',$currency, $interest);
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Calculate Interest</title>
	<link rel="stylesheet" type="text/css" href="Form.css">
</head>
<body>
<div class="wrapper">
	<header>
		<h1>This is a simple  form</h1>
	</header>
	<article>

		<form action="CalculateInterest.php" method="post" id="Form">
			<fieldset>

				<label for="money">Enter Amount:</label>
				<input type="text" name="money" id="money">
				<input type="radio" name="currency" id="USD" value="USD"><label for="USD" class="radioLabel">USD</label>
				<input type="radio" name="currency" id="EUR" value="EUR"><label for="EUR"  class="radioLabel">EUR</label>
				<input type="radio" name="currency" id="BGN" value="BGN"><label for="BGN"  class="radioLabel">BGN</label>
				<label for="cia">Compound Interest Amount:</label> <input type="text" name="cia" id="cia">
				<select name="months">
					<option value="6">6 Months</option>
					<option value="12">1 year</option>
					<option value="24">2 years</option>
					<option value="60">5 years</option>

				</select>
				<input type="submit" name="submit" value="Calculate">
				<p>
					<?php
					if (isset($_POST['submit'])) {
						calculateInterest();
					}
					?>
				</p>
			</fieldset>
		</form>
	</article>
</div>
</body>
</html>