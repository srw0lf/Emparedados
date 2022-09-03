<?php 
require_once('Conexion.php');

class Producto extends Conexion{

  public function __construct(){
    $this->db=parent::__construct();
  }

  public function agregar($idProducto, $nombreProducto, $cantidadProducto, $fechaCaducidad, $precioUnidad, $descripcionProducto, $estadoProducto, $idCategoria_FK){
    $agregar=$this->db->prepare("INSERT INTO  Producto (idProducto, nombreProducto, cantidadProducto, fechaCaducidad, precioUnidad, descripcionProducto, estadoProducto, idCategoria_FK) VALUES (:idProducto, :nombreProducto, :cantidadProducto, :fechaCaducidad, :precioUnidad, :descripcionProducto, :estadoProducto, :idCategoria_FK);");
    $agregar->bindparam(':idProducto', $idProducto);
    $agregar->bindparam(':nombreProducto', $nombreProducto);
    $agregar->bindparam(':cantidadProducto', $cantidadProducto);
    $agregar->bindparam(':fechaCaducidad', $fechaCaducidad);
    $agregar->bindparam(':precioUnidad', $precioUnidad);
    $agregar->bindparam(':descripcionProducto', $descripcionProducto);
    $agregar->bindparam(':estadoProducto', $estadoProducto);
    $agregar->bindparam(':idCategoria_FK', $idCategoria_FK);
    
    
    if($agregar->execute()){
      return true;
    }else{
      return false;
    }
  }

  public function consultar(){
    $rows=null;
    $mostrar=$this->db->prepare(" SELECT *FROM Producto as p join Categoria as c on p.idCategoria_FK=c.idCategoria;");
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }

  public function cosnsultarxid($idProducto){
    $rows=null;
    $mostrar=$this->db->prepare("SELECT * FROM Producto WHERE idProducto=:idProducto;");
    $mostrar->bindparam(':idProducto', $idProducto);
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }

  public function actualizar($idProducto, $nombreProducto, $cantidadProducto, $fechaCaducidad, $precioUnidad, $descripcionProducto, $estadoProducto, $idCategoria_FK){
    $editar=$this->db->prepare("UPDATE Producto SET idProducto=:idProducto, nombreProducto=:nombreProducto, cantidadProducto=:cantidadProducto,fechaCaducidad=:fechaCaducidad, precioUnidad=:precioUnidad, descripcionProducto=:descripcionProducto, estadoProducto=:estadoProducto, idCategoria_FK=:idCategoria_FK WHERE idProducto=:idProducto;");
    $editar->bindparam(':idProducto', $idProducto);
    $editar->bindparam(':nombreProducto', $nombreProducto);
    $editar->bindparam(':cantidadProducto', $cantidadProducto);
    $editar->bindparam(':fechaCaducidad', $fechaCaducidad);
    $editar->bindparam(':precioUnidad', $precioUnidad);
    $editar->bindparam(':descripcionProducto', $descripcionProducto);
    $editar->bindparam(':estadoProducto', $estadoProducto);
    $editar->bindparam(':idCategoria_FK', $idCategoria_FK); 
    if($editar->execute()){
      return true;
    }else{
      return false;
    }
  }

  public function delete($id){
    $rows=null;
    $eliminar=$this->db->prepare("DELETE FROM Producto WHERE idProducto=:id");
    $eliminar->bindparam(':id', $id);
    $eliminar->execute();
    if($eliminar->execute()){
      return true;
    }else{
      return false;
    }
  }


}
?>