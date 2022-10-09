<?php 
require_once('Conexion.php');

class TipoDoc extends Conexion{

  public function __construct(){
    $this->db=parent::__construct();
  }

  public function agregar($idTipoDoc, $nombreTipoDoc){
    $agregar=$this->db->prepare("INSERT INTO  TipoDoc (idTipoDoc, nombreTipoDoc) VALUES (:idTipoDoc, :nombreTipoDoc);");
    $agregar->bindparam(':idTipoDoc', $idTipoDoc);
    $agregar->bindparam(':nombreTipoDoc', $nombreTipoDoc);
    
    if($agregar->execute()){
      return true;
    }else{
      return false;
    }
  }

  public function consultar(){
    $rows=null;
    $mostrar=$this->db->prepare(" SELECT *FROM TipoDoc;");
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }

  public function consultarxid($idTipoDoc){
    $rows=null;
    $mostrar=$this->db->prepare("SELECT * FROM TipoDoc WHERE idTipoDoc=:idTipoDoc;");
    $mostrar->bindparam(':idTipoDoc', $idTipoDoc);
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }

  public function verTipo($idTipoDoc){
    $rows=null;
    $mostrar=$this->db->prepare("SELECT * FROM TipoDoc AS td JOIN Cajero AS c ON td.idTipoDoc=c.idTipoDoc_FK WHERE idTipoDoc=:idTipoDoc;");
    $mostrar->bindparam(':idTipoDoc', $idTipoDoc);
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }

  public function actualizar($idTipoDoc, $nombreTipoDoc){
    $editar=$this->db->prepare("UPDATE TipoDoc SET idTipoDoc=:idTipoDoc, nombreTipoDoc=:nombreTipoDoc WHERE idTipoDoc=:idTipoDoc;");
    $editar->bindparam(':idTipoDoc', $idTipoDoc);
    $editar->bindparam(':nombreTipoDoc', $nombreTipoDoc);
    if($editar->execute()){
      return true;
    }else{
      return false;
    }
  }

  public function delete($id){
    $rows=null;
    $eliminar=$this->db->prepare("DELETE FROM TipoDoc WHERE idTipoDoc=:id");
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