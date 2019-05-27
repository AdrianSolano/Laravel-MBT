document.addEventListener('DOMContentLoaded', function () {
    $("button[data-accion='delete']").click(function (event) {
        let idTank = $(event.target).attr('data-tank');
        event.preventDefault();
        $('#modalEliminar').modal('show');
        $('#deletus').attr('data-tank', idTank);
    });

    let boton = $('#deletus');
    boton.click(function () {
        eliminarTanqueAjax();
        despuesDeCrearAlerta();
    });

});
/* Eliminar con ajax */
function eliminarTanqueAjax() {

    let idTank = $('#deletus').attr('data-tank');
    $('#modalCarga').modal("show");
    axios.delete(`/tanks/eliminarTanqueAjax/${idTank}`)
        .then(function (response) {
            console.log(response);
            $(`div[data-eliminar='${idTank}']`).remove();
        }).catch(function (error) {
            console.log(error)
            $('#modalError').modal('show');
        }).then(function () {
            $('#modalCarga').modal("hide");
        });
}
/* lanza una alerta dentro del modal */
function despuesDeCrearAlerta() {

    let idTank = $('#deletus').attr('data-tank');
    axios.delete(`/tanks/eliminarTanqueAjax/${idTank}`)
        .then(function (response) {
            if ($('#alert').hasClass('hide')) {
                $('#alert').removeClass('hide')
                $('#alert').addClass('show');
            };
        }).catch(function (error) {
            if ($('#alert').hasClass('hide')) {
                $('#alert').removeClass('hide')
                $('#alert').addClass('show');
            };

        }).then(function () {
            $('#modalCarga').modal("hide");
        });
}
