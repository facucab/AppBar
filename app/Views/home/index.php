<?php
    if(isset($_SESSION['user'])){
        $user = unserialize($_SESSION['user']);
    }
    else{
        $user = false;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppBar</title>
    <link rel="stylesheet" href="app/Views/home/index.css">
</head>
<body>
    
    <?php 
        require('app/Views/layouts/nav/nav.php');
    ?>
    
    <main class="main">
        <div class="search">
            <input id="inputSearch" type="text" class="search__input" placeholder="Busca tu lugar ideal...">
            <button id="BtnSearch" class="search__btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
                </svg>
            </button>
        </div>
        <!--Seccion-->
        <section class="bares">
            <h5 class="titulos">Encontra Bares</h5>
            <div class="carrusel">
                <!--carruselBox-->
                <?php
                        $bares = $this->d;
                        foreach ($bares as $key){
                           echo  
                           "
                                <a href='bar/{$key['slug']}' class='carruselBox'>
                                    <!--Imagen-->
                                    <figure class='carruselBox__img'>
                                        <img src='{$key['imagen']}1.png' alt=''>
                                    </figure>
                                    <!--Nombre-->
                                    <div class='carusselBox__info'>
                                        <p class='carusselBox__info-p'>{$key['nombre']}</p>
                                        <p class='carusselBox__info-d'>{$key['direccion']}</p>
                                    </div>
                                    <!--star-->
                                    <div class='carusselBox__star'>
                                        <div class='circleStar'></div>
                                        <div class='circleStar'></div>
                                        <div class='circleStar'></div>
                                        <div class='circleStar mediaCircle'></div>
                                    </div>
                                </a>
                           ";
                        }
                    ?>
                <div class='carruselBox'>
                
                    <!--Imagen-->
                    <figure class='carruselBox__img'>
                        <img src='img/bar.jpg' alt=''>
                    </figure>
                    <!--Nombre-->
                    <div class='carusselBox__info'>
                        <p class='carusselBox__info-p'>Nombre del bar</p>
                        <p class='carusselBox__info-d'>Argentina 1345</p>
                    </div>
                   <!--star-->
                   <div class='carusselBox__star'>
                        <div class='circleStar'></div>
                        <div class='circleStar'></div>
                        <div class='circleStar'></div>
                        <div class='circleStar mediaCircle'></div>
                   </div>
                </div>


                <!--carruselBox-->
                <div class="carruselBox">
                    <!--Imagen-->
                    <figure class="carruselBox__img">
                        <img src="img/bar2.webp" alt="">
                    </figure>
                     <!--Nombre-->
                     <div class="carusselBox__info">
                        <p class="carusselBox__info-p">Nombre del bar</p>
                        <p class="carusselBox__info-d">Argentina 1345</p>
                    </div>
                     <!--star-->
                   <div class="carusselBox__star">
                    <div class="circleStar"></div>
                    <div class="circleStar"></div>
                    <div class="circleStar"></div>
                    <div class="circleStar "></div>
                    <div class="circleStar "></div>
               </div>
                </div>
                <!--carruselBox-->
                <div class="carruselBox">
                    <!--Imagen-->
                    <figure class="carruselBox__img">
                        <img src="img/bar3.jpeg" alt="">
                    </figure>
                     <!--Nombre-->
                     <div class="carusselBox__info">
                        <p class="carusselBox__info-p">Nombre del bar</p>
                        <p class="carusselBox__info-d">Argentina 1345</p>
                    </div>
                     <!--star-->
                   <div class="carusselBox__star">
                    <div class="circleStar"></div>
                    <div class="circleStar"></div>
               </div>
                </div>
                <!--end-->
            </div>
       
        </section>
        <!--Seccion-->
        <section class="reco">
            <h3 class="recoTitulo">Sugerencias</h3>
            <p class="recoText">
                Lorem ipsum, dolor sit amet consectetur adipisi
                cing elit. Aut at soluta quas aspernatur totam a
                dipisci commodi, laborum amet 
                <form action="" class="recoForm">
                    <input type="text" class="recoForm__input" placeholder="Nombre completo">
                    <input type="text" class="recoForm__input" placeholder="Correo electronico">
                    <textarea name="" id="" class="recoForm__textarea" cols="30" rows="10" placeholder="Sugerencia"></textarea>
                    <button class="recoBtn">Enviar</button>
                </form>
            </p>
        </section>
         <!--Seccion-->
         <section class="bares">
            <h5 class="titulos">Encontra Restaurantes</h5>
            <div class="carrusel">
                <!--carruselBox-->
                <div class="carruselBox">
                    <!--Imagen-->
                    <figure class="carruselBox__img">
                        <img src="img/bar.jpg" alt="">
                    </figure>
                    <!--Nombre-->
                    <div class="carusselBox__info">
                        <p class="carusselBox__info-p">Nombre del bar</p>
                        <p class="carusselBox__info-d">Argentina 1345</p>
                    </div>
                   <!--star-->
                   <div class="carusselBox__star">
                        <div class="circleStar"></div>
                        <div class="circleStar"></div>
                        <div class="circleStar"></div>
                        <div class="circleStar mediaCircle"></div>
                   </div>


                </div>
                <!--carruselBox-->
                <div class="carruselBox">
                    <!--Imagen-->
                    <figure class="carruselBox__img">
                        <img src="img/bar2.webp" alt="">
                    </figure>
                     <!--Nombre-->
                     <div class="carusselBox__info">
                        <p class="carusselBox__info-p">Nombre del bar</p>
                        <p class="carusselBox__info-d">Argentina 1345</p>
                    </div>
                     <!--star-->
                   <div class="carusselBox__star">
                    <div class="circleStar"></div>
                    <div class="circleStar"></div>
                    <div class="circleStar"></div>
                    <div class="circleStar "></div>
                    <div class="circleStar "></div>
               </div>
                </div>
                <!--carruselBox-->
                <div class="carruselBox">
                    <!--Imagen-->
                    <figure class="carruselBox__img">
                        <img src="img/bar3.jpeg" alt="">
                    </figure>
                     <!--Nombre-->
                     <div class="carusselBox__info">
                        <p class="carusselBox__info-p">Nombre del bar</p>
                        <p class="carusselBox__info-d">Argentina 1345</p>
                    </div>
                     <!--star-->
                   <div class="carusselBox__star">
                    <div class="circleStar"></div>
                    <div class="circleStar"></div>
               </div>
                </div>
                <!--end-->
            </div>
       
        </section>
        <!--Footer-->
        <footer class="footer">
            <div class="footer__redes">
                <div class="footer__redes-box">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/>
                    </svg>
                </div>

                <div class="footer__redes-box">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"/>
                    </svg>
                </div>

                <div class="footer__redes-box">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"/>
                    </svg>
                </div>

                <div class="footer__redes-box">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                        <path d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z"/>
                    </svg>
                </div>
            </div>
            <div class="footer__text">
                <h3>App-Bar 2023 &copy;  </h3>
            </div>
        </footer>
    </main>

    <script src="app/Views/home/index.js"></script>
</body>
</html>