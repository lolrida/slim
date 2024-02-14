<?php
require 'Classi.php';
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});




$app->get('/alunni', function (Request $request, Response $response, $args) {
    $classi = new Classi();
    $response->getBody()->write($classi->stampa());  
    return $response;
});

$app->get('/alunni/{nome}', function (Request $request, Response $response, $args) {
    $classi = new Classi();
    $name = $args['nome'];
    $response->getBody()->write("" . $classi->searchStudent($name));  
    return $response;
});



$app->run();
