// Lee un elemento a traves del id
// como los id son unicos trae el unico elemento
let input = document.getElementById('idEstado');
// Lee un elemento a traves de la clase
// como las clases se pueden repetir trae todas en forma de array
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
    botones = document.getElementsByClassName('activo');
    // Recorre el array 
    for (let i = 0; i < botones.length; i++) {
        // Reemplaza la clase btn-success por btn-scondary
        boton = botones[i].classList.replace('btn-success', 'btn-secondary');
        // Elimina la clase activo
        boton = botones[i].classList.remove('activo');
    }
    // Selecciona el boton en el cual se hizo click
    boton = e.target;
    // Agraga la clase activo
    boton.classList.add('activo');
    // Reemplaza la clase btn-scondary por btn-success
    boton.classList.replace('btn-secondary', 'btn-success');
    input.value = boton.value;
}