<?php
    require "libraries/Database.php";
    require "libraries/Utils.php";
    require "libraries/Http.php";
    require "libraries/Renderer.php";
    require "libraries/Session.php";
    Session::start();
    require "controllers/Controller.php";

    require "routes.php";