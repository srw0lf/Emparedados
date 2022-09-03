<?php 
require_once('Conexion.php');

class Pedido extends Conexion{

  public function __construct(){
    $this->db=parent::__construct();
  }

  public function agregar($idPedido, $fechaPedido, $direccionPedido, $direccionCajero){
    $agregar=$this->db->prepare("INSERT INTO  Pedido (idPedido, fechaPedido, direccionPedido) VALUES (:idPedido, :fechaPedido, :direccionPedido);");
    $agregar->bindparam(':idPedido', $idPedido);
    $agregar->bindparam(':fechaPedido', $fechaPedido);
    $agregar->bindparam(':direccionPedido', $direccionPedido);
    

    if($agregar->execute()){
      return true;
    }else{
      return false;
    }
  }

  public function consultar(){
    $rows=null;
    $mostrar=$this->db->prepare(" SELECT *FROM Pedido;");
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }

  public function cosnsultarxid($idPedido){
    $rows=null;
    $mostrar=$this->db->prepare("SELECT * FROM Pedido WHERE idPedido=:idPedido;");
    $mostrar->bindparam(':idPedido', $idPedido);
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }

  public function actualizar($idPedido, $fechaPedido, $direccionPedido, $direccionCajero){
    $editar=$this->db->prepare("UPDATE Pedido SET idPedido=:idPedido, fechaPedido=:fechaPedido, direccionPedido=:direccionPedido WHERE idPedido=:idPedido;");
    $editar->bindparam(':idPedido', $idPedido);
    $editar->bindparam(':fechaPedido', $fechaPedido);
    $editar->bindparam(':direccionPedido', $direccionPedido);


    if($editar->execute()){
      return true;
    }else{
      return false;
    }
  }

  public function delete($id){
    $rows=null;
    $eliminar=$this->db->prepare("DELETE FROM Pedido WHERE idPedido=:id");
    $eliminar->bindparam(':id', $id);
    $eliminar->execute();
    if($eliminar->execute()){
      return true;
    }else{
      return false;
    }
  }

  public function cosnsultarxid($idPedido){
    $rows=null;
    $mostrar=$this->db->prepare("SELECT * FROM Pedido WHERE idPedido=:idPedido;");
    $mostrar->bindparam(':idPedido', $idPedido);
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }

}
?>