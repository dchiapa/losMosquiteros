let contenedor = document.getElementById('carousel-inner');
let imagenes = document.getElementsByClassName('carousel-item');
let cuenta = 0;

for (let i = 0; i < imagenes.length; i++) {
    if (imagenes[i].classList.contains('active') == true) {
        cuenta++;
    }
}

if (cuenta == 0) {
    contenedor.firstChild.nextSibling.classList.add('active');
}