<?php
    namespace App\libs;

    class View{
        public $d;
        public $informacion ;
        /*
            creo un metodo render que recibe dos parametros, nombre de la vista y data

        */
        public function render(string $nombre, $data =[], $info=[]){
            $this->d = $data;
            $this->informacion = $info;
            require_once 'app/Views/' . $nombre . '.php';
        }
    }
?>