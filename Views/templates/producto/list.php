<?php 
require_once('../../../Models/Producto.php');
$modeloProducto=new producto();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

                    
            ?>

            <div class="producto">
                <div class="item shadow" width="200">
                    <h3 class="item-title"><?php echo $pr['nombreProducto'];?></h3>
                    <img class="item-image" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAflBMVEUdHR3///8AAACsrKypqakODg52dnbY2NgaGhoYGBgUFBT29vYTExM4ODgICAj8/Py6urrm5uZ/f3/u7u4oKChvb29AQECamprc3NyUlJTBwcHOzs6IiIiysrKOjo5qampGRkZPT09iYmIzMzMqKipZWVl7e3tLS0tVVVWhoaFSA1osAAAIbklEQVR4nO2da3ejIBBAR1obNMY8tHm2eXfb/v8/uFrTFBVlVFDI4X7a7akJt8KACAM4JrHbnK4QL//NxvhrQF1xpDNbktADAOoSbzXFXmWO4fSF+PALJZM58jpjDKcnAiyBt8ZdaIzhOS8I4McR6kJTDJ+LggDhAXWlIYZTQkuGQHaYSw0xfCrfQgD3jLnUEMOTzzEEgukyzDAcx5xKiqymZhiuXZ4gkBniWjMMR7xmmBg+Ia412/AZca011ANrWIc11ANrWIc11ANrWIc11ANrWIc11ANrWIc11ANrWIc11ANrWIcZhmvJs4nRaDt7Us1zeb56vX2v+OVNwDV0X6oumO3uE/5Fw+l2EZNeKLzDjTZ+9e+GXMFEsebzzzue4fwNSMh9RSCb8C0v+Bzy3p91wSWHqGgYLVzZX1NJ4RYeVHxxGK/zhu9+b37gfxUE1XyLP2cMx6/9+SW38J0V3KgRBAgm07thtFT1LVwIu8pgre5vS1a/htGV/4ZOEd6FvYWv6r6b0nFmOJ7wOxxVuK+M4Fhl7SGzzPBU1eEoItwzhjOVhu6/H8N9r20wgXwzhnuVf166TA0rxrUKyQ2ZD0pbSJwaTrhLOVSSM/xQHAOSnr73W5ivpQelYfwKzvTY+y0Esumjv0/xPsHZ9X8LwV0whluVBQj34Lz02tdn5Ial3FV5siA7mPo9Dkd/oS67Iu1N3U30lw7031WkkBFjGLnqxqUzBzhLU3sgGREzKIvmJBkdwmKAZpiEuCtrqCqcks+kMcDJU/Lhwi8f5RRXRH6XRck5be1wGSDQQOHpImE3IS6VWBTqk9tcYzJuGwQaFjcT7A7Xytm2qpYUVF4Qn55u4bpXLRbeIu35esRlPeMrhvuKC0brv21DPXsxkG1ZsYpOc96DQUPcjpCUTu8thsP9EhfPbEMgL49uCGQhLqDZhkA+Ht0QwstIXEajDcF3N4itPSYbJqPHq7hXM9owec4g/kawH9Rww/Q+kuNitp5HY5ZHMkzwQ0K8+DK5c/lkFB/BMIVS6t0JLg9omMObWENraA2HxhqmWENrOCzWMMVsQ8qO2qpmE9+rxQwwZNPPzPkvOVFTrn0XHA2l7PrMK/f9EcGkGeq74HhyxecufaMeQlBnQzatB3c5RW5Fh4GGYW4ydVl+v4h8LTBA0ZH4R7aco/KCDVRfobNhYSl4ab0Bea1yMsYwt0TTcb4JG08pVlBnQ+rmizqL7zWVhvnFHIYalhraON10EoYhIWSBzSmotyGNSykud0/7xf55i04LqbkhkDexgNmGFJdVz2BD8Mr19MEMwT2KFcw2BIJLcGmwIWSL0x7ZEMIlvu8z0xB81GSFyYZJp/HBX8+wM3oWI0dw39XL+h3Mnmsr4JJ4NfqLOdPRBoj7UIY/L/uDr8Xm++l79fblkvQ548EMIV34G2ab12+Ti49nWMQaWkP9sYbWUH+soTXUH2toDfXHGlpD/bGG1lB/rKE11B9raA31xxpaQ/2xhtZQf6yhNdQfa2gNFULlJC7T1jAg8SWuzFDWAF0NyXk3dqaj1+6ZBDU1vO8j6J6TUk9DJjdU5yTbWhoGS+bLzx0zeetoSEN2Oex42S3RtY6GhbPC190ORNHQsJSgrVseaP0Mg2NpVXqn7LPaGdLi+UAphw7RRjvDQiPMGF/a59fVzbAiS+K8fa5rtYY/GXGbZFkOPiu2hrSPNkoNyXG13a4u+MLle8IcraONSsPfz16hc+JzG+GNttFGoeHfLhZsOvXaVKXTlmMbdYZscV9Qf39OT8gyb3c8gjLDXHHHmFBIXUGOjnbRRpUhDXIxA1O4ukaYsWqjqMqwWFxxPcXkC27zyK/IsFTcKBZ0i8ESsUlyysntMYxh7hE2Q3DoFnVRWyRbRBslhvnUPzdea+upuBFmND/SR4khf/RcF0/RSbubRxsVhhXFramn/gQr2DzaKDDkNMJb2arqKfeZsIppwycp+YbUrypuZTzFNsKMhk9S8g1riltRT/GNMKPZ2Ea6YW2qEe7zgV9VqytpFG1kGwa1OSp48bRRI7zRJNpINqRBffIwTj1t1ghvNDgSVbKhMElhqZ42bYQZFTkS1RuK8/1EkC8aajjKAR9tpBq6J/Fn5etpm0aY8Y1VlGmIy+B3Zt/rtmqEGdhoI9MQdzgTe8xfu0Z4AxltJBqSvfiTUv7qqWBiRsDcR83EyjPEn8z0G08LMx2N2aEeFqUZUg99ulbk3TJWtG+EGahoI82wyQlp2fwp/qyqSg6YCS5JhthGmJHG0/rxHRLELLEkQxd56tSNiNLqh6wmzEEYbeQYUsAfcffDO+ncCDPE8zZyDJs0woyP7o0wQxhtpBji8i3niDqmkPtDNLaRYdiwEUpmeqyPNhIMc6nfB2AOtR2/BENJMaM99a8nuxt6DeY6FXGtu4ndDYvHEg/Aoa4ldjcMZeTx7UbtseHdDQPOqcQ986H2HnLSTffMuDaYyoil38od6qkf1sjoD2Wkm+7Arn79qYwxDSWr4SrqWLQeSdLIm55fhuFMhSNv1MnjV5EiDdxhCIRTNaghFyyl7M8ZBtxpSOf2C1gHh2AOhIZNxz0PQ0IwURAEi2F0hsYIQQcicw1xw2ZwjsY2RNwUErRbFagDlKImhMCZd9uZMxzIM1rAcf6ZGU2RCwJTw5ZLkIcG+4IyMXTeTGyJ1EdOA6aGTmxgOEUfevFjyDmYTnfQx65lhhI2HfeMu0Q/tmaG3bYB9k9wxc/F3wwTRYMqanhp8LLh19B5IsaEG3JqMrNyN3RGsRm30Sf7Rq/vgPn3nug/gPPJEvPYW2HozBeh1nWVuuTY+OwnyP93/n38O8ZFJ6jnEuK97Jq/X4bST6LZ5rwUzsD1THw5LZ5HrV6f/wfTJZb5yZnqUQAAAABJRU5ErkJggg==">

                    <div class="item-details">
                        <h4 class="item-price"><?php echo $pr['precioUnidad'];?></h4>
                        <h4 class="item-desc"><?php echo $pr['descripcionProducto'];?></h4>
                        <h4 class="item-cat"><?php echo $pr['nombreCategoria'];?></h4>

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

            
<!-- END SECTION STORE -->
    
        <div class="shopping-cart-items shoppingCartItemsContainer">
        </div>
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