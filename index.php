<?php
 require 'assets/contenido_admitido.php';
 require 'funciones.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa reciclaje</title>
    <link rel="stylesheet" href="style/index.css">
</head>
<body>

<div id="wrapper">

    <header>
        <div id="logo" onclick='window.location = "index.php"'>
            <h1 align='center'>Programa De Reciclaje</h1>
            <h3 align='center'>(Por Jose Luis)</h3>
        </div>

        <nav>

            <ul class="nav-horizontal">
                <li>
                    <a href="" class="i">Sobre El Reciclaje</a>
                    <ul class="nav-vertical">
                        <li><a href="index.php?show=donde_tirar_cosas">Donde Tirar Las Cosas</a></li>
                        <li><a href="index.php?show=localizador_elementos">Localizador Elementos</a></li>
                    </ul>
                </li>
                <li>
                    <a href="" class="i">Reciclaje en Caceres</a>
                    <ul class="nav-vertical">
                        <li><a href="https://www.ayto-caceres.es/ciudadania/puntos-limpios/" target="_blank">Puntos Limpios</a></li>
                        <li><a href="https://www.caceressiemprelimpio.es/conyser-responde-contenedores/" target="_blank">Punto Limpio Movil</a></li>
                        <li><a href="assets/Cartel_PuntoLimpioMovil.pdf" download="Cuadrante_Punto_Movil">PDF Cuadrante Punto Movil</a></li>
                        <li><a href="https://www.ayto-caceres.es/noticias/un-nuevo-punto-limpio-en-el-paseo-de-canovas-facilitara-el-reciclaje-de-residuos-especificos/" target="_blank">Punto Limpio Canovas</a></li>
                        <li><a href="https://www.miteco.gob.es/es/ceneam/recursos/pag-web/buscador-reciclaje.aspx" target="_blank">Buscador de reciclaje</a></li>
                    </ul>
                </li>
                <li>
                    <a href="" class="i">Organizaciones</a>
                    <ul class="nav-vertical">
                        <li><a href="https://www.caceressiemprelimpio.es/conyser/" target="_blank">CONYSER</a></li>
                        <li><a href="https://www.ecoembes.com/es" target="_blank">ECOEMBES</a></li>
                        <li><a href="https://residuos.webnode.es/residuos/residuos-industriales/residuos-construccion/asociacion-de-descontaminacion-residuos-peligrosos-adrp/" target="_blank">ADRP</a></li>
                    </ul>
                </li>
            </ul>

        </nav>


        <!-- <button onclick='window.location = "index.php?show=donde_tirar_cosas"'>Donde va cada cosa?</button>
        <button onclick='window.location = "index.php?show=prueba"'>Paradas de Contenedores</button>
        <button onclick='window.open("https:www.caceressiemprelimpio.es/recogida-de-residuos-urbanos/")'>Horarios Locales</button> -->
    </header>

    <?php
    $show = isset($_GET['show']) ? $_GET['show'] : "index"; 
    switch($show){
        case "index": include 'landing.php';
        break;

        case "donde_tirar_cosas": include "donde_tirar_cosas.php";
        break;

        case "prueba": include "prueba.php";
        break;

        case "localizador_elementos": include 'localizador_elementos.php';
        break;

    }//end of switch

    ?>


</div><!-- FIN DEL WRAPPER -->

<footer>
        <div id='first'>
            <div id="autor">
            <p>&copy Jose Luis Fernandez Almendral</p>
            </div>
        </div>
        <div id="second">
            <div id="git">
                <img src="assets/github.png" width="33">
                <p><a href="https://github.com/alphawebdevop" target="blank_">alphawebdevop</a></p>
            </div>
        </div>
</footer>

</body>
</html>