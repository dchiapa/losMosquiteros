/*   Imagenes en el listado de propiedades   */
let ppalImagenes = document.getElementsByClassName('imgPpal');

for (let i = 0; i < imagenes.length; i++) {
    alto = ppalImagenes[i].naturalHeight;
    ancho = ppalImagenes[i].naturalWidth;
    if (alto < ancho) {
        ppalImagenes[i].classList.add('img4');
        ppalImagenes[i].classList.remove('img3');
    } else {
        ppalImagenes[i].classList.add('img3');
        ppalImagenes[i].classList.remove('img4');
    }
}
/*   -Imagenes del carrusel en el listado de propiedades-   */
