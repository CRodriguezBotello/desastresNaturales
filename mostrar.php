<?php
    echo 'Nombre: '.$_GET["nombre"];
    echo '<br/><br/>Apellido: '.$_GET["apel"];
    echo '<br/><br/>Fecha: '.$_GET["fecha"];
    echo '<br/><br/>Sexo: '.$_GET["button"];
    // echo '<br/><br/>Opinión personal: '.$_GET["textarea"];
    echo '<br/><br/>Desastre más llamativo: '.$_GET["opciones"];

    if (isset($_GET["clima[]"])) {
        echo '<br/><br/>Climas seleccionados para recibir informacion: <br/>';
        foreach($_GET["clima[]"] as $indice => $valor){
            echo $valor.'<br/>';
        }
    }else {
        echo '<br/><br/>No se ha seleccionado ningun clima<br/>';
    }

    if (isset($_GET["terminos"])) {
        echo "<br/><br/>Terminos aceptados";
    }else {
            echo "<br/><br/>Terminos no aceptados";
    }
?>