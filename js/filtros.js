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
    ambiente = e.target;
    if (ambiente.classList.contains('activo')) {
        ambiente.classList.replace('btn-success', 'btn-secondary');
        ambiente.classList.remove('activo');
        input.value = 0;
    } else {
        for (let i = 0; i < ambientes.length; i++) {
            ambientes[i].classList.replace('btn-success', 'btn-secondary');
            ambientes[i].classList.remove('activo');
        }
        ambiente.classList.add('activo');
        ambiente.classList.replace('btn-secondary', 'btn-success' );
        input.value = ambiente.value;
    }
}

function seleccionBaños(e) {
    input = document.getElementById('proBaños');
    baño = e.target;
    if (baño.classList.contains('activo')) {
        baño.classList.replace('btn-success', 'btn-secondary');
        baño.classList.remove('activo');
        input.value = 0;
    } else {
        for (let i = 0; i < Baños.length; i++) {
            Baños[i].classList.replace('btn-success', 'btn-secondary');
            Baños[i].classList.remove('activo');
        }
        baño.classList.add('activo');
        baño.classList.replace('btn-secondary', 'btn-success' );
        input.value = baño.value;
    }
}

function seleccionDormitorios(e) {
    input = document.getElementById('proDormitorios');
    dormitorio = e.target;
    if (dormitorio.classList.contains('activo')) {
        dormitorio.classList.replace('btn-success', 'btn-secondary');
        dormitorio.classList.remove('activo');
        input.value = 0;
    } else {
        for (let i = 0; i < dormitorios.length; i++) {
            dormitorios[i].classList.replace('btn-success', 'btn-secondary');
            dormitorios[i].classList.remove('activo');
        }
        dormitorio.classList.add('activo');
        dormitorio.classList.replace('btn-secondary', 'btn-success' );
        input.value = dormitorio.value;
    }
}









