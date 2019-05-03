document.addEventListener('DOMContentLoaded', function () {
    let searchForm = document.getElementById('searchForm');
    searchForm.addEventListener('submit', function (event) {
        event.preventDefault();
        busquedaAjax();
    });

    let selectForm = document.getElementById('selectBusqueda');
    selectForm.addEventListener('change', function (event) {
        busquedaAjax();
    });

    let checkForm = document.getElementById('checkBox');
    checkForm.addEventListener('change', function (event) {
        busquedaAjax();
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
            let tanks = response.data;
            divMostrarBusqueda.empty();
            divMostrarBusqueda.html(tanks);
            console.log(response);
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