<?php

	$animals_world = [
		"South America" => ["Panthera Onca", "Tamandia Tetradactyla", "Tremarctos Ornatus", "Saguinus Imperator", "Phoenicoparrus Andinus"],
		"North America" => ["Epuus Caballus", "Canis Lupus Tundrorum", "Ursus Arctos Horribilis", "Vulpes Vulpes", "Glaucomys Volans"],
		"Australia" => ["Macropus Rufus", "Phascolarctos Cinereus", "Chaeropus", "Falco Peregrinus", "Apis Mellifera"]
	];

	foreach ($animals_world as $continents => $animals) {
		foreach ($animals as $key => $animal) {
			if (str_word_count($animal) == 2) {
				$animal_puzzle = explode(" ", $animal);
				$first_generator_random_animal[] = $animal_puzzle[0];
				$second_generator_random_animal[] = $animal_puzzle[1];
			} else {
				unset($animal);
			}
		}
	}

	$b = count($first_generator_random_animal);

	for ($i=0; $i < $b; $i++) { 
		shuffle($first_generator_random_animal);
		shuffle($second_generator_random_animal);
		if (count($first_generator_random_animal) > 1) {
			echo $first_generator_random_animal[0] . " " . $second_generator_random_animal[0] . ", ";
		} else {
			echo $first_generator_random_animal[0] . " " . $second_generator_random_animal[0] . ".";
		}
		unset($first_generator_random_animal[0]);
		unset($second_generator_random_animal[0]);
	}

?>