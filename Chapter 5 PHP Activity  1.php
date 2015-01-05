<?php
$hi = "hello";
$number1 = 42;
$renteria = true;
$double = 3.14;
$ray = array('hearthstone', 'magic', 'poker');
echo "is an integer? " .is_int($number1);
echo "<br/>";
echo "is a string? " .is_string($hi);
echo "<br/>";
echo "is a double? " .is_double($double);
echo "<br/>";
echo "is boolean? " .is_bool($renteria);
echo "<br/>";
echo "is an array? " .is_array($ray);
echo "<br/>";
echo "is numeric? " .is_numeric($ray);
echo "<br/>";
echo "is a resource? " .is_resource($ray);
echo "<br/>"
?>