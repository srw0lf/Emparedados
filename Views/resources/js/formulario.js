let btn=document.querySelector('.boton')

const eliminar=document.getElementById('eliminar')

function alerta() {

        const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                  confirmButton: 'btn btn-success',
                  cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
              })
              
              swalWithBootstrapButtons.fire({
                title: 'Esta seguro de eliminar este registro?',
                text: "Recuerda que esta accion es irrevercible!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, eliminalo',
                cancelButtonText: 'No, cancelalo!',
                reverseButtons: true
              }).then((result) => {
                if (result.isConfirmed) {
                  swalWithBootstrapButtons.fire(
                    'Elimidado!',
                    'Este registro ha sido eliminado.',
                    'success'
                  )

                  setTimeout(() => {
                        eliminar.submit()
                        
                  }, 2000);

                } else if (
                  /* Read more about handling dismissals below */
                  result.dismiss === Swal.DismissReason.cancel
                ) {
                  swalWithBootstrapButtons.fire(
                    'Cancelado',
                    'Esta accion ha sido cancelada',
                    'error'
                  )
                }
              })     
}

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
                        window.location='../../templates/Usuario/list.php'
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

