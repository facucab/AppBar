<?php
    namespace App\models;
    use App\libs\Database;
    use App\libs\Model;
    use PDOException;
    use PDO;
    class User extends Model{
        private string $id;
        private string $img;
        public function __construct(
            private string $user,
            private string $password)
        {
            parent::__construct();
        }

        private function HassPass(string $password):mixed{
            return password_hash($password, PASSWORD_DEFAULT, ['const' => 10]);
        }

        public function PassVerify(string $password):mixed{
            return password_verify($password, $this->password);
        }

        public function save($data){
            try {
                if(User::isUser($this->user)){return false;} #si el usuario existe return false
                $hash = $this->HassPass($this->password); #hashear el password
                $query = $this->prepare(("INSERT INTO usuario (`nombre`, `username`, `email`,`password`, `imagen` ) VALUES (:nombre, :username, :email,:pass ,:imagen)"));
                $query->execute([
                    'nombre' => $data['nombre'],
                    'username' => $this->user,
                    'email' => $data['email'],
                    'pass' => $hash,
                    'imagen' => $data['imagen']
                ]);
                return true;
            }catch(PDOException $th) {
                echo $th;
            }
        }
        public function loadId($user){
            try {
                $query = $this->query("SELECT id_user FROM usuario WHERE username = $user");
                $data = $query->fetch(PDO::FETCH_ASSOC);
                return $data['id_user'];
            }catch (PDOException $e) {
                 $e;
            }

            
        }

        public static function  GetUser(string $user){
            try {
                $db = new Database;
                $q = "SELECT * FROM usuario WHERE username = :username";
                $query = $db->conectar()->prepare($q);
                $query->execute(['username' => $user]);
                $data = $query->fetch(PDO::FETCH_ASSOC);
                $user = new User($data['username'], $data['password']);
                $user->SetId($data['id_user']);
                $user->setImg($data['imagen']);
                return $user;
            } catch (PDOException $e) {
                echo $e;
            }
        }

        public static function isUser(string $user):bool{
            try {
                $db = new Database;
                $query = $db->conectar()->prepare("SELECT username FROM usuario WHERE username = :username");
                $query->execute(['username'=> $user]);
                if($query->rowCount() > 0){
                    return true;
                }
                return false;
            } catch (PDOException $e) {
                throw $e;
                return false;
            }
        }

        public function getusuario(){
            return $this->user;
        }
        
        public function SetId($id){
            $this->id  = $id;
        }

        public function getId(){
            return $this->id;
        }

        private function setImg($img){
            $this->img = $img;
        }
        public function getImg(){
            return $this->img;
        }
        public function isFavorito($idBar , $idUser):bool{
            try {
                $db = new Database;
                $query = $db->conectar()->query("SELECT * FROM favoritos WHERE id_bar = '$idBar' AND id_usuario = '$idUser';");
                if($query->rowCount() > 0){
                    return true;
                }
                return false;
            } catch (PDOException $e) {
                throw $e;
                return false;
            }
        }
    }
?>