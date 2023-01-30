<section class="localizador-elementos">

    <h1 align='center'>Localiza El Contenedor Para El Elemento</h1>

    <div id="localizador-wrapper">

    <?php

        if(!isset($_REQUEST['objeto'])  && !isset($_REQUEST['busqueda_manual']) && !isset($_REQUEST['me_sirve'])){

            /* if(isset($_GET['not_found'])){
                echo "
                    <p id='not_found'>Error, realiza la busqueda manual</p>
                ";
            } */

            echo " 
            <form action='index.php?show=localizador_elementos' method='POST'>
                <label for='objeto'>Introduce el objeto: </label>
                <input type='text' name='objeto' autofocus required><br><br>

                <label for='contenedor_elegido'>Selecciona donde lo tirarias:</label>
                <select name='contenedor_elegido'>
                    <option value='verde'>Verde</option>
                    <option value='amarillo'>Amarillo</option>
                    <option value='azul'>Azul</option>
                    <option value='marron'>Marron</option>
                </select><br><br>

                <input type='submit' name='tirar' value='Tirar'>
            </form>
            <button><a href='index.php?show=localizador_elementos&busqueda_manual'>Busqueda Manual</a></button>
            ";
        }





        $contenido;
        if(isset($_REQUEST['tirar'])){
            $cont_elegido = $_REQUEST['contenedor_elegido'];
            switch($cont_elegido){
                case "verde": $contenido = $admi_cont_verde;
                break;

                case "amarillo": $contenido = $admi_cont_amarillo;
                break;

                case "azul": $contenido = $admi_cont_azul;
                break;

                case "marron": $contenido = $admi_cont_marron;
                break;
            }//end of switch

            admite($_REQUEST['objeto'],$contenido);

            //porsi no encuentra nada
            /* if(!admite($_REQUEST['objeto'],$contenido)){
                header("Location: index.php?show=localizador_elementos&not_found=not");
            }else{
                admite($_REQUEST['objeto'],$contenido);
            } */
 
            

        }//end first if

        if((isset($_GET['me_sirve']) && $_GET['me_sirve'] == "mas_opciones") || isset($_REQUEST['busqueda_manual'])){
            if(isset($_REQUEST['item'])){
                $url = "https://www.google.com/search?q=en+que+contenedor+tirar+".$_REQUEST['item'];
                buscaManual($url);
            }else{
                $item = isset($_GET['item2']) ? $_GET['item2'] : " ";
                echo "
            <div class='mas-opciones'>
            <h2 align='center'>Busqueda Manual</h2>
            <span>Introduce el objeto del que quieres saber el contenedor :)</span>
            <form method='POST' action='index.php?show=localizador_elementos&me_sirve=mas_opciones'>
                <input type='text' name='item' value='$item' autofocus>
                <input type='submit' name='buscar' value='Buscar'>
            </form>
            <button><a href='index.php?show=localizador_elementos'>Salir</a></button>
            </div>
            ";
            }
        }


        if(isset($_GET['me_sirve']) && $_GET['me_sirve'] == "si"){
            $boton = "<button><a href='index.php?show=localizador_elementos'>Limpiar</a></button>";
            switch($_GET['contenedor']){
                case "verde": echo $contenedor_verde_card.$boton;
                break;

                case "amarillo": echo $contenedor_amarillo_card.$boton;
                break;

                case "azul":  echo $contenedor_azul_card.$boton;
                break;

                case "marron":  echo $contenedor_marron_card.$boton;
                break;
            }//end of switch
        }else if(isset($_GET['me_sirve']) && $_GET['me_sirve'] == "no"){
            $contenido;
            switch($_GET['contenedor']){
                case "verde": $contenido = $admi_cont_verde;
                break;

                case "amarillo": $contenido = $admi_cont_amarillo;
                break;

                case "azul": $contenido = $admi_cont_azul;
                break;

                case "marron": $contenido = $admi_cont_marron;
                break;
            }//end of switch

            avisoObjetoEncontrado($contenido,$_GET['contenedor'],$_GET['item2']);
        }

    ?>

    </div>


</section>