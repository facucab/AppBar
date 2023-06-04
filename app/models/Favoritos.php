<?php 
    namespace App\models;

use App\libs\Database;
use App\libs\Model;
    use PDO;
    use PDOException;
    class Favoritos extends Model{
        public function __construct(){
            parent::__construct();
        }
        
        public function AddFavorito($id, string $idUser):bool{
            if(!$this->isBar($id)){return false;}
            try {
                $query = $this->prepare("INSERT INTO favoritos (`id_bar`, `id_usuario`, `fecha`) VALUES (:id_bar, :id_usuario, :fecha) ");
                $query->execute([
                    'id_bar' => $id,
                    'id_usuario' => $idUser,
                    'fecha' => null,
                ]);
                return true;
            }catch (PDOException $th) {
                throw $th;
                return false;
            }
        }

        public function RemoveFavorito($id, string $idUser):bool{
            if(!$this->isBar($id)){return false;} //compruebo que exista el bar
            try {
                $query  = $this->query("DELETE  FROM favoritos WHERE id_bar= $id AND id_usuario = $idUser");
                return true;
            }catch (PDOException $th) {
                throw $th;
                return false;
            }
        }
        private function isBar($id):bool{
            $query = $this->query("SELECT id_bar FROM bar WHERE id_bar = $id");
            if($query->rowCount() > 0 ){
                return true;
            }
            return false;
        }
        public static function isFavorito($idBar, $idUser):bool{
            try {
                $db  = new Database;
                $query= $db->conectar()->query("SELECT * FROM favorito WHERE id_bar = $idBar AND id_usuario = $idUser");
                if($query->rowCount() > 0){
                    return true;
                }
                return false;
            } catch (PDOException $th) {
                throw $th;
                return false;
            }
        }

        public function FavoritoUser(int $id):bool{
            $query = $this->query("SELECT * FROM favoritos WHERE id_usuario = $id");
            if($query->rowCount() > 0){
                return true;
            }
            return false;
        }

        public function listarIdBares(string $id):mixed{
            $query = $this->query("SELECT id_bar FROM favoritos WHERE id_usuario = $id ")->fetchAll(PDO::FETCH_ASSOC);
            $idBares = [];
            foreach ($query as $key) {
                array_push($idBares,$key['id_bar']);
            } 
            return $idBares;
        }
      
    }
?>