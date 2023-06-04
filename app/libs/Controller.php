<?php #Clase base para controladores
    /*
        en su constructor instnacion a view y creo un metodo que renderiza (ejecuta render view)
    */
     namespace App\libs;

     class Controller {
        public View $view;

         public function __construct()
         {
            $this->view = new View;
         }

         public function render(string $nombre, $data=[] , $info=[]){
            $this->view->render($nombre, $data, $info);
         }
     }
?>