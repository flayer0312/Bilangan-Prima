<?php

for ($i=1; $i <=5 ; $i++) { 
	$a=0;
		for ($j=1; $j <= $i ; $j++) { 
			if ($i % $j == 0) {
				$a++;
			}
		}
		if ($a==2) {
			echo $i." ";
		}
}

echo "<br>";

for ($i=7; $i <=15 ; $i++) { 
	$a=0;
		for ($j=1; $j <= $i ; $j++) { 
			if ($i % $j == 0) {
				$a++;
			}
		}
		if ($a==2) {
			echo $i." ";
		}
}

echo "<br>";

for ($i=16; $i <=25 ; $i++) { 
	$a=0;
		for ($j=1; $j <= $i ; $j++) { 
			if ($i % $j == 0) {
				$a++;
			}
		}
		if ($a==2) {
			echo $i." ";
		}
}

echo "<br>";

for ($i=26; $i <=40 ; $i++) { 
	$a=0;
		for ($j=1; $j <= $i ; $j++) { 
			if ($i % $j == 0) {
				$a++;
			}
		}
		if ($a==2) {
			echo $i." ";
		}
}

echo "<br>";

?>