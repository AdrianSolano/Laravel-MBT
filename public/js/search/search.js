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
/******/ 	return __webpack_require__(__webpack_require__.s = 10);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/search/search.js":
/*!***************************************!*\
  !*** ./resources/js/search/search.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

document.addEventListener('DOMContentLoaded', function () {
  //Cogemos el formulario de busqueda
  var searchForm = document.getElementById('searchForm');
  searchForm.addEventListener('submit', function (event) {
    event.preventDefault();
    busquedaAjax();
    spinnerShow();
  });
  var inputBusqueda = document.getElementById('busqueda');
  inputBusqueda.addEventListener('change', function (event) {
    busquedaAjax();
    spinnerShow();
  });
  var selectForm = document.getElementById('selectBusqueda');
  selectForm.addEventListener('change', function (event) {
    busquedaAjax();
    spinnerShow();
  });
  var checkForm = document.getElementById('checkBox1');
  checkForm.addEventListener('change', function (event) {
    busquedaAjax();
    spinnerShow();
  });
  var checkForm2 = document.getElementById('checkBox2');
  checkForm2.addEventListener('change', function (event) {
    busquedaAjax();
    spinnerShow();
  });
  var botonBuscar = $('#botonBuscar');
  botonBuscar.click(function () {
    busquedaAjax();
    spinnerShow();
  });
  spinnerHide();
});

function spinnerHide() {
  $("#spinner").hide();
}

function spinnerShow() {
  $("#spinner").show();
}

; //Funcion que hace la peticion AJAX por axios

function busquedaAjax() {
  var searchForm = $("#searchForm").serialize();
  $('#busqueda').val();
  axios.post('/tanks/searchAjax', searchForm).then(function (response) {
    var divMostrarBusqueda = $("#mostrarBusqueda");
    divMostrarBusqueda.empty();
    divMostrarBusqueda.html(response.data);
    console.log(response);
    spinnerShow();
  }).catch(function (error) {
    $('#modalError').modal('show');
    console.log(error);
  }).then(function (response) {
    spinnerHide();
  });
}

/***/ }),

/***/ 10:
/*!*********************************************!*\
  !*** multi ./resources/js/search/search.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/adrian/Sites/Laravel-MBT/resources/js/search/search.js */"./resources/js/search/search.js");


/***/ })

/******/ });