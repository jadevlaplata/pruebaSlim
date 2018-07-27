<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->get('/cupon/{nro_cupon}', function (Request $request, Response $response, array $args) {
    $nroCupon = $args['nro_cupon'];

	if($nroCupon%2==0){	
    $response->getBody()->write("10");
}else     $response->getBody()->write("0");


    return $response;
});
$app->run();