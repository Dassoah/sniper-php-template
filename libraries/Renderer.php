<?php
    class Renderer{

        // Fonction pour renvoyer la vue d'une page
        public static function render(string $path, array $variable = [])
        {
            extract($variable);
            ob_start(); 
            require_once("views/$path.html.php");
            $pageContent = ob_get_clean();
            require_once("views/layout.html.php");
        }

    }