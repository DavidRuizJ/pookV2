<?php
     ini_set('display_errors', 1);
     ini_set('display_startup_errors', 1);
     error_reporting(E_ALL);
        
    require_once("include/PokemonDAO.php");

    $nombre = htmlspecialchars($_REQUEST["nombre"]);
    $tipo = htmlspecialchars($_REQUEST["tipo"]);
    $nivel = htmlspecialchars($_REQUEST["nivel"]);
    $imagen = htmlspecialchars($_REQUEST["imagen"]);

    $dao = new PokemonDAO();
    $vo = new PokemonVO();

    $vo->setNombre($nombre);
    $vo->setTipo($tipo);
    $vo->setNivel($nivel);
    $vo->setImagen($imagen);

    $dao -> insertar($vo);
    ?>