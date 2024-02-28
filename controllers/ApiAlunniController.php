<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
require_once 'Classi.php';

class ApiAlunniController
{
    public function index(Request $request, Response $response, $args)
    {
        $classi = new Classi();
        $response->getBody()->write(json_encode($classi));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    }

    public function show(Request $request, Response $response, $args)
    {
        $classi = new Classi();
        if($classi-> searchStudent($args['nome']) == ''){
            $response->getBody()->write("Studente non trovato")->withStatus(404);
        }else{
            $response->getBody()->write(json_encode($classi->searchStudent($args['nome'])));
        }
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    }

    
}
