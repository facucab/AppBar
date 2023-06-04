<?php
     namespace App\models;
     use App\libs\Model;
     use PDO;
     use PDOException;
     class Bares extends Model{
        public function __construct(){
            parent::__construct();
        }

        //metodo all() obtiene todos los bares
        public function all():mixed{
            try {
                $query = "SELECT * FROM  `bar`";
                return $this->query($query)->fetchAll(PDO::FETCH_ASSOC);
            }catch (PDOException $th) {
                throw $th;
                return false;
            }
        }

        //metodo selectBar, selecciona el bar por su slug.
        public function selectBar(string $slug):mixed{
            try {
                $query = "SELECT * FROM bar WHERE slug = '$slug'";
                return $this->query($query)->fetchAll(PDO::FETCH_ASSOC);
            }catch (PDOException $th) {
                throw $th;
                return false;
            }     
        }
        //detectar si existe el bar
        public function isBar($slug):bool{
            $query = $this->query("SELECT id_bar FROM bar WHERE slug = '$slug'");
            if($query->rowCount() > 0 ){
                return true;
            }
            return false;
        }
        //metodo selecBarId, selecciona el bar por su id.
        public function selectBarId(int $id):mixed{
            try {
                $query = "SELECT direccion, nombre, imagen , slug FROM bar WHERE id_bar = '$id'";
                return $this->query($query)->fetchAll(PDO::FETCH_ASSOC);
            }catch (PDOException $th) {
                throw $th;
                return false;
            }
        }

        //metodo searchBar, selecciona todos los bares con coincidencia en el nombre o ubicacion.
        public function searchBar(string $data):mixed{
            try {
                $query = "SELECT direccion, nombre, imagen , slug  FROM `bar` WHERE nombre LIKE '%$data%' OR direccion LIKE '%$data%';";
                return $this->query($query)->fetchAll(PDO::FETCH_ASSOC);
            }catch (PDOException $th) {
                throw $th;
                return false;
            }
            
        }

        //metodo isSearchBar, informa si encontro alguna coicidencia de la busqueda.
        public function isSearchBar(string $data):bool{
            try {
                $query = $this->query("SELECT nombre FROM `bar` WHERE nombre LIKE '%$data%' OR direccion LIKE '%$data%';");
                if($query->rowCount() > 0){
                    return true;
                }
                return false;
            }catch(PDOException $th) {
                throw $th;
                return false;
            }
          
        }
     }
?>