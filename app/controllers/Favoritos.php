<?php
    namespace App\controllers;
    use App\libs\Controller;
    use App\models\Bares as ModelsBares;
    use App\models\Favoritos as ModelsFavoritos;

    class Favoritos extends Controller{
        private $modelo;
        public function __construct()
        {
            parent::__construct();
            //Instaciar el modelo 
            $this->modelo = new ModelsFavoritos;
        }
        public function AddFavorito($id, $idUser):bool{
            $id = trim($id);
            $idUser = trim($idUser);
            if(!empty($id) && !empty($idUser)){
                $this->modelo->AddFavorito($id, $idUser);
                echo json_encode($msg  = ['error'=> false]);

                 return true;
            }
            echo json_encode($msg  = ['error'=> true, 'mensage'=> 'Error al enviar datos']);
            return false;
        }

        public function RemoveFavorito($id, $idUser):bool{
            $id = trim($id);
            $idUser = trim($idUser);
            if(!empty($id) && !empty($idUser)){
                $this->modelo->RemoveFavorito($id, $idUser);
                echo json_encode($msg  = ['error'=> false]);
                 return true;
            }
            echo json_encode($msg  = ['error'=> true, 'mensage'=> 'Error al enviar datos']);
            return false;
        }

        public function misFavoritos():bool{
            
            if(!isset($_SESSION['user'])){
                header('location:login');
                return false;
            }
            $user = unserialize($_SESSION['user']);
            $userId =  $user->getId();
            if(!$this->modelo->FavoritoUser($userId)){
                $data = ['favorito'=> false];
                $this->render('favoritos/index',$data);
                return false;
            }
            $idBares = $this->modelo->listarIdBares($userId);
            $bares = new ModelsBares;
            $ArrayBares = [];
            for($i = 0; $i< count($idBares); $i++){
                array_push($ArrayBares,$bares->selectBarId($idBares[$i]));
            }
            $this->render('favoritos/index', $ArrayBares);
            return true;
        }
    }
?>