<?php
    class Model{

        public $pdo;

        public function __construct()
        {
            $this->constructMe();
        }

        public function ConstructMe(){
            $this->pdo = Database::getPDO();
        }

        public function findAll($table,$option = null):array
        {
            $rp = $this->pdo->prepare("SELECT * FROM $table $option");
            $rp->execute();
            $resultats = $rp->fetchAll();
            return $resultats;
        }

        public function findById($table,$id)
        {
            $res = $this->pdo->prepare("SELECT * FROM $table WHERE id = '$id'");
            $res->execute();
            $resultat = $res->fetchAll();
            return $resultat[0];
        }
        
    }