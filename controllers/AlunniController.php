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
    function createAlunno(Request $request, Response $response, $args)
    {
        $body = $request->getBody()->getContents();
        $parseBody = json_decode($body, true); 

        $nome = $parseBody['nome'];
        $cognome = $parseBody['cognome'];
        $dataNascita = $parseBody['dataNascita'];

        $alunno = new Alunni($nome, $cognome, $dataNascita);
        
        $response->getBody()->write(json_encode($alunno));  
        return $response->withHeader('Content-Type', 'application/json')->withStatus(201);
    }

    function updateAlunno(Request $request, Response $response, $args)
    {
        $body = $request->getBody()->getContents();
        $parseBody = json_decode($body, true);
        $nome = $parseBody['nome']; 
        $cognome = $parseBody['cognome'];
        $dataNascita = $parseBody['dataNascita'];
        $classe = new Classi();
        $student = $classe->searchStudent($args['nome']) == null;
        

        if($student != null){
            $classe->setNome($parseBody['nome']);
            $classe->setCognome($parseBody['cognome']);
            $classe->setDataNascita($parseBody['dataNascita']);
        } else {
            $response->getBody()->write("Alunno non trovato");  
            return $response->withHeader('Content-Type', 'application/json')->withStatus(404);
        }


        $response->getBody()->write(json_encode($student));  
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    }

    function deleteAlunno(Request $request, Response $response, $args)
    {
        
    }

    

    
}