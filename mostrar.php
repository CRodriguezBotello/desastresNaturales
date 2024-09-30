<?php
    echo 'Nombre: '.$_GET["nombre"];
    echo '<br/><br/>Apellido: '.$_GET["apel"];
    echo '<br/><br/>Fecha: '.$_GET["fecha"];
    echo '<br/><br/>Sexo: '.$_GET["button"];
    echo '<br/><br/>Desastre más llamativo: '.$_GET["opciones"];

    if (isset($_GET["terminos"])) {
        if (empty($_GET["terminos"])) {
            echo "Terminos aceptados";
        }
    }
?>