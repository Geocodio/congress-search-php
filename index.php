<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

$input = $_POST["search"] ?? null;

if (empty($_ENV['API_KEY'])) {
    die('Please enter an API Key.');
}

$district = null;
        
if ($input) {
    $geocoder = new Geocodio\Geocodio();
    $geocoder->setApiKey($_ENV['API_KEY']);
    try {
        $output = $geocoder->geocode($input, ['cd']);
        $district = $output->results[0]->fields->congressional_districts[0] ?? null;
    } catch(Exception) {
        $district = null;
    }
}

require 'index.view.php';