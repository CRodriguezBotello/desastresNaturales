<?php
    echo 'Nombre: '.$_GET["nombre"];
    echo 'Apellido: '.$_GET["apel"];
    echo 'Fecha: '.$_GET["fecha"];
    echo 'Sexo: '.$_GET["sexo"];
    echo 'Opinión personal: '.$_GET["textearea"];
    echo 'Sentimientoss: '.$_GET["checkbox"];

    if (isset($_GET["terminos"])) {
        if (empty($_GET["terminos"])) {
            // PONER TEXTO AQUI
        }
    }
?>