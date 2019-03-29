document.addEventListener('DOMContentLoaded', function () {
    let formulario = document.getElementById('formulario');
    formulario.addEventListener('submit', function (event) {
        event.preventDefault();
        editAjax();
    });

});
function editAjax() {

    let editForm = $("#formulario").serialize();
    axios.put('/tanks/editAjax', editForm)
        .then(function (response) {
            console.log(response);
            alert("Editus");
        }).catch(function (error) {
            console.log(error);
            alert("Error");
        });

}