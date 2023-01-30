<section class='d_t_c'>

    <!-- VERDE -->
    <div class="info-cont">
        <div class="cont-lista-si">
            <h3 class="lista-title">SI</h3>
            <ul>
                <?php
                    foreach($admi_cont_verde as $item){
                        echo "<li class='si'> 
                        <img src='assets/correcto.png' >
                        $item</li>";
                    }
                ?>
            </ul>
        </div>
        <div class="cont-contenedor">
            <h3 class="contenedor-title">VERDE</h3>
            <img class="contenedor-img" src="assets/contenedor-verde.png">
        </div>
        <div class="cont-lista-no">
            <h3 class="lista-title">NO</h3>
            <ul>
                <?php
                    foreach($no_admi_cont_verde as $item){
                        echo "<li class='no'>
                        <img src='assets/cross.png' >
                        $item</li>";
                    }
                ?>
            </ul>
        </div>
    </div>

    <!-- AMARILLO -->
    <div class="info-cont">
        <div class="cont-lista-si">
            <h3 class="lista-title">SI</h3>
            <ul>
                <?php
                    foreach($admi_cont_amarillo as $item){
                        echo "<li class='si'> 
                        <img src='assets/correcto.png' >
                        $item</li>";
                    }
                ?>
            </ul>
        </div>
        <div class="cont-contenedor">
            <h3 class="contenedor-title">AMARILLO</h3>
            <img class="contenedor-img" src="assets/contenedor-amarillo.png">
        </div>
        <div class="cont-lista-no">
            <h3 class="lista-title">NO</h3>
            <ul>
                <?php
                    foreach($no_admi_cont_amarillo as $item){
                        echo "<li class='no'>
                        <img src='assets/cross.png' >
                        $item</li>";
                    }
                ?>
            </ul>
        </div>
    </div>
    
    <!-- AZUL -->
    <div class="info-cont">
        <div class="cont-lista-si">
            <h3 class="lista-title">SI</h3>
            <ul>
                <?php
                    foreach($admi_cont_azul as $item){
                        echo "<li class='si'> 
                        <img src='assets/correcto.png' >
                        $item</li>";
                    }
                ?>
            </ul>
        </div>
        <div class="cont-contenedor">
            <h3 class="contenedor-title">AZUL</h3>
            <img class="contenedor-img" src="assets/contenedor-azul.png">
        </div>
        <div class="cont-lista-no">
            <h3 class="lista-title">NO</h3>
            <ul>
                <?php
                    foreach($no_admi_cont_azul as $item){
                        echo "<li class='no'>
                        <img src='assets/cross.png' >
                        $item</li>";
                    }
                ?>
            </ul>
        </div>
    </div>

    <!-- MARRON -->
    <div class="info-cont">
        <div class="cont-lista-si">
            <h3 class="lista-title">SI</h3>
            <ul>
                <?php
                    foreach($admi_cont_marron as $item){
                        echo "<li class='si'> 
                        <img src='assets/correcto.png' >
                        $item</li>";
                    }
                ?>
            </ul>
        </div>
        <div class="cont-contenedor">
            <h3 class="contenedor-title">MARRON</h3>
            <img class="contenedor-img" src="assets/contenedor-marron.png">
        </div>
        <div class="cont-lista-no">
            <h3 class="lista-title">NO</h3>
            <ul>
                <?php
                    foreach($no_admi_cont_marron as $item){
                        echo "<li class='no'>
                        <img src='assets/cross.png' >
                        $item</li>";
                    }
                ?>
            </ul>
        </div>
    </div>



</section>