<?php #Base de datos.
    namespace  App\libs;
    use PDO;
    use PDOException;
    class Database {
        private string $host;
        private string $db;
        private string $user;
        private string $password;
        private string $charset;

        public function __construct() #Inicializo todas las variables.
        {   
            $this->host = $_ENV['HOST'];
            $this->db = $_ENV['DB'];
            $this->user = $_ENV['USER'];
            $this->password = $_ENV['PASSWORD'];
            $this->charset = $_ENV['CHARSET'];
        }
        /*funcion conectar hace la conexion atraves de pdo, retorna un objeto*/

        public function conectar(){
            try {
                $conexion = "mysql:host=". $this->host .";dbname=". $this->db . ";charset=" .$this->charset;
                $options = [
                    PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES =>false
                ];
                $pdo = new PDO(
                    $conexion,
                    $this->user,
                    $this->password,
                    $options
                );
                return $pdo;
            } catch (PDOException $e) {
                throw $e;
            }
        }

        /*Falta la funcion opara cerrar la conexion a  la base ded atos */
    }
?>