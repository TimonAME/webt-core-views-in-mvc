<?php

require_once 'vendor/autoload.php';

use src\Hotel;

//loop to create a custom amount of hotels in the array hotels
$hotels = [];
for ($i = 1; $i <= 30; $i++) {
    $hotels[] = new Hotel('Hotel ' . $i, 'Hotel ' . $i . ' Beschreibung');
}


$template = file_get_contents('templates/index.html');
$templateHotel = file_get_contents('templates/hotel.html');
$templateInsert = '';

foreach ($hotels as $hotel) {
    $templateStorage = str_replace('###HOTEL###', $hotel, $templateHotel);
    $templateInsert .= str_replace('###BESCHREIBUNG###', $hotel->getBeschreibung(), $templateStorage);
}

$template = str_replace('###PLACEHOLDER###', $templateInsert, $template);
echo $template;




/*** Twig ***
 * composer require "twig/twig"
*/

/*
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader('templates');
$twig = new Environment($loader);

// Render the template using Twig
try {
    echo $twig->render('index.twig', ['hotels' => $hotels]);
} catch (\Twig\Error\LoaderError|\Twig\Error\SyntaxError|\Twig\Error\RuntimeError $e) {
}
*/