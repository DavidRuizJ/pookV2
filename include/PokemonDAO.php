<?php
require_once("include/PokemonVO.php");

class PokemonDAO{
    private $host = "localhost";
    private $user = "sepherot_davidr";
    private $password = "Qk5NIIjGjFAF";
    private $database = "sepherot_davidrBD";
    private $tabla = "T_Pokemon";
    private $cnx;

    function __construct(){
        $this->cnx = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }

    function selectAll(){
        $query = "SELECT * FROM ".$this->tabla;
        $res = mysqli_query($this->cnx, $query);
        while($fila=mysqli_fetch_assoc($res)){
            $vo = new PokemonVO();
            $vo->setId($fila["ID_Pokemon"]);
            $vo->setNombre($fila["Pok_Nombre"]);
            $vo->setNivel($fila["Pok_Nivel"]);
            $vo->setTipo($fila["Pok_Tipo"]);
            $vo->setImagen($fila["Pok_Imagen"]);
            $listadoVo[] = $vo;
        }
        return $listadoVo;
    }

    function insertar($vo){
        $query = "INSERT INTO ".$this->tabla." (Pok_Nombre,Pok_Nivel,Pok_Tipo,Pok_Imagen) VALUES('".$vo->getNombre()."',".$vo->getNivel().",'".$vo->getTipo()."', '".$vo->getImagen()."') ";
        $res = mysqli_query($this->cnx, $query);
        if($res){
            return True;
        }
        else{
            return False;
        }
    }


}


//$dao = new PokemonDAO();
//$vo = new PokemonVO();
//$vo->setNombre("Pikachu");
//$vo->setNivel(100);
//$vo->setTipo("Electrico");
//$dao->insertar($vo);
//print_r($dao->selectAll());
?>

