<?php
    namespace App\controllers;
    use App\libs\Controller;
    class Error404 extends Controller{
        public function __construct(){
            parent::__construct();
            $this->render('404/index');
        }

        
    }
?>