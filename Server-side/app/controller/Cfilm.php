<?php
/**
 * Created by PhpStorm.
 * User: Teresa
 * Date: 21/08/2018
 * Time: 15:32
 */
use \Psr\Http\Message\ServerRequestInterface as request;
use \Psr\Http\Message\ResponseInterface as response;
require_once 'C:\xampp\htdocs\cinema\app\foundation\FFilm.php';


$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        });

    $app->get('/api/films/all', function (Request $request, Response $response) {
        $a = new FFilm();
        $films = $a->loadallfilm();
        echo json_encode($films);
    });


$app->post('/provapost',function(request $request) use ($app) {  //al metodo post aggiungere sto use app
    $myname=$request->getParsedBody()['myname'];
    echo 'Test'.$myname."\n".'SALUTA ANDONIO';


});


