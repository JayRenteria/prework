<?php
	$times_ran = (isset($_POST['times_ran'])) ? $times_ran + 1 : 1;
	if(isset($_POST['submit'])) {

		$value1 = $_POST['value1'];
		$value2 = $_POST['value2'];
		$action = $_POST['action'];

		if($action == "+") {
			echo "<b>Your Answer is:</b><br/>";
			echo $value1 + $value2;
		}
		if($action == "-") {
			echo"<b>Your Answer is</b><br/>";
			echo $value1 - $value2;
		}
		if($action == "*") {
			echo "<b>Your Answer is</b><br/>";
			echo $value1 * $value2;
		}
		if($action == "/") {
			echo "<b>Your Answer is</b><br/>";
			echo $value1 / $value2;
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>CALCULATOR</title>
	</head>
	<body>
		<p><strong>Operations Completed:</strong><?php echo $times_ran; ?></p>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="value1">
			<input type="text" name="value2">
			<select name="action">
				<option>+</option>
				<option>-</option>
				<option>*</option>
				<option>/</option>
			</select>
			<input type="hidden" name="times_ran" value="<?php echo $times_ran; ?>" />
			<input type="submit" name="submit" value="Calculate!">
		</form>
</body>
</html>