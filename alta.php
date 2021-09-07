<?php
require_once("PokemonVO.php");

$nombre = htmlspecialchars($_POST["nombre"]);
$tipo = htmlspecialchars($_POST["tipo"]);
$nivel = htmlspecialchars($_POST["nivel"]);
$imagen = htmlspecialchars($_POST["foto"]);
$dao = new PokemonDAO();
$vo = new PokemonVO();

$vo-> setNombre($nombre);
$vo -> setTipo($tipo);
$vo -> setNivel($nivel);
$vo -> setImagen($imagen);
$dao -> insertar($vo);

?>