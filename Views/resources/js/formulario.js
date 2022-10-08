let btn=document.querySelector('.boton')

const eliminar=document.querySelector('.eliminar')

let ubicacion=document.querySelector('.redirect').value

function borrar(e,cod){
	e.preventDefault();

	Swal.fire({
	  title: 'Esta seguro de eliminar este registro?',
	  text: "Esta accion no se puede reversar!",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Si, Borralo!',
	  cancelButtonText: "No, Cancelar!",
	}).then((result) => {
	  if (result.isConfirmed) 
		 {
			ruta=`../../../Controllers/${ubicacion}/delete.php?id=+${cod}`;
			console.log(ruta);
			window.setTimeout(function(){window.location.href = ruta},2000);
			Swal.fire({
			  position: 'top-end',
			  icon: 'success',
			  title: 'El registro ha sido borrado',
			  showConfirmButton: false,
			  timer: 1500
			})

          } else {
                  Swal.fire(
						'Cancelado', 
						'Cancelaste la eliminacion',
						'error');
                 }
	  
	});
	
	
};

const editar=document.getElementById('editar')

function alertaEdit() {
  Swal.fire({
      title: 'Estas seguro de guardar los cambios realizados?',
      showDenyButton: true,
      confirmButtonText: 'Guardar',
      denyButtonText: `No, guardar`,
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
          Swal.fire('Saved!', '', 'success')

          setTimeout(() => {
            editar.submit()
                        
          }, 2000);


        } else if (result.isDenied) {
          Swal.fire('Changes are not saved', '', 'info')
                  
          setTimeout(() => {
            if (ubicacion=='producto') {
              window.location=`../../templates/${ubicacion}/listAdm.php`
            }else{
              window.location=`../../templates/${ubicacion}/list.php`
            }
          }, 2000);
        }
    })       
}

function VerContra() {
  let x=document.getElementById('contraseña')
  
  // alert('hola')
  
  if (x.type==="password") {
      x.type="text"
  }else{
      x.type="password"
  }
}

for (let index = 0; index < 3; index++) {

  hola 
  
}

