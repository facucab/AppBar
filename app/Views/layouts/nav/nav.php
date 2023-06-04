<!--NAV -->

<link rel="stylesheet" href="app/Views/layouts/nav/nav.css">
<nav class="nav">
        <!--Botono Nav-->
        <span id="btnNav" class="btnNav">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
            </svg>
        </span>

        <!--Logo-->
        <figure class="LogoNav">
            <img class="LogoNav__img" src="app/Views/img/Logo.png" alt="">
        </figure>

        <!--User-->
        <div id="UserOptions"  class="user">
            <figure class="user__img">
               <?php
                   echo $user != false ? "<img src='{$user->getImg()}' " :false;
               ?>
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
            <li class="listMenu__li"><a href="home">Inicio</a></li>
            <li class="listMenu__li"><a href="home">¿Quiene somos?</a></li>
            <li class="listMenu__li"><a href="home">Contacto</a></li>
            <li class="listMenu__li"><a href="home">Bares</a></li>
            <li class="listMenu__li"><a href="favoritos">Mis favoritos</a></li>
        </ul>
        <!---->
        <div class="menu__iniciar">
            <?php
                echo $user != false ? "<a href='CloseSesion'>Cerrar sesion</a>" : "<a href='login'>Iniciar sesion</a>";
            ?>
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
                        <img src='{$user->getImg()}' alt=''>
                    </figure>
                    <div class='user__name'>
                        {$user->getusuario()}
                    </div>
                </div>
                <div class='profileClose'>
                    <a href='CloseSesion' class='profileClose__a'>
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
<script src="app/Views/layouts/nav/nav.js"></script>