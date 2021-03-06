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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/validaciones/validacionTanque.js":
/*!*******************************************************!*\
  !*** ./resources/js/validaciones/validacionTanque.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

document.addEventListener('DOMContentLoaded', function () {
  $('#formulario').submit(function (event) {
    event.preventDefault();
  });
  $('#name').change(function (event) {
    comprobarNombre();
  });
  $('#nation').change(function (event) {
    comprobarNacion();
  });
  $('#crew').change(function (event) {
    comprobarTripulacion();
  });
  $('#hp').change(function (event) {
    comprobarPotencia();
  });
  $('#ammo').change(function (event) {
    comprobarMunicion();
  });
  $('#type').change(function (event) {});
  $('#mainweapon').change(function (event) {});
  $('#secondaryweapon').change(function (event) {});
  $('#description').change(function (event) {});
}); //(event)

function comprobarNombre() {
  var error = [];
  var expresion = /^[a-zA-Z0-9]+$/g;
  var valorNombre = $('#name').val(); //event.target.value

  if (!expresion.test(valorNombre.value)) {
    error.push("El nombre no permite caracteres como !#@%&");
  }

  ;
  return error;
}

;

function comprobarNacion() {
  var error = [];
  var expresion = /^[A-Z]+$/g;
  var valorNacion = $('#nation').val();

  if (!expresion.test(valorNacion.value)) {
    error.push("Solo se permiten mayusculas con formato UN");
  }

  return error;
}

function comprobarTripulacion() {
  var error = [];
  var expresion = /^[0-9]+$/g;
  var valorTripulacion = $('#crew').val();

  if (valorTripulacion > 6) {
    if (!expresion.test(valorTripulacion.value)) {
      error.push("Solo se permiten numeros menores que 6");
    }
  }

  return error;
}

function comprobarPotencia() {
  var error = [];
  var expresion = /^[0-9]+$/g;
  var valorPotencia = $('#hp').val();

  if (valorPotencia > 2000) {
    if (!expresion.test(valorPotencia.value)) {
      error.push("Solo se permiten numeros menores que 2000");
    }
  }

  return error;
}

function comprobarMunicion() {
  var error = [];
  var expresion = /^[0-9]+$/g;
  var valorMunicion = $('#nation').val();

  if (!expresion.test(valorMunicion.value)) {
    error.push("Solo numeros");
  }

  return error;
}

function divErrores() {
  $(divErrors).appendChild("".concat(error));
}

/***/ }),

/***/ 2:
/*!*************************************************************!*\
  !*** multi ./resources/js/validaciones/validacionTanque.js ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/adrian/Sites/Laravel-MBT/resources/js/validaciones/validacionTanque.js */"./resources/js/validaciones/validacionTanque.js");


/***/ })

/******/ });