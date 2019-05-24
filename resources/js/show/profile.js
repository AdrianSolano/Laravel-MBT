document.addEventListener('DOMContentLoaded', function () {
    asociarEventos();
});

function asociarEventos() {
    let boton = $('#idAlerta');
    boton.click(function () {
        alerta();
    });
}

function alerta(){
    alert("Hola");
}

$(function () {
    $('#myTabPill a').on('show.bs.tab', function (e) {
        let vista = $(e.target).attr("id");
        axios.get(`/miPerfil/${vista}`)
            .then(function (response) {
                $("#contenido").html(response.data);
                asociarEventos();
            })
            .catch(function (error) {
                console.log(error);
            });
    })
});
