<?php
    $router = new \AltoRouter();

    $router->map('GET', '/sniper-php-template/home', function() {
        require "controllers/HomeController.php";
        $page_controller = new HomeController();
        $page_controller->home();
    });


    $match = $router->match();

    if($match !== null){
        $match['target']();
    }
    
