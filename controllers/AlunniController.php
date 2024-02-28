<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
require_once 'Classi.php';

class AlunniController
{
    function index(Request $request, Response $response, $args) 
    {
        $classi = new Classi();
        $response->getBody()->write(json_encode($classi));  
        return $response->withHeader('Content-Type', 'application/json');
    }

    function show(Request $request, Response $response, $args) 
    {
        $classi = new Classi();
        $name = $args['nome'];
        $response->getBody()->write(json_encode($classi->searchStudent($name)));  
        return $response;
    }
}