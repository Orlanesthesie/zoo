<?php

include "../config/connexion.php";
include "../config/autoload.php";

$animalManager = new AnimalManager($connexion);

$allAnimals = $animalManager->getAll();

foreach ($allAnimals as $line) {
    $animalManager->hungryRand($line);
}

header('Location:' . $_SERVER['HTTP_REFERER']);