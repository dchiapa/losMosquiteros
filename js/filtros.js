let ambientes = document.getElementsByClassName('ambientes');
let input = document.getElementById('ambientes');
let ambiente;
let mensaje = '';
for (let i = 0; i < ambientes.length; i++) {
    ambiente = ambientes[i].addEventListener('click', seleccionAmbientes);
}

function seleccionAmbientes(e) {
    ambiente = e.target;
    if (ambiente.checked) {
        
        mensaje = mensaje + ambiente.value + ',';
    }else{
        mensaje.replace(ambiente.value, '0');
    }
    
    input.value = mensaje;
console.log(input);    
}

