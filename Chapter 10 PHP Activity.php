<?php
$full_name = "Jay Renteria";
$full_name = ucwords (strtolower($full_name));
echo $full_name."<br/>";
$email = "emailexample@gmail.com";
if (strstr($email, "@")) {
	echo "You're all set! Thank you for your feedback!";
} else {
	echo "That is not a valid email address. Please review and re-enter in a valid address";
}
?>