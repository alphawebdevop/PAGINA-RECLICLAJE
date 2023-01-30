<?php

//crear funcion que vea lo que las variables de contenido en cada contenedor
function admite($item,$contenedor){

    $items = [];
    foreach($contenedor as $item_admitido){
        similar_text($item,$item_admitido,$percent);
        if(floor($percent >= 30)){
            array_push($items,$item_admitido);
        }
    }

    if(count($items) > 0){
        avisoObjetoEncontrado($items,$contenedor,$item);//aqui $contenedor no lo usamos
        return;
    }else{
        echo "<p id='not_found'>Opcion no barajada por el momento</p>
              <button><a href='index.php?show=localizador_elementos'>Limpiar</a></button>"; 
    }

    return false;
}//end of function



//aviso emergente para confirmacion de comparacion
function avisoObjetoEncontrado($items,$cont_elegido,$item2="a"){
//crear condicion para que vaya mostrando concatenando cadena
$contador = isset($_GET['cont']) != 0 ? $_GET['cont']++ : 0;
$item = $items[$contador];
$contenedor = isset($_REQUEST['contenedor_elegido']) ? $_REQUEST['contenedor_elegido'] : $cont_elegido;


    echo "
    <div class='aviso-objeto-encontrado'>
                <h2 align='center'>Aviso!</h2>
                <span>El objeto mas parecido que se ha encontrado
                    es <strong>'$item'</strong>
                </span>
    
                <button><a href='index.php?show=localizador_elementos&me_sirve=no&objeto=$item&cont=$contador&contenedor=$contenedor&item2=$item2'>Seguir Buscando</a></button>
                <button><a href='index.php?show=localizador_elementos&me_sirve=si&contenedor=$contenedor'>Me sirve!</a></button>
                <button title='Busqueda Manual'><a href='index.php?show=localizador_elementos&me_sirve=mas_opciones&item2=$item2'>Mas opciones</a></button>
        </div>
    ";

}


function buscaManual($direccion){
    header("Location: $direccion");
}



//CREAR FUNCION DE DETECTAR RESIDUO PELIGROSO



//funcion que encuentre el contenedor al que pertenece el item
function encontrar($item){



}//end of function


?>