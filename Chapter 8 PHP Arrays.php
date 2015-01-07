<?php
$movies = array (
	array(
		"Science Fiction" => "Star Wars, Alien, Terminator 3"
	),
	array (
		"Cult Movies" => "Big Lebowski, Pulp Fiction, Clerks"
	),
	array (
		"Action" => "Crank, Ip Man, Karate Kid"
	),
	array (
		"Adventure" => "The Hobbit, Guardians of the Galaxy, Indiana Jones"
	)
);
foreach ($movies as $m) {
	while(list ($k, $v) = each($m)) {
		echo "$k : $v <br/>";
	}
	echo "<hr/>";
}
?>
