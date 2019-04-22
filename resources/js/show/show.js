document.addEventListener('DOMContentLoaded', function () {
    $("button[data-accion='show']").click(function (event) {
        let idTank = $(event.target).attr('data-tank');
        $('#modalShow').modal('show')
        $('#show').attr('data-tank', idTank);
    });
    let boton = $('#show');
    boton.click(function () {
        showModal();
    });


});

function showModal(){

    let idTank = $("#show").attr("data-tank");

    $('#modalCarga').modal("show");
    axios.get(`/tanks/show/${idTank}`)
        .then(function (response) {
            console.log(response)
        }).catch(function (error) {
            console.log(error)
        }).then(function () {
            $('#modalCarga').modal("hide");
        });
}