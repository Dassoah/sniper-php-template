<?php
    use Buki\Router\Router;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    
    $router = new Router;
    
    $router->get('/', function(Request $request, Response $response) {
        require "controllers/HomeController.php";
        $page_controller = new HomeController();
        $page_controller->home();
    });

    $router->get('/home', function(Request $request, Response $response) {
        require "controllers/HomeController.php";
        $page_controller = new HomeController();
        $page_controller->home();
    });
    
    $router->run();
