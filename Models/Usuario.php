<?php 
require_once('Conexion.php');

class Usuario extends Conexion{

	public function __construct(){
		$this->db=parent::__construct();
	  }
	
	  public function agregar($idUsuario, $nombreUsuario, $rolUsuario, $correoUsuario, $contraseñaUsuario, $estadoUsuario){
		$agregar=$this->db->prepare("INSERT INTO  Usuario (idUsuario, nombreUsuario, rolUsuario, correoUsuario, contraseñaUsuario, estadoUsuario) VALUES (:idUsuario, :nombreUsuario, :rolUsuario, :correoUsuario, :contraseñaUsuario, :estadoUsuario);");
		$agregar->bindparam(':idUsuario', $idUsuario);
		$agregar->bindparam(':nombreUsuario', $nombreUsuario);
		$agregar->bindparam(':rolUsuario', $rolUsuario);
		$agregar->bindparam(':correoUsuario', $correoUsuario);
		$agregar->bindparam(':contraseñaUsuario', $contraseñaUsuario);
		$agregar->bindparam(':estadoUsuario', $estadoUsuario);
		
		
		if($agregar->execute()){
		  return true;
		}else{
		  return false;
		}
	  }
	
	  public function consultar(){
		$rows=null;
		$mostrar=$this->db->prepare(" SELECT *FROM Usuario;");
		$mostrar->execute();
		while($result=$mostrar->fetch()){
		  $rows[]=$result;
		}
		return $rows;
	  }
	
	  public function cosnsultarxid($idUsuario){
		$rows=null;
		$mostrar=$this->db->prepare("SELECT * FROM Usuario WHERE idUsuario=:idUsuario;");
		$mostrar->bindparam(':idUsuario', $idUsuario);
		$mostrar->execute();
		while($result=$mostrar->fetch()){
		  $rows[]=$result;
		}
		return $rows;
	  }
	
	  public function actualizar($idUsuario, $nombreUsuario, $rolUsuario, $correoUsuario, $contraseñaUsuario, $estadoUsuario){
		$editar=$this->db->prepare("UPDATE Usuario SET idUsuario=:idUsuario, nombreUsuario=:nombreUsuario, rolUsuario=:rolUsuario, correoUsuario=:correoUsuario, contraseñaUsuario=:contraseñaUsuario, estadoUsuario=:estadoUsuario,  WHERE idUsuario=:idUsuario;");
		$editar->bindparam(':idUsuario', $idUsuario);
		$editar->bindparam(':nombreUsuario', $nombreUsuario);
		$editar->bindparam(':rolUsuario', $rolUsuario);
		$editar->bindparam(':correoUsuario', $correoUsuario);
		$editar->bindparam(':contraseñaUsuario', $contraseñaUsuario);
		$editar->bindparam(':estadoUsuario', $estadoUsuario); 
		if($editar->execute()){
		  return true;
		}else{
		  return false;
		}
	  }
	
	  public function delete($id){
		$rows=null;
		$eliminar=$this->db->prepare("DELETE FROM Usuario WHERE idUsuario=:id");
		$eliminar->bindparam(':id', $id);
		$eliminar->execute();
		if($eliminar->execute()){
		  return true;
		}else{
		  return false;
		}
	  }

    public function validar($correoUsuario, $contraseñaUsuario){
  $sentencia=$this->db->prepare("SELECT * FROM Usuario WHERE correoUsuario=:correoUsuario AND contraseñaUsuario=:contraseñaUsuario;");
    $sentencia->bindparam(':correoUsuario',$correoUsuario);
    $sentencia->bindparam(':contraseñaUsuario',$contraseñaUsuario);
    $sentencia->execute();

    if ($sentencia->rowCount()==1) {
      return true;
    }else{
      return false;
    }
  }


}
?>