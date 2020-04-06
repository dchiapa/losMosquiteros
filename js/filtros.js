document.getElementById('btnLimpiar').addEventListener('click', limpiarFiltros);
let botones = document.getElementsByClassName('btnFiltro');
let valores = '';
let boton;
let url;

for (let i = 0; i < botones.length; i++) {
    boton = botones[i].addEventListener('click', botonApretado);
    
}
function botonApretado(e) {
    boton = e.target;
    boton.value = 0;
    url = 'listadoDePropiedades.php?idBarrio=' + botones[0].value + '&idEstado=' + botones[1].value + '&idTipo=' + botones[2].value ;
    location.href = url;
}
function limpiarFiltros(){
    url = 'listadoDePropiedades.php?idBarrio=0&idEstado=0&idTipo=0';
    location.href = url;
}