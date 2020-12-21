<?php
    class Database{
        private static $instance;
        
        public static function getPDO():PDO
        {
            if(self::$instance === null){
                self::$instance = new PDO('mysql:host=localhost;dbname=sniper;charset=utf8', 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]);
        }

            return self::$instance;
    }
}
        