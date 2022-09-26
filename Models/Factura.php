<?php 
require_once('Conexion.php');

class Factura extends Conexion{

  public function __construct(){
    $this->db=parent::__construct();
  }

  public function agregar($idPedido, $idProducto_FK, $cantidad){
    $agregar=$this->db->prepare("INSERT INTO  Factura (idPedido_FK, idProducto_FK, cantidad) VALUES (:idPedido_FK, :idProducto_FK, :cantidad);");
    $agregar->bindparam(':idPedido_FK', $idPedido_FK);
    $agregar->bindparam(':idProducto_FK', $idProducto_FK);
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