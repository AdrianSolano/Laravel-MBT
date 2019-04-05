document.addEventListener('DOMContentLoaded', function () {

    $('#formulario').submit(function (event) {
        event.preventDefault();
        validarTodoFormulario();
    });

    $('#name').change(function (event) {
        comprobarNombre();
    });

    $('#email').change(function (event) {
        comprobarEmail();
    });

    $('#password').change(function (event) {
        comprobarContraseña();
    });

    $('#password-confirm').change(function (event) {
        comprobarContraseñaConfirmar();
    });

    $('#gender').change(function (event) {
        comprobarGenero();
    });

    $('#age').change(function (event) {
        comprobarAge();
    });

    $('#terms').change(function (event) {
        comprobarCheck();
    });

});

function comprobarNombre() {
    let esCorrecto = true;
    let error = [];
    let expresion = /^[a-zA-Z0-9]+$/g;
    let valorNombre = $('#name').val();
    $('#name').removeClass('is-valid is-invalid');
    $("#erroresNombre").empty();
    if (!expresion.test(valorNombre)) {
        error.push("El nombre no permite caracteres como !#@%&-");
        esCorrecto = false;
        $('#name').addClass('is-invalid');
    } else {
        $('#name').addClass('is-valid');
    };
    error.forEach(x => $("#erroresNombre").append(x));
    return esCorrecto;
};

function comprobarEmail() {
    let esCorrecto = true;
    let error = [];
    let expresion = /[\w|.|-]*@\w*\.[\w|.]*/g;
    let valorEmail = $('#email').val();
    $('#email').removeClass('is-valid is-invalid');
    $("#erroresEmail").empty();
    if (!expresion.test(valorEmail)) {
        error.push("El email no permite caracteres como !#%&- seleccione un email valido");
        esCorrecto = false;
        $('#email').addClass('is-invalid');
    } else {
        $('#email').addClass('is-valid');
    };
    error.forEach(x => $("#erroresEmail").append(x));
    return esCorrecto;
};

function comprobarContraseña() {
    let esCorrecto = true;
    let error = [];
    let expresion = /^[a-zA-Z0-9].{8,}$/g;
    let valorContraseña = $('#password').val();
    $('#password').removeClass('is-valid is-invalid');
    $("#erroresPass").empty();
    if (!expresion.test(valorContraseña)) {
        error.push("La contraseña no permite caracteres como !#@%& y mayor a 8 letras/numeros");
        esCorrecto = false;
        $('#password').addClass('is-invalid');
    } else {
        $('#password').addClass('is-valid');
    };
    error.forEach(x => $("#erroresPass").append(x));
    return esCorrecto;
};

function comprobarContraseñaConfirmar() {
    let esCorrecto = true;
    let error = [];
    let valorContraseña = $('#password').val();
    let valorContraseñaConfirmar = $('password-confirm').val();
    $('#password-confirm').removeClass('is-valid is-invalid');
    $("#erroresPassConfirm").empty();
    if (!valorContraseñaConfirmar === valorContraseña) {
        error.push('Las contraseñas no coinciden');
        esCorrecto = false;
        $('#password-confirm').addClass('is-invalid');
    } else {
        $('#password-confirm').addClass('is-valid');
    };
    error.forEach(x => $("#erroresPassConfirm").append(x));
    return esCorrecto;
};

function comprobarGenero() {
    let esCorrecto = true;
    let error = [];
    let valorGenero = $('#gender').val();
    $('#gender').removeClass('is-valid is-invalid');
    $("#erroresGender").empty();
    if (valorGenero === "#") {
        error.push("Debe selecionar un genero");
        esCorrecto = false;
        $('#gender').addClass('is-invalid');
    } else {
        $('#gender').addClass('is-valid');
    };
    error.forEach(x => $("#erroresGender").append(x));
    return esCorrecto;
};

function comprobarAge() {
    let esCorrecto = true;
    let error = [];
    let valorAge = $('#age').val();
    $('#age').removeClass('is-valid is-invalid');
    $("#erroresAge").empty();
    if (valorAge < 18) {
        error.push("Debe de ser mayor o igual que 18");
        esCorrecto = false;
        $('#age').addClass('is-invalid');
    } else {
        $('#age').addClass('is-valid');
    };
    error.forEach(x => $("#erroresAge").append(x));
    return esCorrecto;
};


function comprobarCheck() {
    let esCorrecto = true;
    let error = [];
    let valorCheck = $('#terms').is(":checked");
    $('#terms').removeClass('is-valid is-invalid');
    $("#erroresTerms").empty();
    if (!valorCheck) {
        error.push("Acepte los terminos");
        esCorrecto = false;
        $('#terms').addClass('is-invalid');
    } else {
        $('#terms').addClass('is-valid');
    }
    error.forEach(x => $("#erroresTerms").append(x));
    return esCorrecto;
};

function validarTodoFormulario() {
    let esNombreCorrecto = comprobarNombre();
    let esEmailCorrecto = comprobarEmail();
    let esContraseñaCorrecto = comprobarContraseña();
    let esContraseñaConfirmadaCorrecto = comprobarContraseñaConfirmar();
    let esGeneroCorrecto = comprobarGenero();
    let esCheckBoxCorrecto = comprobarCheck();
    let esAgeCorrecto = comprobarAge();

    if (esNombreCorrecto && esEmailCorrecto && esContraseñaCorrecto && esContraseñaConfirmadaCorrecto && esGeneroCorrecto && esCheckBoxCorrecto && esAgeCorrecto) {
        let formulario = document.getElementById("formulario");
        formulario.submit();
    } else {
        $('#modal').modal('toggle');
    }

}

