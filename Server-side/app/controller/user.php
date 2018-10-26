<?php
/**
 * Created by PhpStorm.
 * User: Teresa
 * Date: 21/08/2018
 * Time: 17:30
 */
use \Psr\Http\Message\ServerRequestInterface as request;
use \Psr\Http\Message\ResponseInterface as response;

require 'C:\xampp\htdocs\cinema\app\foundation\FRegistrazione.php';
//require 'C:\xampp\htdocs\cinema\app\config\Fdb.php';
require  'C:\xampp\htdocs\cinema\app\entity\EUtente.php';


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
    $putente= new EUtente($password,$email);
    $putente->costruttore_registrazione($password,$email);
    $freg->store($putente);
     return $response;
});

$app->post('api/user/login', function(request $request, response $response) use ($app){
       $request->getParsedBody()['username'];
       $request->getParseBody()['password'];


});


