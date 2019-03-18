document.addEventListener('DOMContentLoaded',function(){

    $('#formulario').submit(function(event){
        event.preventDefault();
    });

    $('#name').change(function(event){
        comprobarNombre()
    });

    $('#nation').change(function(event){

    });

    $('#crew').change(function(event){

    });

    $('#hp').change(function(event){

    });

    $('#ammo').change(function(event){

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
        error.push("El nombre no permite caracteres como !#@%");
    };
    return error;
};

function sacarErrores(){
    let error = [];
    let divErrores = $('#errores').append();

}


/* function check(){
    elemento = document.getElementById("term");
    if( !elemento.checked ) {
      return false;
    } 
} */