<?php
    namespace App\controllers;
    use App\libs\Controller;
    use App\models\Bares as ModelsBares;

    class Bares extends Controller{
        private $modelo;
        public function __construct(){
            parent::__construct();
            $this->modelo  = new ModelsBares; //instacio el modelo
        }

        public function all():bool{ 
            $bares = $this->modelo->all();
            $bar = json_encode($bares);
            $this->render("home/index", $bares);
            return true;
        }
        
        public function selectBar(string $id):object{
            if($this->modelo->isBar($id)){
                $bares = $this->modelo->selectBar($id);
                $this->render("bar/index", $bares);
                return $this;
            }
            $this->render('404/index');
            return $this;
        }

        public function searchBar():bool{
            //en el servidor el elemento 3 hay que cambiarlo por 2, esto funciona en localhost
            $url = explode('/', $_SERVER['REQUEST_URI']);  // recibo la url
            $key = explode('%20', $url[3]); // la separo en distintos arrays
            $keyWord = implode(" ", $key); // junto todo en un string
            if($this->modelo->isSearchBar($keyWord) ) {
                $data = $this->modelo->searchBar($keyWord);
                $this->render('search/index', $data, ['value'=> $keyWord]);
                return true;
            }
            else{
                $this->render('search/index', ['empty' =>  true], ['value'=> $keyWord]);
                return false;
            }
        }
    }
?>