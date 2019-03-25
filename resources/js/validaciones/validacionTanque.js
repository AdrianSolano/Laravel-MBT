document.addEventListener('DOMContentLoaded',function(){

    $('#formulario').submit(function(event){
        event.preventDefault();
    });

    $('#name').change(function(event){
        comprobarNombre();
    });

    $('#nation').change(function(event){
        comprobarNacion();
    });

    $('#crew').change(function(event){
        comprobarTripulacion();
    });

    $('#hp').change(function(event){
        comprobarPotencia();
    });

    $('#ammo').change(function(event){
        comprobarMunicion();
    });

    $('#type').change(function(event){

    });

    $('#mainweapon').change(function(event){

    });

    $('#secondaryweapon').change(function(event){

    });

    $('#description').change(function(event){

    });


})
//(event)
function comprobarNombre(){
    let error = [];
    let expresion = /^[a-zA-Z0-9]+$/g;
    let valorNombre = $('#name').val(); //event.target.value
    if(!expresion.test(valorNombre.value)){
        error.push("El nombre no permite caracteres como !#@%&");
    };
    return error;
};

function comprobarNacion(){
    let error = [];
    let expresion = /^[A-Z]+$/g;
    let valorNacion  = $('#nation').val();
    if(!expresion.test(valorNacion.value)){
        error.push("Solo se permiten mayusculas con formato UN")
    }
    return error;
}

function comprobarTripulacion(){
    let error = [];
    let expresion = /^[0-9]+$/g;
    let valorTripulacion = $('#crew').val();
    if(valorTripulacion > 6){
        if(!expresion.test(valorTripulacion.value)){
            error.push("Solo se permiten numeros menores que 6")
        }
    }
    return error;
}

function comprobarPotencia(){
    let error = [];
    let expresion = /^[0-9]+$/g;
    let valorPotencia = $('#hp').val();
    if(valorPotencia > 2000){
        if(!expresion.test(valorPotencia.value)){
            error.push("Solo se permiten numeros menores que 2000")
        }
    }
    return error;
}

function comprobarMunicion(){
    let error = [];
    let expresion = /^[0-9]+$/g;
    let valorMunicion  = $('#nation').val();
    if(!expresion.test(valorMunicion.value)){
        error.push("Solo numeros")
    }
    return error;
}


function divErrores(){
    $(divErrors).appendChild(`${error}`);
}
