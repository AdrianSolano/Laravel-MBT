document.addEventListener('DOMContentLoaded', function () {
/* Se recogen los inputs y el formulario */
    let inputName = document.getElementById('nameEvent');
    inputName.addEventListener('change', function (event) {
        validarInput(event.target);
    });

    let inputYear = document.getElementById('year');
    inputYear.addEventListener('change', function (event) {
        validarInput(event.target);
    });

    let inputDesc = document.getElementById('description');
    inputDesc.addEventListener('change', function (event) {
        validarInput(event.target);
    });

    let form = document.getElementById('form');
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        validarFormulario(event.target);
    });

    spinnerHide();

})
/* Con esta funcion validamos los campos */
function validarInput(input) {
    let datosPost = {};

    datosPost[input.name] = input.value;
    spinnerShow()
    axios.post('/event/crearEventoAjax', datosPost)
        .then(function (response) {
            spinnerShow();
            tieneErrores(input, response.data[input.name]);
        }).catch(function (error) {
            $('#modalError').modal('show');
            console.log(error);
        }).then(function () {
            spinnerHide();
        });
}
/* Esta funcion comprueba los campos y cambia las clases  para mostrar los errores */
function tieneErrores(input,errores){
    let hayErrores = false;
    let divErrores = $(input).next();
    divErrores.html("");
    $(input).removeClass("is-invalid is-valid");

    if (errores === undefined || errores.length === 0) {
        $(input).addClass("is-valid");
    } else {
        hayErrores = true;
        $(input).addClass("is-invalid");
        for (let error of errores) {
            divErrores.append(`<div class="alert alert-danger">${error}</div>`);
        }
    }
    return hayErrores;
}


function spinnerHide() {
    $("#spinner").hide();
}

function spinnerShow() {
    $("#spinner").show();
};
