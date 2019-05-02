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
/******/ 	return __webpack_require__(__webpack_require__.s = 6);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/deleteAjax/delete.js":
/*!*******************************************!*\
  !*** ./resources/js/deleteAjax/delete.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

document.addEventListener('DOMContentLoaded', function () {
  $("button[data-accion='delete']").click(function (event) {
    var idTank = $(event.target).attr('data-tank');
    event.preventDefault();
    $('#modalEliminar').modal('show');
    $('#deletus').attr('data-tank', idTank);
  });
  var boton = $('#deletus');
  boton.click(function () {
    eliminarTanqueAjax();
    despuesDeCrearAlerta();
  });
});

function eliminarTanqueAjax() {
  var idTank = $('#deletus').attr('data-tank');
  $('#modalCarga').modal("show");
  axios.delete("/tanks/eliminarTanqueAjax/".concat(idTank)).then(function (response) {
    console.log(response);
    $("div[data-eliminar='".concat(idTank, "']")).remove();
  }).catch(function (error) {
    console.log(error);
    $('#modalError').modal('show');
  }).then(function () {
    $('#modalCarga').modal("hide");
  });
}

function despuesDeCrearAlerta() {
  var idTank = $('#deletus').attr('data-tank');
  axios.delete("/tanks/eliminarTanqueAjax/".concat(idTank)).then(function (response) {
    if ($('#alert').hasClass('hide')) {
      $('#alert').removeClass('hide');
      $('#alert').addClass('show');
    }

    ;
  }).catch(function (error) {
    if ($('#alert').hasClass('hide')) {
      $('#alert').removeClass('hide');
      $('#alert').addClass('show');
    }

    ;
  }).then(function () {
    $('#modalCarga').modal("hide");
  });
}

/***/ }),

/***/ 6:
/*!*************************************************!*\
  !*** multi ./resources/js/deleteAjax/delete.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/adrian/Sites/Laravel-MBT/resources/js/deleteAjax/delete.js */"./resources/js/deleteAjax/delete.js");


/***/ })

/******/ });