document.addEventListener('DOMContentLoaded', function () {
    let formulario = document.getElementById('formulario');
    formulario.addEventListener('submit', function (event) {
        event.preventDefault();
        crearTanqueAjax();
        mostrarModal();
    });


});
function crearTanqueAjax() {

    let editForm = $("#formulario").serialize();
    if ( $('#modal').modal('show'));
    axios.post('/tanks/crearTanqueAjax', editForm)
        .then(function (response) {
            $('#modal').modal('hide');
            alert(response.data);
            console.log(response);
            /* //alert("Create done"); */
        }).catch(function (error) {
            $('#modal').modal('hide');
            console.log(error);
            alert("Creatn't");
        })

}