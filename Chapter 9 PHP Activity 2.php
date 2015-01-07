<?php
class baseCalc {
	public$number1 = 42;
	public$number2 = 37;
	function calculate () {
		echo "The numbers are ".$this->number1. " and ".$this->number2. ".";
	}
}
class addCalc extends baseCalc {
	function calculate () {
		echo "The sum of 42 and 37 is ".($this->number1+$this->number2) .".";
	} // This code can be replaced with the subCalc, mulCalc, divCalc and the echo line with the respective operator for the desired operation
}
$object1 = new addCalc(); // this can be replaced with the name of the child class respectively based on which operation you are performing.
$object1 -> calculate();
?>