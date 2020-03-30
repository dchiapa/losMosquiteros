let input = document.getElementById('idEstado');
let botones = document.getElementsByClassName('btnEstado');
let boton;

for (let i = 0; i < botones.length; i++) {
    boton = botones[i].addEventListener('click', botonApretado);

}

function botonApretado(e) {
    botones = document.getElementsByClassName('activo');
    for (let i = 0; i < botones.length; i++) {
        boton = botones[i].classList.replace('btn-secondary', 'btn-info');
        boton = botones[i].classList.remove('activo');
    }
    boton = e.target;
    boton.classList.add('activo');
    boton.classList.replace('btn-info', 'btn-secondary');
    input.value = boton.value;
}