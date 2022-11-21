<?php
namespace modelo;

include_once 'Conexion.php';

include_once 'Modelos.php';

class ZooModelo extends Conexion implements Modelos
{

    function __construct()
    {
        parent::__construct();
    }

    public function maxIdZoo(){
        //TODO examen
        //devuelve el id max para poder insertar un nuevo zoo
        //SELECT max(id) as maximo FROM `zoos` WHERE 1;       
        //en caso de que no haya ningun registro return -1
        $sentencia = parent::con()->prepare("SELECT max(id) as maximo FROM zoos WHERE 1");
        
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

    public function insert($itemAssoc)
    {
        //TODO examen
        //recive un zoo en formato array asociativo
        //lo inserta en la BBDD
        //tener en cuenta que el id de zoo es pk pero no es auto incrementable
        $id = array_values($this->maxIdZoo())[0]+1;
        $ciudad = $itemAssoc['ciudad'];
        $nombre = $itemAssoc['nombre'];
        $direccion = $itemAssoc['direccion'];
        $pais = $itemAssoc['pais'];
        $descripcion = $itemAssoc['descripcion'];
        $foto = $itemAssoc['foto'];
        
        $insert = parent::con()->query("INSERT INTO `zoos`(`id`,`ciudad`, `nombre`, `direccion`, `pais`, `descripcion`, `foto`)
                                        VALUES ('$id','$ciudad','$nombre','$direccion','$pais','$descripcion','$foto')");
        
    }

    public function selectById($id)
    {
        //TODO examen
        //select * from zoos where id=$id
       
        //devuelve un zoo en formato array asociativo
        
        $sentencia = parent::con()->prepare("select * from zoos where id=?");
        
        $sentencia->bind_param("i", $id);
        
        $sentencia->execute();
        
        $resultado = $sentencia->get_result();
        
   
        
        $retorno=$resultado->fetch_assoc();
        $sentencia->close();
        return $retorno;

    }

    public function delete($id)
    {
        $sentencia = parent::con()->prepare("delete from zoos where id = ?");
        
        $sentencia->bind_param("i", $id);
        
        $sentencia->execute();
        
    }

    public function selectAll()
    {
       //TODO examen
       //devuelve un array de zoos en formato array asociativo
       
        $query = parent::con()->query("SELECT * FROM zoos");
        
        $retorno = [];
        
        while($fila = $query->fetch_assoc()){
            $retorno[] = $fila;
        }
        
        return  $retorno;
    }

}