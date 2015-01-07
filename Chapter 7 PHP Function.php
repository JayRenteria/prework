<?php
function cellpop()
{
	$scho = "Schofield";
	$burr = "Burrows";
	$suc = "Sucre";
	$mah = "Mahone";
	echo "<table border=\"1 \">\n";
	echo "<tr><td colspan=\"4 \">";
	echo "Prisoners by Cell";
	echo "</td></tr>";
	echo "<tr><td>$scho</td><td>$burr</td><td>$suc</td><td>$mah</td></tr>\n";
	echo "</table>";
}
cellpop();
?>
