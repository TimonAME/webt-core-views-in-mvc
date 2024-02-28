<?php

require_once 'vendor/autoload.php';

use src\Hotel;

//composer require fakerphp/faker
// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
// generate data by calling methods
//echo $faker->name();
//echo $faker->text();

//loop to create a custom amount of hotels in the array hotels
$hotels = [];
$j = 1;
for ($i = 1; $i <= 30; $i++) {
    $j++;
    if ($j == 6) {
        $j = 1;
    }
    //$hotels[] = new Hotel('Hotel ' . $faker->name(), $faker->text(), $faker->imageUrl(640, 480, 'hotel'));
    //not with faker but with link to resources/hotel1.jpg to hotel5.jpg
    $hotels[] = new Hotel('Hotel ' . $faker->name(), $faker->text(), 'resources/hotel' . $j . '.jpg');
}

/*
$template = file_get_contents('templates/index.html');
$templateHotel = file_get_contents('templates/hotel.html');
$templateInsert = '';

foreach ($hotels as $hotel) {
    $templateStorage = str_replace('###HOTEL###', $hotel, $templateHotel);
    $templateStorage = str_replace('###BILD###', $hotel->bild, $templateStorage);
    $templateInsert .= str_replace('###BESCHREIBUNG###', $hotel->getBeschreibung(), $templateStorage);
}

$template = str_replace('###PLACEHOLDER###', $templateInsert, $template);
echo $template;
*/




/*** Twig ***
 * composer require "twig/twig"
*/


use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader('templates');
$twig = new Environment($loader);

// Render the template using Twig
try {
    echo $twig->render('hotel_list.twig', ['hotels' => $hotels]);
} catch (\Twig\Error\LoaderError|\Twig\Error\SyntaxError|\Twig\Error\RuntimeError $e) {
}