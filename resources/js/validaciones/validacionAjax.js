document.addEventListener('DOMContentLoaded', function () {

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
function validarInput(input) {
    let datosPost = {};

    datosPost[input.name] = input.value;
    spinnerShow()
    axios.post('/event/crearEventoAjax', datosPost)
        .then(function (response) {
            spinnerShow();
            errores(input, response.data[input.name]);
        }).catch(function (error) {
            $('#modalError').modal('show');
            console.log(error);
        }).then(function () {
            spinnerHide();
        });
}


function spinnerHide() {
    $("#spinner").hide();
}

function spinnerShow() {
    $("#spinner").show();
};
