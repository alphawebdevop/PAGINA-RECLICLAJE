<?php

    $cosa = "cascos usados";
    $url = "https://www.google.com/search?q=en+que+contenedor+tirar+".$cosa;
    busca($url);

    function busca($direccion){
        header("Location: $direccion");
    }



?>