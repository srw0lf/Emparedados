<?php 
require_once('Conexion.php');

class Factura extends Conexion{

  public function __construct(){
    $this->db=parent::__construct();
  }

  public function agregar($idPedido, $idProducto, $cantidad){
    $agregar=$this->db->prepare("INSERT INTO  Factura (idPedido_FK, idProducto_FK, cantidad) VALUES (:idPedido, :idProducto, :cantidad);");
    $agregar->bindparam(':idPedido', $idPedido);
    $agregar->bindparam(':idProducto', $idProducto);
    $agregar->bindparam(':cantidad', $cantidad);
    

    if($agregar->execute()){
      return true;
    }else{
      return false;
    }
  }

  public function consultar(){
    $rows=null;
    $mostrar=$this->db->prepare(" SELECT *FROM Factura;");
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }

  public function cosnsultarxid($idPedido, $idProducto){
    $rows=null;
    $mostrar=$this->db->prepare("SELECT * FROM Factura WHERE idPedido=:idPedido AND idProducto=:idProducto;");
    $mostrar->bindparam(':idPedido', $idPedido);
    $mostrar->bindparam(':idProducto', $idProducto);
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }

}
?>