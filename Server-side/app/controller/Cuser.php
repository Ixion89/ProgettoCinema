<?php
use \Psr\Http\Message\ServerRequestInterface as request;
use \Psr\Http\Message\ResponseInterface as response;

require_once ROOT_DIR.'\app\foundation\FRegistrazione.php';
require_once ROOT_DIR.'\app\entity\EUtente.php';

$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
        ->withHeader('Content-Type','application/json');
});

$app->post('/api/user/signup',function(request $request, response $response) use ($app) {
    $data = $request->getParsedBody();

    $password=$data['password'];
    $email=$data['email'];
    $freg= new FRegistrazione();
    $putente= new EUtente();
    $putente->costruttore_registrazione($password,$email);
    $freg->store($putente);
     return $response;
});

$app->post('api/user/login', function(request $request, response $response) use ($app){
       $request->getParsedBody()['username'];
       $request->getParseBody()['password'];


});


