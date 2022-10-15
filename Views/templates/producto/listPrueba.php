<?php 
require_once('../../../Models/Producto.php');
$modeloProducto=new producto();

require_once('../../../Models/Pedido.php');
$modeloPedido=new pedido();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6131ecdde6.js"></script>
    <title>Emparedados</title>

    <link rel="stylesheet" type="text/css" href="../../resources/css/sweet.css">

    <!-- Links paginacion data table -->

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.css">
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.js"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <script src="https://kit.fontawesome.com/bcbd8b5d8b.js" crossorigin="anonymous"></script>

    <style>
        .producto{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            padding:2rem;
        }

        .detalleProducto{
            margin-left: 2rem;
            padding: 2rem;
        }
    </style>
</head>
<body>

    <h1>Productos Disponibles</h1>

    <div class="producto">

            <?php
        
            $producto=$modeloProducto->consultar(); 
            if ($producto!=null) {
                foreach($producto as $pr){
                    date_default_timezone_set('America/Bogota');
                    if ($pr['estadoProducto']==1 && $pr['cantidadProducto']!==0 && $pr['fechaCaducidad']>date('Y-m-d')) {
                    
        
                        $pedido=$modeloPedido->consultar(); 
                        if ($pedido!=null) {
                            foreach($pedido as $pe){    
                        
                            }       
                        }
                    
            ?>

                <div class="detalleProducto shadow">
                    <h3><?php echo $pr['nombreProducto'];?></h3>

                    <img src="../../../Uploads/<?php echo $pr['foto'];?>" alt="" width="200">

                    <p><b>Precio: </b>$<?php echo $pr['precioUnidad'];?></p>
                    <p><b>Descripcion: </b><?php echo $pr['descripcionProducto'];?></p>
                    <p><b>Cantidad disponible: </b><?php echo $pr['cantidadProducto'];?> unidades</p>
                    <p><b>Categoria: </b><?php echo $pr['nombreCategoria'];?></p>
                    <p><b>id: </b><?php echo $pr['idProducto'];?></p>

                    <form action="../../../Controllers/Carrito/add.php" method="post">
                        <input type="hidden" name="idProducto_FK" value="<?php echo $pr['idProducto'];?>" readonly>
                        <input type="hidden" name="cantidad" value="1">
                        <input type="hidden" name="total" value="<?php echo $pr['precioUnidad']?>">

                        <button type="submit" rol="button" class="btn btn-outline-primary">Agregar al carrito</button>
                    </form>
                </div>   
            <?php 
                    }       
                }
            }
            ?>

            </div>

<!-- <form action="../../../Controllers/Factura/add.php" method="POST">
    <div class="shopping-cart-items shoppingCartItemsContainer">
    </div>

    <hr>

    <?php //date_default_timezone_set('America/Bogota');?>
	<?php //$fecha=date('Y-m-d');?>
    <input type="hidden" name="fechaPedido" id="" value="<?php //echo $fecha;?>">
				
    <label for="">Direccion Pedido</label>
    <input type="text" name="direccionPedido" required=""><br>

    <div class="shopping-cart-total">
                <p class="">Total</p>
                <p class="shoppingCartTotal">0$</p>
            <div class="toast ml-auto bg-info" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
            </div>
                <button class="comprarButton" type="submit">Vaciar carrito</button>
    </div>

    <button type="submit">Comprar</button>
</form>          -->

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

    <script src="../../resources/js/Venta.js"></script>
</body>
</html>