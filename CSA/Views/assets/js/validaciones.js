function validarInput(input) {
    var valor = input.value;
    valor = valor.replace(/[^0-9kK]/g, '');
    input.value = valor;
}

function validarLetras(input) {
    var valor = input.value;
    valor = valor.replace(/[^a-zA-Z]/g, '');
    input.value = valor;
}

function validarNumber(input) {
    var valor = input.value;
    valor = valor.replace(/[^0-9]/g, '');
    input.value = valor;
}

function validarNumberAltura(input, maxLength) {
    var valor = input.value;
    valor = valor.replace(/[^0-9]/g, '');
    input.value = valor;

    if (input.value.length > maxLength) {
    input.value = input.value.slice(0, maxLength);
    }
}

function validarNumberDistancia(input, maxLength) {
    var valor = input.value;
    valor = valor.replace(/[^0-9]/g, '');
    input.value = valor;

    if (input.value.length > maxLength) {
    input.value = input.value.slice(0, maxLength);
    }
}