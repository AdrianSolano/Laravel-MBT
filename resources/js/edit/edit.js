document.addEventListener('DOMContentLoaded', function () {
    let formulario = document.getElementById('formulario');
    formulario.addEventListener('submit', function (event) {
        event.preventDefault();
        editAjax();
        despuesDeEditarAlerta();
    });

});

/* Edicion mediante ajax */
function editAjax() {

    let editForm = $("#formulario").serialize();
    let idTank = $("#formulario").attr("data-tank");

    $('#modal').modal('show');
    axios.put(`/tanks/editAjax/${idTank}`, editForm)
        .then(function (response) {
            console.log(response);
        }).catch(function (error) {
            console.log(error);
            $('#modalError').modal('show');
        }).then(function(){
            $('#modal').modal('hide');
            $('#modalError').modal('hide');
        })

}
/* lanza una alerta dentro del modal */
function despuesDeEditarAlerta() {

    let editForm = $('#formulario').serialize();
    let idTank = $("#formulario").attr("data-tank");

    axios.put(`/tanks/editAjax/${idTank}`, editForm)
        .then(function (response) {
            if ($('#alert').hasClass('hide')) {
                $('#alert').removeClass('hide')
                $('#alert').addClass('show');
            };
            $('#modalEditar').modal('show')
            console.log(response);
        }).catch(function (error) {
            console.log(error);
        }).then(function(){
            $('#alert').modal('hide');
        })
}
