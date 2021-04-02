<?php


for ($i=1; $i <= 100; $i++) { 

	$fizz = $i % 3 === 0;
	$buzz = $i % 5 === 0;

	if ($fizz && $buzz) {
		echo 'FizzBuzz' . '<br>';
		continue;
	}

	if ($fizz) {
		echo 'Fizz' . '<br>';
		continue;
	}

	if ($buzz) {
		echo 'Buzz' . '<br>';
		continue;
	}

	echo $i . '<br>';
}