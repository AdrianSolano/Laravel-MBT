document.addEventListener('DOMContentLoaded', function () {
    let formulario = document.getElementById('formulario');
    formulario.addEventListener('submit', function (event) {
        event.preventDefault();
        crearTanqueAjax();
        despuesDeCrearAlerta();
    });


});
/* "Crear" con ajax */
function crearTanqueAjax() {

    let editForm = $("#formulario").serialize();
    $('#modal').modal('show');
    axios.post('/tanks/crearTanqueAjax', editForm)
        .then(function (response) {
            console.log(response);
            $('#formulario').trigger("reset");
        }).catch(function (error) {
            console.log(error);
            $('#modalError').modal('show');
            $('#modal').modal('hide');
        }).then(function(){
            $('#modal').modal('hide');
        })

}
/* lanza una alerta dentro del modal */
function despuesDeCrearAlerta() {

    let editForm = $('#formulario').serialize();
    axios.post('/tanks/crearTanqueAjax', editForm)
        .then(function (response) {
            if ($('#alert').hasClass('hide')) {
                $('#alert').removeClass('hide')
                $('#alert').addClass('show');
            };
            $('#modalCrear').modal('show')
            console.log(response);
        }).catch(function (error) {
            console.log(error);
        }).then(function(){
            $('#alert').modal('hide');
        })
}
