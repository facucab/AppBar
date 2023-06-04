<?php
    namespace App\models;
    use App\libs\Database;
    use App\libs\Model;
    use PDOException;
    use PDO;
    class Profile extends Model{
        public function __construct(private string $user){
            parent::__construct();
        }
        public function save($dato =[], $id){
            try {
                $query = $this->prepare(("INSERT INTO perfil (`date_birth`,`user_id`) VALUES (:dateBirth, :user_id)"));
                $query->execute([
                    'dateBirth'=> $dato['date'],
                    'user_id' => $id
                ]);
            } catch (PDOException $e) {
                echo $e;
            }
        }
    }
?>