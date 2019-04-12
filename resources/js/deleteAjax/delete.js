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
    });

});

function eliminarTanqueAjax() {

    let idTank = $('#deletus').attr('data-tank');
    $('#modalCarga').modal("show");
    axios.delete(`/tanks/eliminarTanqueAjax/${idTank}`)
        .then(function (response) {
            console.log(response)
        }).catch(function (error) {
            console.log(error)
        }).then(function () {
            $('#modalCarga').modal("hide");
        });
}

