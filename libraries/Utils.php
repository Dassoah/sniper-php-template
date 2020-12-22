<?php
    class Utils{

        public static function truncate($string, int $max ) {
            if(strlen($string)>=$max)
            {
                $string=substr($string,0,$max); 
                $space=strrpos($string," "); 
                if($space)
                    $string=substr($string,0,$space);
                $string .= '...';
            }
            return $string;
        }
    
        public static function debug($variable){
            echo '<pre>'. print_r($variable, true) .'</pre>';
        }

        public static function date_fr($date){
            $d=new DateTime($date);
            return $d->format("d-m-Y");
        }

    }