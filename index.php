<?php
    require_once('BD/BaseDeDatos.php');
    require_once('controllers/ListaController.php');

    $controlador = new ListaController();
    $controlador->inicio();
?>