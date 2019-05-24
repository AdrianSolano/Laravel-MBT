document.addEventListener('DOMContentLoaded', function () {

    paginateAjax();

})

function paginateAjax() {
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() > $(document).height()) {
            $(window).unbind('scroll');
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
    });
}