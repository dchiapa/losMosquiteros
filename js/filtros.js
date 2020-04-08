let ambientes = document.getElementsByClassName('ambientes');
let baños = document.getElementsByClassName('baños');
let dormitorios = document.getElementsByClassName('dormitorios');
let input;
let ambiente, baño, dormitorio;

for (let i = 0; i < ambientes.length; i++) {
    ambiente = ambientes[i].addEventListener('click', seleccionAmbientes);
}
for (let i = 0; i < baños.length; i++) {
    baño = baños[i].addEventListener('click', seleccionBaños);
}
for (let i = 0; i < dormitorios.length; i++) {
    dormitorio = dormitorios[i].addEventListener('click', seleccionDormitorios);
}

function seleccionAmbientes(e) {
    input = document.getElementById('ambientes');
    for (let i = 0; i < ambientes.length; i++) {
        ambientes[i].classList.replace('btn-success', 'btn-secondary');
    }
    ambiente = e.target;
    ambiente.classList.replace('btn-secondary', 'btn-success');
    input.value = ambiente.firstChild.data;
    console.log(input);
}
function seleccionBaños(e) {
    input = document.getElementById('proBaños');
    for (let i = 0; i < baños.length; i++) {
        baños[i].classList.replace('btn-success', 'btn-secondary');
        
        
    }
    baño = e.target;
    baño.classList.replace('btn-secondary', 'btn-success');
    input.value = baño.firstChild.data;
    console.log(input);
}
function seleccionDormitorios(e) {
    input = document.getElementById('proDormitorios');
    for (let i = 0; i < dormitorios.length; i++) {
        dormitorios[i].classList.replace('btn-success', 'btn-secondary');
    }
    dormitorio = e.target;
    dormitorio.classList.replace('btn-secondary', 'btn-success');
    input.value = dormitorio.firstChild.data;
    console.log(input);
}

