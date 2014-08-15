<?php

/**
 * Created by PhpStorm.
 * User:
 * Date: 8/14/14
 * Time: 1:20 PM
 */
function printInformationTable($name, $phone, $age, $address)
{
	echo "<tr><th>Name</th><td>$name</td>
	<tr><th>Phone number</th><td>$phone</td>
	<tr><th>Age</th><td>$age</td>
	<tr><th>Address</th><td>$address</td>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Information Table</title>
	<link rel="stylesheet" type="text/css" href="InforamtionTable.css">
</head>
<body>
<div class="wrapper">
	<header>
		<h1>This is an information table</h1>
	</header>
	<article>
		<table>
			<?php
			printInformationTable("Gosho", "08880-321-423", 24, "Hadji Dimitar");
			printInformationTable("Pesho", "0884-888-888", 67, "Suhata Reka");
			?>
		</table>
	</article>
</div>
</body>
</html>
