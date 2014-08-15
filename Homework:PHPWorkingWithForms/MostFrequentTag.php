<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 8/15/14
 * Time: 4:06 PM
 */
function getFormData(){


	$tagsSting = $_POST['tags'];

	$tagsArray = explode(", ", $tagsSting);
	$tagsArrayCounter= array();

	if($tagsSting == ""){
		echo"Dump";
		return;
	}
	foreach($tagsArray as $tag){
		if (!array_key_exists($tag, $tagsArrayCounter )){
			$tagsArrayCounter[$tag] = 1;
		} else {
			$tagsArrayCounter[$tag] += 1;
		}
	}


	arsort($tagsArrayCounter);
	foreach($tagsArrayCounter as $key=>$value){
		echo "$key : $value";
		echo "<br>";
		}
	echo "Most Frequent Tag is : ".  array_keys($tagsArrayCounter)[0];
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

		<form action="MostFrequentTag.php" method="post">
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