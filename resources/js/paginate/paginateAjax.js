document.addEventListener('DOMContentLoaded', function () {
    paginateAjax();
})

function paginateAjax() {
    $(function () {
        $(window).on("scroll", endPage)
    })
    axios.get(`/tanks/paginateAjax/`)//
        .then(function (response) {
            if (response.data == "") {
                //Modal
            }
        })
        .catch(function (error) {
            console.log(error);
            //alert("Error");
        })
}