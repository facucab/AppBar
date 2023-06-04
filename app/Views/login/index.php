<?php
    if(isset($_SESSION['user'])){
        header('location:home');
    }
    $mensaje = ['error'=> "  "];
    if(!empty($this->d)){
        $mensaje = $this->d;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppBar</title>
    <link rel="stylesheet" href="app/Views/login/index.css">
</head>
<body>
<header class="header">
        <figure class="imgLogo">
            <img src="app/Views/img/Logo.png" alt="">
        </figure>
    </header>
    <main class="main">
        <h1 class="titulo">Iniciar sesion</h1>
        <div class="formulario">
            <form action="" method="post" class="formLogin" id="FormLogin">
                <input id="usuario"  type="text" name="username" class="formLogin__input" placeholder="Usuario">
                <input id="password"  type="password" name="password"  class="formLogin__input" placeholder="Password">
                <input type="submit" value="Iniciar sesion" class="formLogin__btn">
                <div class="formError">
                    <?=$mensaje['error']?>
                </div>
            </form>
            
            <a href="registro" class="BtnRegistrar">Crear cuenta nueva</a>
        </div>
     
    </main>
    <script src="app/Views/login/index.js"></script>
</body>
</html>