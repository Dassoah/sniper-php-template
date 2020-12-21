<?php
    class Session{

        protected $session_id;

        public function __construct(){
            if(!isset($_SESSION['utilisateur']) ){
                $this->start();
            }
        }

        public function get_session_id(){
            return $this->id;
        }

        public function ParameterExist($session_name){
            if(isset($_SESSION[$session_name]) ){
                return true;
            }
            else{
                return false;
            }
        }

        public static function start(){
            if(session_status() == PHP_SESSION_NONE){
                session_start();
            }
        }

        public static function destroy(){
            $_SESSION = array();
            session_destroy();
            unset($_SESSION);
        }

        public static function user_access(){
            if(empty($_SESSION['utilisateur'])){
                $_SESSION['notifications']['danger'] = "Vous n'avez pas le droit d'accéder à cette page !!!";
                Http::redirect('signin');
            }
        }

    
        public static function no_user_access(){
            if(isset($_SESSION['utilisateur'])){
                $_SESSION['notifications']['danger'] = "Vous n'avez pas le droit d'accéder à cette page !!!";
                Http::redirect('home');
            }
        }
    }