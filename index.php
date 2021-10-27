<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__.'/vendor/autoload.php';

try {
    $lsp = new LspFactory\Lsp;
    //Based of your requirement you can assign any logistics service provider (Dunzo, Uber, Rapido etc)
    $provider = $lsp->setProvider('Dunzo');

    echo "<pre>";
    print_r($provider);
    echo "<br>";

    //Create booking
    $provider->createBooking();
} catch (Exception $e) {
    echo $e->getMessage();
}


