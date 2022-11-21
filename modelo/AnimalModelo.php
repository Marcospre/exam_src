<?php
namespace modelo;

include_once 'Conexion.php';

include_once 'Modelos.php';

class AnimalModelo extends Conexion implements Modelos
{

    function __construct()
    {
        parent::__construct();
    }

    public function maxIdAnimal(){
        //TODO examen
        //devuelve el id max para poder insertar un nuevo zoo
        //SELECT max(id) as maximo FROM `zoos` WHERE 1;
        //en caso de que no haya ningun registro return -1
        $sentencia = parent::con()->prepare("SELECT max(id) as maximo FROM animals WHERE 1");
        
        $sentencia->execute();
        
        $resultado = $sentencia->get_result();
        
        if($resultado != null){
            
            $retorno=$resultado->fetch_assoc();
            
        }else{
            $retorno = -1;
        }
        return $retorno;
        
    }
    
    public function update($itemAssoc)
    {}

    public function selectById($id)
    {
        
    }
    
    public function selectAnimalsByZoo($idZoo){
        //TODO examen
        //SELECT * FROM animals where zoo_id=$idZoo
        //devuelve un array de animales en formato array asociativo
        
        $sentencia = parent::con()->prepare("select * from animals where zoo_id=?");
        
        $sentencia->bind_param("i", $idZoo);
        
        $sentencia->execute();
             
        
        $resultado = $sentencia->get_result();
        
        while($fila = $resultado->fetch_assoc()){
            $retorno[] = $fila;
        }
        $sentencia->close();
        return $retorno;

    }

    public function selectAll()
    {
        //TODO examen
        //devuelve un array de animales en formato array asociativo
        $sentencia = parent::con()->prepare("select * from animals");
        
     
        $sentencia->execute();
        
        
        $resultado = $sentencia->get_result();
        
        while($fila = $resultado->fetch_assoc()){
            $retorno[] = $fila;
        }
        $sentencia->close();
        return $retorno;
        
        
    }
    public function insert($itemAssoc)
    {
        $id = array_values($this->maxIdAnimal())[0]+1;
        $nombre = $itemAssoc['nombre'];
        $foto = $itemAssoc['foto'];
        $nombre_cientifico = $itemAssoc['nombre_cientifico'];
        $descripcion = $itemAssoc['descripcion'];
        $zoo_id = $itemAssoc['zoo_id'];
        
        $insert = parent::con()->query("INSERT INTO `animals`(`id`,`nombre`,`foto`,`nombre_cientifico`,`descripcion`,`zoo_id`)
                                        VALUES ('$id','$nombre','$foto','$nombre_cientifico','$descripcion','$zoo_id')");
        
    }

    public function delete($id)
    {}

}

