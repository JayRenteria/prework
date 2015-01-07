<?php
$numbers = array( 24, 3.14, 56, 4.335, 68, 27.5984);
echo "<pre>";
foreach ($numbers as $val); {
	printf("%20.2f\n", $val);
}
echo "</pre>";
?>