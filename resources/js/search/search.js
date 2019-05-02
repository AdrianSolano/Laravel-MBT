document.addEventListener('DOMContentLoaded', function () {
    let searchForm = document.getElementById('searchForm');
    searchForm.addEventListener('submit', function (event) {
        event.preventDefault();
        busquedaAjax();
    });

    let selectForm = document.getElementById('selectBusqueda');
    selectForm.addEventListener('change', function (event) {

    });

    let checkForm = document.getElementById('selectBusqueda');
    checkForm.addEventListener('change', function (event) {
        
    });
});

function busquedaAjax() {

    let searchForm = $("#searchForm").serialize();
    axios.post('/tanks/searchAjax', searchForm)
        .then(function (response) {
            console.log(response);
        }).catch(function (error) {
            console.log(error);
        })
}