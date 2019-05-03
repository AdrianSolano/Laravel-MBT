document.addEventListener('DOMContentLoaded', function () {
    let searchForm = document.getElementById('searchForm');
    searchForm.addEventListener('submit', function (event) {
        event.preventDefault();
        busquedaAjax();
        spinnerShow();
    });

    let inputBusqueda = document.getElementById('busqueda');
    inputBusqueda.addEventListener('change', function (event){
        busquedaAjax();
        spinnerShow();
    });

    let selectForm = document.getElementById('selectBusqueda');
    selectForm.addEventListener('change', function (event) {
        busquedaAjax();
        spinnerShow();
    });

    let checkForm = document.getElementById('checkBox');
    checkForm.addEventListener('change', function (event) {
        busquedaAjax();
        spinnerShow();
    });

    let botonBuscar = $('#botonBuscar');
    botonBuscar.click(function () {
        busquedaAjax();
        spinnerShow();
    });
    spinnerHide()
});

function spinnerHide() {
    $("#spinner").hide();
}

function spinnerShow() {
    $("#spinner").show();
};

function busquedaAjax() {

    let searchForm = $("#searchForm").serialize();
    $('#busqueda').val();
    axios.post('/tanks/searchAjax', searchForm)
        .then(function (response) {
            let divMostrarBusqueda = $("#mostrarBusqueda");

            divMostrarBusqueda.empty();
            divMostrarBusqueda.html(response.data);
            console.log(response);
            spinnerShow();
        }).catch(function (error) {
            $('#modalError').modal('show');
            console.log(error);
        }).then(function (response) {
            spinnerHide()
        });
}
function checkBox(){
    $('#terms').is(":checked");
}