<?php
    // Config
    require_once("libraries/config.php");
    require_once("libraries/Validation.php");
    
    // Models
    require_once("models/Model.php");

    class Controller{

        protected $model;
        protected $session_id;
        protected $session;

        public function __construct(){
            $this->constructMe();
        }

        public function constructMe()
        {
            if(isset($_SESSION['user']))
            {
                $this->session_id = $_SESSION['user']->id;
            }
            else
            {
                $this->session_id = 0;
            }
            $this->model = new Model();
            $this->val = new Validation();
            $this->session = new Session();
        }

    }