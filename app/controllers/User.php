<?php
    namespace App\controllers;
    use App\libs\Controller;
    use App\models\Profile;
    use App\models\User as ModelsUser;

    class User extends Controller{ 
        private $profile ;
        public function __construct()
        {
            parent::__construct();
        }

        public function register(){
         
            $username  = trim($_POST['username']); #recibo usuario
            $password  = trim($_POST['password']); #recibo el pass
            $data = [
                'email'=> trim($_POST['email']), 
                'nombre' => trim($_POST['nombre']),
                'imagen' => "app/imagenes/".$username.".png" ,
                    ];
            if($_FILES['imagen']['tmp_name'] == null){
                $data['imagen'] = "app/imagenes/generica.png";
            }            
            $user= new  ModelsUser($username, $password);
            if(!$user->save($data)){
                $this->render("registro/index", ['error'=> "Nombre de usuario ya existe!"]);
                return false;
            }
            $this->loadImg($username);
            $id = $user->loadId($username); 
            $datos =  [
                'date' => $_POST['dateBirth'],
            ];
            $profile = new Profile($username);
            $profile->save($datos, $id);
            header('location: home');
            return true;
        }

        private function loadImg($username){
            $pathUpdate = "app/imagenes/".$username.".png" ;
            $pathImg = $_FILES['imagen']['tmp_name'];
            $flag = move_uploaded_file($pathImg, $pathUpdate);
            if($flag){
                return true;
            }
            return false;
        }

        public function login(){
            $username= $_POST['username'];
            $password= $_POST['password'];
            if(!$this->validarDatos($username, $password))
            {
                $this->render("login/index", ['error'=> "Complete todos los campos!"]);
                return false;
            }
            if(!ModelsUser::isUser($username)){
                $this->render("login/index", ['error'=> "Usuario o Password incorrecto"]);
                return false;  
            }

            $user = ModelsUser::GetUser($username); #validar si existe un usuario
            if(!$user->PassVerify($password)){
                $this->render("login/index", ['error'=> "Usuario o Password incorrecto"]);
                return false;
            }
            $_SESSION['user'] = serialize($user);
            header("location:home");
            return true;
        }   

        public static function closeSesion(){
            unset($_SESSION['user']);
            session_destroy();
            header("location:home");
        }

        private function validarDatos(string $user, string $pass){
            $username = trim($user);
            $password = trim($pass);
            if(empty($username) || empty($password)){
                return false;
            }
            return true;
        }     
     
}
?>