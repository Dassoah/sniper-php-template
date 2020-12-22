<?php
    require "vendor/autoload.php";

    $router = new \AltoRouter();

    $router->map( 'GET', '/', function() {
        require_once("controllers/HomeController.php");
        $page_controller = new HomeController();
        $page_controller->home();
    });

    $match = $router->match();
   
    if( is_array($match) && is_callable( $match['target'] ) ) {
        call_user_func_array( $match['target'], $match['params'] ); 
    } else {
        echo "This page does not exist";
    }