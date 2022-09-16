<?php 
require_once('Conexion.php');

class usuario extends conexion{

  public function __construct(){
    $this->db=parent::__construct();
  }

  public function agregar($idUsuario, $nombreUsuario, $correoUsuario, $passworUsuario, $rolUsuario, $estadoUsuario){
    $agregar=$this->db->prepare("INSERT INTO  usuario VALUES (:idUsuario, :nombreUsuario, :correoUsuario, :passworUsuario, :rolUsuario, :estadoUsuario);");
    $agregar->bindparam(':idUsuario', $idUsuario);
    $agregar->bindparam(':nombreUsuario', $nombreUsuario);
    $agregar->bindparam(':correoUsuario', $correoUsuario);
    $agregar->bindparam(':passworUsuario', $passworUsuario);
    $agregar->bindparam(':rolUsuario', $rolUsuario);
    $agregar->bindparam(':estadoUsuario', $estadoUsuario);
    
    if($agregar->execute()){
      return true;
    }else{
      return false;
    }
  }

  public function consultar(){
    $rows=null;
    $mostrar=$this->db->prepare(" SELECT *FROM usuario;");
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }

  public function consultarxid($idUsuario){
    $rows=null;
    $mostrar=$this->db->prepare("SELECT * FROM usuario WHERE idUsuario=:idUsuario;");
    $mostrar->bindparam(':idUsuario', $idUsuario);
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }

  public function actualizar($idUsuario, $nombreUsuario, $correoUsuario, $passworUsuario, $rolUsuario, $estadoUsuario){
    $editar=$this->db->prepare("UPDATE usuario SET idUsuario=:idUsuario, nombreUsuario=:nombreUsuario, correoUsuario=:correoUsuario, passworUsuario=:passworUsuario, rolUsuario=:rolUsuario, estadoUsuario=:estadoUsuario WHERE idUsuario=:idUsuario");
    $editar->bindparam(':idUsuario', $idUsuario);
    $editar->bindparam(':nombreUsuario', $nombreUsuario);
    $editar->bindparam(':correoUsuario', $correoUsuario);
    $editar->bindparam(':passworUsuario', $passworUsuario);
    $editar->bindparam(':rolUsuario', $rolUsuario);
    $editar->bindparam(':estadoUsuario', $estadoUsuario);  
    if($editar->execute()){
      return true;
    }else{
      return false;
    }
  }

  public function delete($id){
    $rows=null;
    $eliminar=$this->db->prepare("DELETE FROM usuario WHERE idUsuario=:id");
    $eliminar->bindparam(':id', $id);
    $eliminar->execute();
    if($eliminar->execute()){
      return true;
    }else{
      return false;
    }
  }

  public function validar($correoUsuario, $passworUsuario, $rolUsuario){
  $sentencia=$this->db->prepare("SELECT * FROM usuario WHERE correoUsuario=:correoUsuario AND passworUsuario=:passworUsuario AND rolUsuario=:rolUsuario;");
    $sentencia->bindparam(':correoUsuario',$correoUsuario);
    $sentencia->bindparam(':passworUsuario',$passworUsuario);
    $sentencia->bindparam(':rolUsuario',$rolUsuario);
    $sentencia->execute();

    if ($sentencia->rowCount()==1) {
      return true;
    }else{
      return false;
    }
  }


}
?>