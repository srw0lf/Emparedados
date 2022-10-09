<?php 
require_once('Conexion.php');

class Categoria extends Conexion{

  public function __construct(){
    $this->db=parent::__construct();
  }

  public function agregar($idCategoria, $nombreCategoria, $descripcion){
    $agregar=$this->db->prepare("INSERT INTO  Categoria (idCategoria, nombreCategoria, descripcion) VALUES (:idCategoria, :nombreCategoria, :descripcion);");
    $agregar->bindparam(':idCategoria', $idCategoria);
    $agregar->bindparam(':nombreCategoria', $nombreCategoria);
    $agregar->bindparam(':descripcion', $descripcion);
    
    if($agregar->execute()){
      return true;
    }else{
      return false;
    }
  }

  public function consultar(){
    $rows=null;
    $mostrar=$this->db->prepare(" SELECT *FROM Categoria;");
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }

  public function consultarxid($idCategoria){
    $rows=null;
    $mostrar=$this->db->prepare("SELECT * FROM Categoria WHERE idCategoria=:idCategoria;");
    $mostrar->bindparam(':idCategoria', $idCategoria);
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }

  public function verPro($idCategoria){
    $rows=null;
    $mostrar=$this->db->prepare("SELECT * FROM Categoria AS c JOIN Producto AS p ON c.idCategoria=p.idCategoria_FK WHERE idCategoria=:idCategoria;");
    $mostrar->bindparam(':idCategoria', $idCategoria);
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }

  public function actualizar($idCategoria, $nombreCategoria, $descripcion){
    $editar=$this->db->prepare("UPDATE Categoria SET idCategoria=:idCategoria, nombreCategoria=:nombreCategoria, descripcion=:descripcion WHERE idCategoria=:idCategoria;");
    $editar->bindparam(':idCategoria', $idCategoria);
    $editar->bindparam(':nombreCategoria', $nombreCategoria);
    $editar->bindparam(':descripcion', $descripcion);
    if($editar->execute()){
      return true;
    }else{
      return false;
    }
  }

  public function delete($id){
    $rows=null;
    $eliminar=$this->db->prepare("DELETE FROM Categoria WHERE idCategoria=:id");
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