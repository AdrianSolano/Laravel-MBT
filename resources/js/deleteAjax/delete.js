document.addEventListener('DOMContentLoaded', function () {

    alertaModel();

    eliminarBookAjax();
});


function alertaModel() {
    $("form[data-accion='deletus']").on('submit', function (event) {
        event.preventDefault()
        alert('hola');
    })
};

function eliminarBookAjax() {
    let datosFormulario = $("deletus").serialize();
    axios.post('/tanks/eliminarTanqueAjax', datosFormulario)
        .then(function (response) {
            console.log(response)
            alert("deletus");
        }).catch(function (error) {
            console.log(error)
            alert("Error");
        });
}