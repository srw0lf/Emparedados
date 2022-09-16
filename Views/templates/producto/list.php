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
</head>
<body>

    <h1>Productos Disponibles</h1>

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

            <div class="producto">
                <div class="item shadow">
                    <h3 class="item-title"><?php echo $pr['nombreProducto'];?></h3>

                    <img class="item-image" src="../../../Uploads/<?php echo $pr['foto'];?>" alt="" width="200">

                    <div class="item-details">
                        <p class="item-price"><?php echo $pr['precioUnidad'];?></p>
                        <p class="item-desc"><?php echo $pr['descripcionProducto'];?></p>
                        <p class="item-cat"><?php echo $pr['nombreCategoria'];?></p>
                        <p class="item-idPe"><?php
                            if ($pedido!=null) {
                                foreach($pedido as $pe){    
                                    echo $pe['idPedido'];
                                }       
                        }?></p>
                        <p class="item-idPr"><?php echo $pr['idProducto'];?></p>

                        <button class="addToCart">Agregar al carrito</button>
                    </div>
                </div>
            </div>

            <?php 
                    }       
                }
            }
            ?>
            <hr>

            

            <form action="../../../Controllers/Pedido/add.php" method="POST">
                <input type="hidden" name="idPedido">

                <?php date_default_timezone_set('America/Bogota');?>
				<?php $fecha=date('Y-m-d');?>
                <input type="hidden" name="fechaPedido" id="" value="<?php echo $fecha;?>">
				
                <label for="">Direccion Pedido</label>
                <input type="text" name="direccionPedido">

                <button type="submit"><i class="fa-solid fa-check"></i></button>
            </form>

            <!-- <form action="../../../Controllers/Factura/add.php">
                <input type="hidden" name="idPedido" id="" value="">

                <input type="hidden" name="idProducto" id="" value=>

                <input type="number" name="cantidad">
            </form> -->

              
<!-- END SECTION STORE -->
    
        <div class="shopping-cart-items shoppingCartItemsContainer">
        </div>
        <hr>
            <!-- ? END SHOPPING CART ITEMS -->

            <!-- START TOTAL -->
            <div class="row">
                <div class="col-12">
                    <div class="shopping-cart-total">
                        <p class="">Total</p>
                        <p class="shoppingCartTotal">0$</p>
                        <div class="toast ml-auto bg-info" role="alert" aria-live="assertive" aria-atomic="true"
                            data-delay="2000">
                        </div>
                        <button class="comprarButton" type="button" data-toggle="modal"
                            data-target="#comprarModal">Comprar</button>
                    </div>
                </div>
            </div>
        </div>        


    <!-- SCRIPTS -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script> -->

    <script src="../../resources/js/Venta.js"></script>
</body>
</html>