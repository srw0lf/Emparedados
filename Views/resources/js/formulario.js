jQuery(document).on('submit', '#form_insert', function(event){
        jQuery.ajax({
                url: 'Controllers/Factura/insert.php',
                type: 'POST',
                dataType: 'json',
                data: $(this).serialize(),
        }).done(function(respuesta){
                console.log(respuesta);
                if (!respuesta.error) {
                        alert('Los datos se ingresaron con exito');
                }else {
                        alert('Los datos NOse han ingresado');
                }
        }).fail(function(resp){
                console.log(resp.responseText);
        }).always(function(){
                console.log("complete");
        })
})