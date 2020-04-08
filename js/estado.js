// Lee un elemento a traves del id
// como los id son unicos trae el unico elemento
let input = document.getElementById('idEstado');
// Lee un elemento a traves de la class
// como las class se pueden repetir trae todas en forma de array
let botones = document.getElementsByClassName('btnEstado');
// Declaración de una variable
let boton;
// Recorre el array
for (let i = 0; i < botones.length; i++) {
    // escucha el evento click en los botones
    // Si se hace click en algun boton, ejecuta la funcion boton apretado
    boton = botones[i].addEventListener('click', botonApretado);

}
// e es una variable que tiene todos los datos del evento escuchado
function botonApretado(e) {
    // Selecciona el boton en el cual se hizo click
    boton = e.target;
    // Si el boton apretado contiene la class activo
    if (boton.classList.contains('activo')) {
        // Reemplaza la class btn-success por btn-scondary
        boton.classList.replace('btn-success', 'btn-secondary');
        // Elimina la class activo
        boton.classList.remove('activo');
        // pone en el input el valor 0
        input.value = 0;
    } else {
        for (let i = 0; i < botones.length; i++) {
            botones[i].classList.replace('btn-success', 'btn-secondary');
            botones[i].classList.remove('activo');
        }
        // Agrega la class activo
        boton.classList.add('activo');
        boton.classList.replace('btn-secondary', 'btn-success' );
        input.value = boton.value;
    }
    // Con console.log(); podes ver los valores en la consola del browser
    // Por EJ console.log(input); te va a mostrar el input hidden
}