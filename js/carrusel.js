let contenedor = document.getElementById('carousel-inner');
let items = document.getElementsByClassName('carousel-item');
let imagenes = document.getElementsByClassName('carousel-img');
let cuenta = 0;
let alto, ancho;

for (let i = 0; i < items.length; i++) {
    if (items[i].classList.contains('active') == true) {
        cuenta++;
        
    }
}


if (cuenta == 0) {
    contenedor.firstChild.nextSibling.classList.add('active');
}
for (let i = 0; i < imagenes.length; i++) {
    alto = imagenes[i].naturalHeight;
    ancho = imagenes[i].naturalWidth;
    if (alto < ancho) {
        imagenes[i].classList.add('img2');
        imagenes[i].classList.remove('img1');
    } else {
        imagenes[i].classList.add('img1');
        imagenes[i].classList.remove('img2');
    }
}
console.log(alto);
console.log(ancho);