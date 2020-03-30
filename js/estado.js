let input = document.getElementById('idEstado');
let botones = document.getElementsByClassName('btnEstado');
let boton;

for (let i = 0; i < botones.length; i++) {
    boton = botones[i].addEventListener('click', botonApretado);

}

function botonApretado(e) {
    boton = e.target.value;
    input.value = boton;
}