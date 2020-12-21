<?php
    Class Http{

        // Fonction pour effectuer une redirection 
        public static function redirect(string $url):void
        {
            header("location:$url");
            die();
        }
    
    }