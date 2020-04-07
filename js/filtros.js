document.getElementById('btnLimpiar').addEventListener('click', limpiarFiltros);
let filtros = document.getElementsByClassName('desFiltro');
let botones = document.getElementsByClassName('btnFiltro');
let valores = '';
let boton, filtro , padre;
let url;

for (let i = 0; i < botones.length; i++) {
    boton = botones[i].addEventListener('click', seleccionarFiltro);
    
}
for (let i = 0; i < filtros.length; i++) {
    filtro = filtros[i].addEventListener('click', extenderFiltros);
    
}

function seleccionarFiltro(e) {
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
function extenderFiltros(e){
    padre = e.target.parentNode
    if(e.target.textContent == '▼'){
        e.target.textContent = '▲';
        padre.lastChild.previousSibling.classList.replace('d-none', 'd-inline');
    }
    else{
        e.target.textContent = '▼';
        padre.lastChild.previousSibling.classList.replace('d-inline', 'd-none');
    }
    

     console.log(padre.lastChild.previousSibling)
}