<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function() use($app) {

$arreglo = ["alumno: "=>["luis Manuel Hernandez Luna" => "413129145"]];

    return $app->json($arreglo);
    
});

$app->run();
