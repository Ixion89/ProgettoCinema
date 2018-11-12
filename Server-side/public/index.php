<?php
/**
 * Created by PhpStorm.
 * User: Teresa
 * Date: 21/08/2018
 * Time: 15:21
 */

use \Psr\Http\Message\ServerRequestInterface as request;
use \Psr\Http\Message\ResponseInterface as response;

//define ('ROOT_DIR', 'C:\xampp\htdocs\_progetto\Server-side');
require_once '..\app\config\config.inc.php';
require_once ROOT_DIR.'\vendor\autoload.php';

use \Slim\App;
$app= new \Slim\App();
$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
});

$app->add(new \Slim\Middleware\Session([
    'name' => 'dummy_session',
    'autorefresh' => true,
    'lifetime' => '1 hour'
]));
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

require_once ROOT_DIR.'\app\controller\Cfilm.php';
require_once ROOT_DIR.'\app\controller\Cuser.php';

$app->run();
