<?php
        require_once("PokemonVO.php");

        $nombre = htmlspecialchars($_REQUEST["nombre"]);
        $tipo = htmlspecialchars($_REQUEST["tipo"]);
        $nivel = htmlspecialchars($_REQUEST["nivel"]);
        $imagen = htmlspecialchars($_REQUEST["imagen"]);
        $dao = new PokemonDAO();
        $vo = new PokemonVO();

        $vo-> setNombre($nombre);
        $vo -> setTipo($tipo);
        $vo -> setNivel($nivel);
        $vo -> setImagen($imagen);
        $dao -> insertar($vo);

    ?>