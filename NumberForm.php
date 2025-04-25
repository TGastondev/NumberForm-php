<!-- Chapter 4 Exercise pages 210-211 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Number Form</title>
</head>
<body>
	<h2>Number Form</h2>
	<h3>Type in a number, and we will square it for you!</h3>
	<?php 
		$displayForm = TRUE;
		$number = "";

		# Check to see if the form has been submitted yet 
		if(isset($_POST["Submit"])) {
			# We now know the form was submitted
			$number = $_POST["data"];
			# Let's see if what they entered is numeric or not 
			if(is_numeric($number)) {
				$displayForm = FALSE;
			} else {
				echo "<p style='color: red;'>You need to enter a numeric value!</p>";
				$displayForm = TRUE;
			} // end of nested IF/ELSE
		}

		# Determine if the form needs to be displayed or not 
		if($displayForm == TRUE ) {
			# If that variable is TRUE, build the HTML form in the document 
			?>
			<form name="numberForm" action="NumberForm.php" method="post">
				<label>Enter a number:</label>
				<input type="text" name="data" value="<?php echo $number;?>">
				<br/>
				<input type="submit" name="Submit" value="Calculate">
			</form>
			<?php 
		} else {
			echo "<p>Thank you for entering a number!</p>";
			echo "<p>Your number: $number squared is: ", ($number * $number), ".</p>";
			echo "<p><a href='NumberForm.php'>Try Again?</a></p>";
		}
	 ?>
</body>
</html>