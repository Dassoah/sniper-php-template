<?php
    class HomeController extends Controller{

        public function __construct(){
            parent::constructMe();
        }

        public function home(){
            Session::no_user_access();
            $data = [
                'pageTitle' => NOM
            ];
            Renderer::render('home/index', $data);
        }
    }