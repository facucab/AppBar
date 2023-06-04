<?php
    if(isset($_SESSION['user'])){
        $user = unserialize($_SESSION['user']);
    }
    else{
        $user = false;
    }
    $data = $this->d;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppBar</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="../app/Views/layouts/nav/nav.css">
    <link rel="stylesheet" href="../app/Views/search/index.css">

</head>
<body>
    <!--NAV -->
    <nav class="nav">
        <!--Botono Nav-->
        <span id="btnNav" class="btnNav">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
            </svg>
        </span>
        <!--Logo-->
        <figure class="LogoNav">
            <img class="LogoNav__img" src="../app/Views/img/Logo.png" alt="">
        </figure>
        <!--User-->
        <div id="UserOptions"  class="user">
            <figure class="user__img">
            <?php echo $user != false ? "<img src='../{$user->getImg()}' " :false;?>
            </figure>
        </div>
    </nav>
    <!--Menu-->
    <div class="menu">
        <!--Cerrar menu-->
        <div class="menu__close">
            <svg id="BtnClose" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/>
            </svg>
        </div>
        <!--Lista-->
        <ul class="listMenu">
            <li class="listMenu__li"><a href="../../AppBar/home">Inicio</a></li>
            <li class="listMenu__li"><a href="../../AppBar/home">¿Quiene somos?</a></li>
            <li class="listMenu__li"><a href="../../AppBar/home">Contacto</a></li>
            <li class="listMenu__li"><a href="../../AppBar/home">Bares</a></li>
            <li class="listMenu__li"><a href="../../AppBar/favoritos">Mis favoritos</a></li>
        </ul>
        <div class="menu__iniciar">
            <?php echo $user != false ? "<a href='../CloseSesion'>Cerrar sesion</a>" : "<a href='../login'>Iniciar sesion</a>";?>
        </div>
    </div>
    <!--User-->
    <?php
        if($user != false){
            echo
                "
                <div class='profile'>
                <div class='profile__user'>
                    <figure class='user__imagen'>
                        <img src='../{$user->getImg()}' alt=''>
                    </figure>
                    <div class='user__name'>
                        {$user->getusuario()}
                    </div>
                </div>
                <div class='profileClose'>
                    <a href='../CloseSesion' class='profileClose__a'>
                        <figure class='profileClose__a-figure'>
                            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'>
                                <path d='M320 32c0-9.9-4.5-19.2-12.3-25.2S289.8-1.4 280.2 1l-179.9 45C79 51.3 64 70.5 64 92.5V448H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H96 288h32V480 32zM256 256c0 17.7-10.7 32-24 32s-24-14.3-24-32s10.7-32 24-32s24 14.3 24 32zm96-128h96V480c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H512V128c0-35.3-28.7-64-64-64H352v64z'/>
                            </svg>
                        </figure>
                        <div class='profileClose__a-text'>
                            Cerrar sesion
                        </div>
                    </a>
                </div>
            </div>
                ";
        }
    ?>
    <div class="modal"></div>
    <main class="main">
        <!--BARRA DE BUSQUEDAD-->
        <div class="search">
            <input id="inputSearch" type="text" class="search__input" placeholder="Busca tu lugar ideal..." value="<?=$this->informacion['value']?>">
            <button id="BtnSearch" class="search__btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
                </svg>
            </button>
        </div>
        <div class="bares">
            <?php 
                if(isset($data['empty'])){
                    echo 
                    "
                        <div class='favoritosMsg'>
                            <h4>¡No se ha encontrado ninguna bar!</h4>
                            <div class='favoritoIcon'>
                                <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 512'>
                                    <path d='M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7l-86.8-68V384 252.6c-4 1-8 1.8-12.3 2.3l-.1 0c-5.3 .7-10.7 1.1-16.2 1.1c-12.4 0-24.3-1.9-35.4-5.3V350.9L301.2 210.7c7-4.4 13.3-9.7 18.8-15.7c15.9 17.6 39.1 29 65.2 29c26.2 0 49.3-11.4 65.2-29c16 17.6 39.1 29 65.2 29c4.1 0 8.1-.3 12.1-.8c55.5-7.4 81.8-72.5 52.1-119.4L522.3 13.1C517.2 5 508.1 0 498.4 0H141.6c-9.7 0-18.8 5-23.9 13.1l-22.7 36L38.8 5.1zm73.4 218.1c4 .5 8.1 .8 12.1 .8c11 0 21.4-2 31-5.6L48.9 134.5c-6.1 40.6 19.5 82.8 63.3 88.7zM160 384V250.6c-11.2 3.5-23.2 5.4-35.6 5.4c-5.5 0-11-.4-16.3-1.1l-.1 0c-4.1-.6-8.1-1.3-12-2.3V384v64c0 35.3 28.7 64 64 64H480c12.9 0 24.8-3.8 34.9-10.3L365.5 384H160z'/>
                                </svg>
                            </div>
                        </div>
                    ";

                }
                else{
                    for($i = 0; $i< count($data); $i++){
                        echo 
                        "
                        <a href='../bar/{$data[$i]['slug']}' class='bares__box'>
                        
                            <figure class='bares__box-img'>
                                <img src='../{$data[$i]['imagen']}1.png' alt=''>
                            </figure>
                            <div class='bares__info'>
                                <h5 class='bares__info-titulo'>{$data[$i]['nombre']}</h5>
                                <p class='bares__info-text'>{$data[$i]['direccion']}</p>
                            </div>
                        </a> 
                        ";
                    }
                }
            ?>
        </div>

    </main>


    <script src="../app/Views/layouts/nav/nav.js"></script>
    <script src="../app/Views/search/index.js"></script>
</body>
</html>