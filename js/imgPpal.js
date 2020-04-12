let imagenes = document.getElementsByClassName('imgPpal');
let alto, ancho;
for (let i = 0; i < imagenes.length; i++) {
    alto = imagenes[i].naturalHeight;
    ancho = imagenes[i].naturalWidth;
    if (alto < ancho) {
        imagenes[i].classList.add('img4');
        imagenes[i].classList.remove('img3');
    } else {
        imagenes[i].classList.add('img3');
        imagenes[i].classList.remove('img4');
    }
}


