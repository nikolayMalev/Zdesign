"use strict";
/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["webpackChunkzdeisng"] = self["webpackChunkzdeisng"] || []).push([["resources_js_modules_slider-testimonials_js"],{

/***/ "./resources/js/modules/slider-testimonials.js":
/*!*****************************************************!*\
  !*** ./resources/js/modules/slider-testimonials.js ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _splidejs_splide__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @splidejs/splide */ \"./node_modules/@splidejs/splide/dist/js/splide.esm.js\");\n/* harmony import */ var _splidejs_splide_extension_auto_scroll__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @splidejs/splide-extension-auto-scroll */ \"./node_modules/@splidejs/splide-extension-auto-scroll/dist/js/splide-extension-auto-scroll.esm.js\");\n\n\nvar splide = new _splidejs_splide__WEBPACK_IMPORTED_MODULE_0__[\"default\"]('.splide.splide-testimonials', {\n  type: 'loop',\n  // Ensures the slides loop infinitely\n  drag: 'free',\n  // Allows free dragging\n  focus: 'center',\n  // Centers the focused slide\n  perPage: 3,\n  // Number of slides visible at a time\n  autoScroll: {\n    speed: 1,\n    // Speed of the auto-scroll (higher number = slower speed)\n    pauseOnHover: true,\n    // Pauses when the mouse hovers over the slider\n    pauseOnFocus: true // Pauses when the slider is in focus\n  },\n  gap: '20px',\n  // Set gap between slides (optional)\n  extensions: {\n    AutoScroll: _splidejs_splide_extension_auto_scroll__WEBPACK_IMPORTED_MODULE_1__.AutoScroll\n  } // Load the AutoScroll extension\n});\n\n// Mount the slider\nsplide.mount();\n\n//# sourceURL=webpack://zdeisng/./resources/js/modules/slider-testimonials.js?");

/***/ })

}]);