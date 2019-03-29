document.addEventListener('DOMContentLoaded', function () {
    let formulario = document.getElementById('formulario');
    formulario.addEventListener('submit', function (event) {
        event.preventDefault();
        crearTanqueAjax();
    });


});
function crearTanqueAjax() {

    let editForm = $("#formulario").serialize();
    axios.post('/tanks/crearTanqueAjax', editForm)
        .then(function (response) {
            console.log(response);
            alert("Create done");
        }).catch(function (error) {
            console.log(error);
            alert("Creatn't");
        });

}