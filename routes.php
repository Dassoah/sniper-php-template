<?php
    // use Buki\Router\Router;
    // use Symfony\Component\HttpFoundation\Request;
    // use Symfony\Component\HttpFoundation\Response;
    
    // $router = new Router;
    
    // $router->get('/', function(Request $request, Response $response) {
    //     require "controllers/HomeController.php";
    //     $page_controller = new HomeController();
    //     $page_controller->home();
    // });

    // $router->get('/home', function(Request $request, Response $response) {
    //     require "controllers/HomeController.php";
    //     $page_controller = new HomeController();
    //     $page_controller->home();
    // });
    
    // $router->run();
    require "vendor/autoload.php";


    $router = new \AltoRouter();

    // // Sign
    $router->map('GET', 'sniper-php-template/home', function() {
        require_once("controllers/AuthController.php");
        $page_controller = new HomeController();
        $page_controller->home();
    });

    // $match = $router->match();

   
    // if($match !== null){
    //     $match['target']();
    // }