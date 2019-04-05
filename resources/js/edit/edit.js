document.addEventListener('DOMContentLoaded', function () {
    let formulario = document.getElementById('formulario');
    formulario.addEventListener('submit', function (event) {
        event.preventDefault();
        editAjax();
    });

});


function editAjax() {

    let editForm = $("#formulario").serialize();
    let idTank = $("#formulario").attr("data-tank");

    axios.put(`/tanks/editAjax/${idTank}`, editForm)
        .then(function (response) {
            console.log(response);
            alert("Editus");
        }).catch(function (error) {
            console.log(error);
            alert("Error");
        });

}