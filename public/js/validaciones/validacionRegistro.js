/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/validaciones/validacionRegistro.js":
/*!*********************************************************!*\
  !*** ./resources/js/validaciones/validacionRegistro.js ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

document.addEventListener('DOMContentLoaded', function () {
  $('#formulario').submit(function (event) {
    event.preventDefault();
    validarTodoFormulario();
  });
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
  $('#gender').change(function (event) {
    comprobarGenero();
  });
  $('#age').change(function (event) {
    comprobarAge();
  });
  $('#terms').change(function (event) {
    comprobarCheck();
  });
});

function comprobarNombre() {
  var esCorrecto = true;
  var error = [];
  var expresion = /^[a-zA-Z0-9]+$/g;
  var valorNombre = $('#name').val();
  $('#name').removeClass('is-valid is-invalid');
  $("#erroresNombre").empty();

  if (!expresion.test(valorNombre)) {
    error.push("El nombre no permite caracteres como !#@%&-");
    esCorrecto = false;
    $('#name').addClass('is-invalid');
  } else {
    $('#name').addClass('is-valid');
  }

  ;
  error.forEach(function (x) {
    return $("#erroresNombre").append(x);
  });
  return esCorrecto;
}

;

function comprobarEmail() {
  var esCorrecto = true;
  var error = [];
  var expresion = /[\w|.|-]*@\w*\.[\w|.]*/g;
  var valorEmail = $('#email').val();
  $('#email').removeClass('is-valid is-invalid');
  $("#erroresEmail").empty();

  if (!expresion.test(valorEmail)) {
    error.push("El email no permite caracteres como !#%&- seleccione un email valido");
    esCorrecto = false;
    $('#email').addClass('is-invalid');
  } else {
    $('#email').addClass('is-valid');
  }

  ;
  error.forEach(function (x) {
    return $("#erroresEmail").append(x);
  });
  return esCorrecto;
}

;

function comprobarContraseña() {
  var esCorrecto = true;
  var error = [];
  var expresion = /^[a-zA-Z0-9].{8,}$/g;
  var valorContraseña = $('#password').val();
  $('#password').removeClass('is-valid is-invalid');
  $("#erroresPass").empty();

  if (!expresion.test(valorContraseña)) {
    error.push("La contraseña no permite caracteres como !#@%& y mayor a 8 letras/numeros");
    esCorrecto = false;
    $('#password').addClass('is-invalid');
  } else {
    $('#password').addClass('is-valid');
  }

  ;
  error.forEach(function (x) {
    return $("#erroresPass").append(x);
  });
  return esCorrecto;
}

;

function comprobarContraseñaConfirmar() {
  var esCorrecto = true;
  var error = [];
  var valorContraseña = $('#password').val();
  var valorContraseñaConfirmar = $('password-confirm').val();
  $('#password-confirm').removeClass('is-valid is-invalid');
  $("#erroresPassConfirm").empty();

  if (!valorContraseñaConfirmar === valorContraseña) {
    error.push('Las contraseñas no coinciden');
    esCorrecto = false;
    $('#password-confirm').addClass('is-invalid');
  } else {
    $('#password-confirm').addClass('is-valid');
  }

  ;
  error.forEach(function (x) {
    return $("#erroresPassConfirm").append(x);
  });
  return esCorrecto;
}

;

function comprobarGenero() {
  var esCorrecto = true;
  var error = [];
  var valorGenero = $('#gender').val();
  $('#gender').removeClass('is-valid is-invalid');
  $("#erroresGender").empty();

  if (valorGenero === "#") {
    error.push("Debe selecionar un genero");
    esCorrecto = false;
    $('#gender').addClass('is-invalid');
  } else {
    $('#gender').addClass('is-valid');
  }

  ;
  error.forEach(function (x) {
    return $("#erroresGender").append(x);
  });
  return esCorrecto;
}

;

function comprobarAge() {
  var esCorrecto = true;
  var error = [];
  var valorAge = $('#age').val();
  $('#age').removeClass('is-valid is-invalid');
  $("#erroresAge").empty();

  if (valorAge < 18) {
    error.push("Debe de ser mayor o igual que 18");
    esCorrecto = false;
    $('#age').addClass('is-invalid');
  } else {
    $('#age').addClass('is-valid');
  }

  ;
  error.forEach(function (x) {
    return $("#erroresAge").append(x);
  });
  return esCorrecto;
}

;

function comprobarCheck() {
  var esCorrecto = true;
  var error = [];
  var valorCheck = $('#terms').is(":checked");
  $('#terms').removeClass('is-valid is-invalid');
  $("#erroresTerms").empty();

  if (!valorCheck) {
    error.push("Acepte los terminos");
    esCorrecto = false;
    $('#terms').addClass('is-invalid');
  } else {
    $('#terms').addClass('is-valid');
  }

  error.forEach(function (x) {
    return $("#erroresTerms").append(x);
  });
  return esCorrecto;
}

;

function validarTodoFormulario() {
  var esNombreCorrecto = comprobarNombre();
  var esEmailCorrecto = comprobarEmail();
  var esContraseñaCorrecto = comprobarContraseña();
  var esContraseñaConfirmadaCorrecto = comprobarContraseñaConfirmar();
  var esGeneroCorrecto = comprobarGenero();
  var esCheckBoxCorrecto = comprobarCheck();
  var esAgeCorrecto = comprobarAge();

  if (esNombreCorrecto && esEmailCorrecto && esContraseñaCorrecto && esContraseñaConfirmadaCorrecto && esGeneroCorrecto && esCheckBoxCorrecto && esAgeCorrecto) {
    var formulario = document.getElementById("formulario");
    formulario.submit();
  } else {
    $('#modal').modal('toggle');
  }
}

/***/ }),

/***/ 3:
/*!***************************************************************!*\
  !*** multi ./resources/js/validaciones/validacionRegistro.js ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/adrian/Sites/Laravel-MBT/resources/js/validaciones/validacionRegistro.js */"./resources/js/validaciones/validacionRegistro.js");


/***/ })

/******/ });