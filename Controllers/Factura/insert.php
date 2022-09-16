<?php

    $mysqli=new mysqli('localhost', 'root', '', 'emparedados');
    
    if ($mysqli->connect_errno) {
        echo "No se ha podido conectar al servidor MySQL debido al error: ".$mysqli->connect_error;
    }

    $idFactura=$_POST['idFactura'];
    $idPedido_FK=$_POST['idPedido_FK'];
	$idProducto_FK=$_POST['idProducto_FK'];
	$cantidad=$_POST['cantidad'];

    $cadena= "INSERT INTO Factura(idFactura, idPedido_FK, idProducto_FK, cantidad) VALUES ";
 
    for ($i=0; $i < count($idFactura); $i++) { 
        $cadena.="('".$idFactura[$i]."', '".$idPedido_FK[$i]."', '".$idProducto_FK[$i]."', '".$cantidad[$i]."'),";
    }

    $cadena_final=substr($cadena, 0, -3);
    $cadena_final.=";";

    

    if ($mysqli->query($cadena_final)):
        echo json_encode(array('error'=>false));
    else:
        echo json_encode(array('error'=>true));
    endif;

    $mysqli->close();

    echo json_encode(array('cadena', $cadena));
?>