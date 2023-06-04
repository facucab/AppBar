<?php #clase base de modelo, instancio la base de datos y creo metodos de query y prepare para ahorrame tiempo.
    namespace App\libs;

    class Model {
        private Database $db;

        public function __construct(){
            $this->db = new Database;
        }

        //query
        public function query($query){
            return $this->db->conectar()->query($query);
        }
        //prepare
        public function prepare($query){
            return $this->db->conectar()->prepare($query);
        }

    }
?>