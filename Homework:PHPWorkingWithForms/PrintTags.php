<?php
/**
 * Created by PhpStorm.
 * User: evstati
 * Date: 8/15/14
 * Time: 3:45 PM
 */

function getFormData(){

	$tagsSting = $_POST['tags'];
	$tagsArray = explode(", ", $tagsSting);
	foreach($tagsArray as $key=>$value){
		echo "$key : $value";
		echo "<br>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Print Tags</title>
	<link rel="stylesheet" type="text/css" href="GetFormData.css">
</head>
<body>
<div class="wrapper">
	<header>
		<h1>This is a simple  form</h1>
	</header>
	<article>

		<form action="PrintTags.php" method="post">
			<fieldset>

				<span>Enter Tags:</span>

		 <input type="text" name="tags">

				<input type="submit" name="submit" value="Submit">

				<p>
				<?php
				if (isset($_POST['submit'])) {
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