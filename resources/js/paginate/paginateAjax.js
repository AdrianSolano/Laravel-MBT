document.addEventListener('DOMContentLoaded', function () {

    paginateAjax();
    spinnerHide();

})
/* Paginacion con ajax */
function paginateAjax() {
    let cont = 5;
    const margen = .1;
    spinnerHide();
    $(function () {
        $(window).on("scroll", finalPagina)
    })
    function finalPagina() {
        if (margen > $(document).height() - $(window).scrollTop() - $(window).height()) {
            cont = cont + 5;
            spinnerShow();
            axios.get(`/tanks/paginateAjax/${cont}`)
                .then(function (response) {
                    if (response.data == "") {
                        $('#modalTanquesPag').modal('show');
                    } else {
                        $('#cargarTanques').append(response.data);
                    }
                    spinnerHide();
                })
                .catch(function (error) {
                    console.log(error);
                    $('#modalError').modal('show');
                    spinnerHide();
                })
                .then(function (response) {
                    spinnerHide();
                })
        }
    }

}


function spinnerHide() {
    $("#spinner").hide();
}

function spinnerShow() {
    $("#spinner").show();
};
