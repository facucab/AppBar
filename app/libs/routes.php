<?php
    use App\controllers\Bares;
use App\controllers\Error404;
use App\controllers\Favoritos;
    use App\controllers\User;

    session_start();

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../config/');
    $dotenv->load();
        $router = new \Bramus\Router\Router();

        $router->get("/", function(){
            header("location:home"); #redirecciona al home
        });
        //ruta del home GET
        $router->get('/home', function(){
            $home = new Bares;
            $home->all();
        });

        //ruta del registro 
        $router->get('/registro', function(){
            $user = new User;
            $user->render('registro/index');
        });

        $router->post('/registro', function(){
            $user = new User;
            $user->register();
        });
        
        //Rutas del Login
        $router->get('/login', function(){
            $user = new User;
            $user->render('login/index');
        });
        $router->post('/login', function(){
            $user = new User;
            $user->login($_POST);
        });

        //Cerrar sesion
        $router->get('CloseSesion', function(){
            User::closeSesion();
        });
        $router->post('CloseSesion', function(){
            User::closeSesion();
        });
        //bares
        $router->post('bar/favorito-agregar', function(){
            $datos= file_get_contents('php://input');
            $datos = json_decode($datos);
            $favorito  = new Favoritos;
            $favorito->AddFavorito($datos->id, $datos->idUser);
        });
        $router->post('bar/favorito-remover', function(){
            $datos= file_get_contents('php://input');
            $datos = json_decode($datos);
            $favorito  = new Favoritos;
            $favorito->RemoveFavorito($datos->id, $datos->idUser);
        });
        $router->get('/bar/{slug}/', function($slug){
            $bar = new Bares;
            $bar->selectBar($slug);
        });
        //
        $router->get('favoritos', function(){   
            $favoritos = new Favoritos;
            $favoritos->misFavoritos();
        });
        $router->get('search/{slug}/',function($slug){
            $search = new Bares;
            $search->searchBar();
        });
        //404
        $router->set404(function() {
            $error = new Error404();
        });
        
        $router->run();
?>