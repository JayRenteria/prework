<?php
class baseCalc {
	public$number1 = 42;
	public$number2 = 37;
function calculate () {
	echo "The numbers are ".$this->number1. " and ".$this->number2. ".";
}
}
$object1 = new baseCalc();
$object1 -> calculate();
?>
