<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

class PokemonVO{
    private $Id;
    private $Nombre;
    private $Tipo;
    private $Nivel;
    private $Imagen;


    public function setId($valor){
        $this->Id=$valor;
    }

    public function setNombre($valor){
        $this->Nombre=$valor;
    }

    public function setNivel($valor){
        $this->Nivel=$valor;
    }
   
    public function setTipo($valor){
        $this->Tipo=$valor;
    }

    public function setImagen($valor){
        $this->Imagen=$valor;
    }

    public function getId(){
        return $this->Id;
    }

    public function getNombre(){
        return $this->Nombre;
    }

    public function getTipo(){
        return $this->Tipo;
    }

    public function getNivel(){
        return $this->Nivel;
    }

    public function getImagen(){
        return $this->Imagen;
    }
}

//$vo = new PokemonVO();

//$vo->setId(1);

//echo $vo->getId();

//echo $vo->Id;

?>