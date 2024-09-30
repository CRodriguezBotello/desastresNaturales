<?php
    echo 'Nombre: '.$_GET["nombre"];
    echo 'Apellido: '.$_GET["apel"];
    echo 'Fecha: '.$_GET["fecha"];
    echo 'Sexo: '.$_GET["button"];
    echo 'Opinión personal: '.$_GET["textearea"];
    echo 'Desastre más llamativo: '.$_GET["opciones"];

    if (isset($_GET["terminos"])) {
        if (empty($_GET["terminos"])) {
            echo "Terminos aceptados";
        }
    }
?>