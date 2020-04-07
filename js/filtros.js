let ambientes = document.getElementsByClassName('ambientes');
let input = document.getElementById('ambientes');
let ambiente;

for (let i = 0; i < ambientes.length; i++) {
    ambiente = ambientes[i].addEventListener('click', seleccionAmbientes);
}

function seleccionAmbientes(e) {
    for (let i = 0; i < ambientes.length; i++) {
        ambiente = ambientes[i].classList.replace('btn-success', 'btn-secondary');
    }
    ambiente = e.target;
    ambiente.classList.replace('btn-secondary', 'btn-success');
    input.value = ambiente.firstChild.data;
    console.log(input);
}

