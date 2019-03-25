document.addEventListener('DOMContentLoaded', function () {

    $('#name').change(function (event) {
        comprobarNombre();
    });

    $('#email').change(function (event) {
        comprobarEmail();
    });

    $('#password').change(function (event) {
        comprobarContraseña();
    });

    $('#password-confirm').change(function (event) {
        comprobarContraseñaConfirmar();
    });

    $('#gender').change(function(event){
        comprobarGenero();
    });

    $('#terms').change(function (event) {
        comprobarCheck();
    });

    function comprobarNombre() {
        let esCorrecto = true;
        let error = [];
        let expresion = /^[a-zA-Z0-9]+$/g;
        let valorNombre = $('#name').val(); 
        if (!expresion.test(valorNombre.value)) {
            error.push("El nombre no permite caracteres como !#@%&");
            esCorrecto = false;
        };
        error.forEach( x =>  $("#erroresNombre").appendChild(x));
        return esCorrecto;
    };

    function comprobarEmail(){
        let error = [];
        let expresion =/^(?:(?:[\w`~!#$%^&*\-=+;:{}'|,?\/]+(?:(?:\.(?:"(?:\\?[\w`~!#$%^&*\-=+;:{}'|,?\/\.()<>\[\] @]|\\"|\\\\)*"|[\w`~!#$%^&*\-=+;:{}'|,?\/]+))*\.[\w`~!#$%^&*\-=+;:{}'|,?\/]+)?)|(?:"(?:\\?[\w`~!#$%^&*\-=+;:{}'|,?\/\.()<>\[\] @]|\\"|\\\\)+"))@(?:[a-zA-Z\d\-]+(?:\.[a-zA-Z\d\-]+)*|\[\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\])+$/g;
        let valorEmail = $('email').val();
        if (!expresion.test(valorEmail.value)) {
            error.push("El email no permite caracteres como !#%&");
        };
        return error;
    };

    function comprobarContraseña() {
        let error = [];
        let expresion = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/gm;
        let valorContraseña = $('#password').val(); 
        if (!expresion.test(valorContraseña.value)) {
            error.push("La contraseña no permite caracteres como !#@%& y mayor a 8 letras/numeros");
        };
        return error;
    };

    function comprobarContraseñaConfirmar(){
        let error = [];
        let valorContraseña = $('#password').val();
        let valorContraseñaConfirmar = $('password-confirm').val(); 
        if(!valorContraseñaConfirmar === valorContraseña){
            error.push('Las contraseñas no coinciden');
        };
        return error;
    };

    function comprobarGenero(){
        let error = [];
        let valorGenero = $('#gender').val();
        if(valorGenero.value === ""){
            error.push("Debe selecionar un genero");
        };
        return error;
    };


    function comprobarCheck() {
        let error = [];
        let valorCheck = $('#terms').is(":checked");
        if (!valorCheck) {
            error.push("Acepte los terminos");
        }
        return error;
    };

    function divErrores(){
        $(divErrors).appendChild('error');
    };

})