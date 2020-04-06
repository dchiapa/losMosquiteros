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
    if((botones[0] !== undefined) && (botones[1] !== undefined) && (botones[2] !== undefined))
    {
        url = 'listadoDePropiedades.php?idBarrio=' + botones[0].value + '&idEstado=' + botones[1].value + '&idTipo=' + botones[2].value ;
    }else if((botones[0] !== undefined) && (botones[1] !== undefined) && (botones[2] == undefined))
    {
        url = 'listadoDePropiedades.php?idBarrio=' + botones[0].value + '&idEstado=' + botones[1].value + '&idTipo=0';
    }else if((botones[0] !== undefined) && (botones[1] == undefined) && (botones[2] == undefined))
    {
        url = 'listadoDePropiedades.php?idBarrio=' + botones[0].value + '&idEstado=0&idTipo=0';
    }else{
        url = 'listadoDePropiedades.php?idBarrio=0&idEstado=0&idTipo=0';
    }
     location.href = url;
}
function limpiarFiltros(){
    url = 'listadoDePropiedades.php?idBarrio=0&idEstado=0&idTipo=0';
    location.href = url;
}