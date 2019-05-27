document.addEventListener('DOMContentLoaded', function () {
    /* Evento con un boton para mostrar info */
    $("button[data-accion='show']").click(function (event) {
        let idTank = $(event.target).attr('data-tank');
        showModal(idTank);
    });

});
/* Funcion que muestra la informacion en un modal con ajax */
function showModal(idTank){

    $('#modalCarga').modal("show");
    axios.get(`/tanks/showAjax/${idTank}`)
        .then(function (response) {
            $('#modalCarga').modal("hide");
            $('#modalShow').modal('show');
            $('#datos').html(response.data);
            
            //console.log(response);
        }).catch(function (error) {
            console.log(error)
        }).then(function () {
            $('#modalCarga').modal("hide");
        });
}