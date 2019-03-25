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
  $('#terms').change(function (event) {
    comprobarCheck();
  });

  function comprobarNombre() {
    var error = [];
    var expresion = /^[a-zA-Z0-9]+$/g;
    var valorNombre = $('#name').val();

    if (!expresion.test(valorNombre.value)) {
      error.push("El nombre no permite caracteres como !#@%&");
    }

    ;
    return error;
  }

  ;

  function comprobarEmail() {
    var error = [];
    var expresion = /^(?:(?:[\w`~!#$%^&*\-=+;:{}'|,?\/]+(?:(?:\.(?:"(?:\\?[\w`~!#$%^&*\-=+;:{}'|,?\/\.()<>\[\] @]|\\"|\\\\)*"|[\w`~!#$%^&*\-=+;:{}'|,?\/]+))*\.[\w`~!#$%^&*\-=+;:{}'|,?\/]+)?)|(?:"(?:\\?[\w`~!#$%^&*\-=+;:{}'|,?\/\.()<>\[\] @]|\\"|\\\\)+"))@(?:[a-zA-Z\d\-]+(?:\.[a-zA-Z\d\-]+)*|\[\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\])+$/g;
    var valorEmail = $('email').val();

    if (!expresion.test(valorEmail.value)) {
      error.push("El email no permite caracteres como !#%&");
    }

    ;
    return error;
  }

  ;

  function comprobarContraseña() {
    var error = [];
    var expresion = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/gm;
    var valorContraseña = $('#password').val();

    if (!expresion.test(valorContraseña.value)) {
      error.push("La contraseña no permite caracteres como !#@%& y mayor a 8 letras/numeros");
    }

    ;
    return error;
  }

  ;

  function comprobarContraseñaConfirmar() {
    var error = [];
    var valorContraseña = $('#password').val();
    var valorContraseñaConfirmar = $('password-confirm').val();

    if (!valorContraseñaConfirmar === valorContraseña) {
      error.push('Las contraseñas no coinciden');
    }

    ;
    return error;
  }

  ;

  function comprobarGenero() {
    var error = [];
    var valorGenero = $('#gender').val();

    if (valorGenero.value === "") {
      error.push("Debe selecionar un genero");
    }

    ;
    return error;
  }

  ;

  function comprobarCheck() {
    var error = [];
    var valorCheck = $('#terms').is(":checked");

    if (!valorCheck) {
      error.push("Acepte los terminos");
    }

    return error;
  }

  ;

  function divErrores() {
    $(divErrors).appendChild('error');
  }

  ;
});

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