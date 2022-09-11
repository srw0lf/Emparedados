<?php 
require_once('Conexion.php');

class Cliente extends Conexion{

  public function __construct(){
    $this->db=parent::__construct();
  }

  public function agregar($idCliente, $nombreCliente, $apellidoCliente, $direccionCliente, $telefonoCliente){
    $agregar=$this->db->prepare("INSERT INTO  Cliente (idCliente, nombreCliente, apellidoCliente, direccionCliente, telefonoCliente) VALUES (:idCliente, :nombreCliente, :apellidoCliente, :direccionCliente, :telefonoCliente);");
    $agregar->bindparam(':idCliente', $idCliente);
    $agregar->bindparam(':nombreCliente', $nombreCliente);
    $agregar->bindparam(':apellidoCliente', $apellidoCliente);
    $agregar->bindparam(':direccionCliente', $direccionCliente);
    $agregar->bindparam(':telefonoCliente', $telefonoCliente);
    
    
    if($agregar->execute()){
      return true;
    }else{
      return false;
    }
  }

  public function consultar(){
    $rows=null;
    $mostrar=$this->db->prepare("SELECT *from Cliente; as c join Usuario as u on u.idUsuario=c.idUsuario_FK;");
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }

  public function cosnsultarxid($idCliente){
    $rows=null;
    $mostrar=$this->db->prepare("SELECT * FROM Cliente WHERE idCliente=:idCliente;");
    $mostrar->bindparam(':idCliente', $idCliente);
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }

  public function actualizar($idCliente, $nombreCliente, $apellidoCliente, $direccionCliente, $telefonoCliente){
    $editar=$this->db->prepare("UPDATE Cliente SET idCliente=:idCliente, nombreCliente=:nombreCliente, apellidoCliente=:apellidoCliente, direccionCliente=:direccionCliente, telefonoCliente=:telefonoCliente WHERE idCliente=:idCliente;");
    $editar->bindparam(':idCliente', $idCliente);
    $editar->bindparam(':nombreCliente', $nombreCliente);
    $editar->bindparam(':apellidoCliente', $apellidoCliente);
    $editar->bindparam(':direccionCliente', $direccionCliente);
    $editar->bindparam(':telefonoCliente', $telefonoCliente); 
    if($editar->execute()){
      return true;
    }else{
      return false;
    }
  }

  public function delete($id){
    $rows=null;
    $eliminar=$this->db->prepare("DELETE FROM Cliente WHERE idCliente=:id");
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