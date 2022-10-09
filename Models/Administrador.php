<?php 
require_once('Conexion.php');

class Administrador extends Conexion{

  public function __construct(){
    $this->db=parent::__construct();
  }

  public function agregar($idAdministrador, $nombreAdministrador, $apellidoAdministrador, $telefonoAdministrador, $nitEmpresa){
    $agregar=$this->db->prepare("INSERT INTO administrador(idAdministrador, nombreAdministrador, apellidoAdministrador, telefonoAdministrador, nitEmpresa) VALUES(:idAdministrador, :nombreAdministrador, :apellidoAdministrador, :telefonoAdministrador, :nitEmpresa);");
    $agregar->bindparam(':idAdministrador', $idAdministrador);
    $agregar->bindparam(':nombreAdministrador', $nombreAdministrador);
    $agregar->bindparam(':apellidoAdministrador', $apellidoAdministrador);
    $agregar->bindparam(':telefonoAdministrador', $telefonoAdministrador);
    $agregar->bindparam(':nitEmpresa', $nitEmpresa);
    if($agregar->execute()){
      return true;
    }else{
      return false;
    }
  }



  public function consultarxid($idAdministrador){
    $rows=null;
    $mostrar=$this->db->prepare("SELECT * FROM Administrador WHERE idAdministrador=:idAdministrador;");
    $mostrar->bindparam(':idAdministrador', $idAdministrador);
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }

  public function consultar(){
    $rows=null;
    $mostrar=$this->db->prepare(" SELECT *FROM Administrador;");
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }


  public function actualizar($idAdministrador, $nombreAdministrador, $apellidoAdministrador, $telefonoAdministrador, $nitEmpresa){
    $editar=$this->db->prepare("UPDATE Administrador SET idAdministrador=:idAdministrador, nombreAdministrador=:nombreAdministrador, apellidoAdministrador=:apellidoAdministrador, telefonoAdministrador=:telefonoAdministrador,
    nitEmpresa=:nitEmpresa WHERE idAdministrador=:idAdministrador;");
    $editar->bindparam(':idAdministrador', $idAdministrador);
    $editar->bindparam(':nombreAdministrador', $nombreAdministrador);
    $editar->bindparam(':apellidoAdministrador', $apellidoAdministrador);
    $editar->bindparam(':telefonoAdministrador', $telefonoAdministrador);
    $editar->bindparam(':nitEmpresa', $nitEmpresa);
     
    if($editar->execute()){
      return true;
    }else{
      return false;
    }
  }

  public function delete($id){
    $rows=null;
    $eliminar=$this->db->prepare("DELETE FROM Administrador WHERE idAdministrador=:id");
    $eliminar->bindparam(':id', $id);
    $eliminar->execute();
    if($eliminar->execute()){
      return true;
    }else{
      return false;
    }
  }

  public function verUs($idAdministrador){
    $rows=null;
    $mostrar=$this->db->prepare("SELECT * FROM Administrador AS a JOIN usuario AS u ON u.idUsuario=a.idUsuario_FK  WHERE a.idAdministrador=:idAdministrador;");
    $mostrar->bindparam(':idAdministrador', $idAdministrador);
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }


}
?>