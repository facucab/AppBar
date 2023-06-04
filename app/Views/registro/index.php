
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="app/Views/registro/index.css">

</head>
<body>
    <header class="header">
        <figure class="imgLogo">
            <img src="app/Views/img/Logo.png" alt="">
        </figure>
    </header>
    <main>
        <h1 class="titulo">Registrarse</h1>
        <div class="formulario">
            <form id="formRegistro" action="registro" method="post" class="formLogin" enctype="multipart/form-data">
                <input  type="text" name="username" id="usuario" class="formLogin__input" placeholder="Usuario">
                <input  type="password" name="password" id="password" class="formLogin__input" placeholder="Password">
                <input  type="text" name="nombre" id="nombre" class="formLogin__input" placeholder="Nombre completo">
                <input  type="date" name="dateBirth" id="dateBirth" class="formLogin__input">
                <input  type="text" name="email" id="email" class="formLogin__input" placeholder="Email">
                
                <div class="container-input">
                    <input type="file" name="imagen" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} archivos seleccionados" multiple />
                    <label for="file-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                    <span class="iborrainputfile">Seleccionar archivo</span>
                    </label>
                    </div>
                    
                <input type="submit" value="Registrarme" class="formLogin__btn">
                <div class="formError"> <?=$mensaje['error']?></div>
            </form>
            <a href="" class="BtnRegistrar">Crear cuenta nueva</a>

        </div>
    </main> 
    <script src="app/Views/registro/index.js"></script>
</body>
</html>