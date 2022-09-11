function Calcular() {
    let Precio=parseInt(document.getElementById('precio').value)
    let Cantidad=parseInt(document.getElementById('cantidad').value) 

    let subtotal=Precio*Cantidad;

    console.log(`El numero es ${subtotal}`)
}