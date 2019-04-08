document.addEventListener('DOMContentLoaded', function () {
    let formulario = document.getElementById('formulario');
    formulario.addEventListener('submit', function (event) {
        event.preventDefault();
        eliminarTanqueAjax();
        despuesDeEliminarAlerta()
    });

});

function alertaModel() {
    $("form[data-accion='deletus']").on('submit', function (event) {
        event.preventDefault()
        alert('hola');
    })
};

function eliminarTanqueAjax() {

    let datosFormulario = $("formulario").serialize();
    let idTank = $("#formulario").attr("data-tank");

    $('#modalEliminar').modal('show');
    axios.post(`/tanks/eliminarTanqueAjax/${idTank}`, datosFormulario)
        .then(function (response) {
            if ($('#deletus').click(function() {
                if ($('#alert').hasClass('hide')) {
                    $('#alert').removeClass('hide')
                    $('#alert').addClass('show');
                }
            }));
            console.log(response)
        }).catch(function (error) {
            console.log(error)
            $('#modalError').modal('show');
            $('#modalEliminar').modal('hide');
        }).then(function () {
            $('#alert').modal('hide');
            $('#modalEliminar').modal('hide');
        });
}

