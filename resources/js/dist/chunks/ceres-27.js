(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[27],{

/***/ "./node_modules/babel-loader/lib/index.js!./node_modules/vue-loader/lib/index.js?!./resources/js/src/app/components/form/FormAttachment.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/app/components/form/FormAttachment.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_function_name__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.function.name */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name__WEBPACK_IMPORTED_MODULE_0__);

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "form-attachment",
  data: function data() {
    return {
      selectedFiles: ""
    };
  },
  props: {
    allowMultiple: {
      type: Boolean
    },
    allowedFileExtensions: {
      type: String
    },
    isRequired: {
      type: Boolean
    },
    formFieldId: {
      type: String
    },
    label: {
      type: String
    }
  },
  mounted: function mounted() {
    var _this = this;

    this.$nextTick(function () {
      if (_this.isRequired) {
        _this.$refs.fileInput.setAttribute("data-validate", "file");
      }
    });
  },
  methods: {
    collectFiles: function collectFiles(e) {
      this.filesChanged(e.target.files);
      var fileNames = "";

      for (var i = 0; i < e.target.files.length; i++) {
        if (i > 0) {
          fileNames += ", ";
        }

        fileNames = fileNames + e.target.files[i].name;
      }

      this.selectedFiles = fileNames;
    },
    filesChanged: function filesChanged(fileList) {
      this.$emit('files-changed', fileList);
    }
  },
  computed: {
    fileNames: function fileNames() {
      return this.selectedFiles;
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/app/components/form/FormAttachment.vue?vue&type=template&id=64299210&":
/*!******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/app/components/form/FormAttachment.vue?vue&type=template&id=64299210& ***!
  \******************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "label",
    {
      directives: [{ name: "tooltip", rawName: "v-tooltip" }],
      staticClass: "input-unit file-input",
      attrs: { "data-toggle": "tooltip", title: _vm.fileNames }
    },
    [
      _c("label", { attrs: { for: _vm.formFieldId } }, [
        _vm._v("\n        " + _vm._s(_vm.label)),
        _vm.isRequired ? _c("span", [_vm._v("*")]) : _vm._e()
      ]),
      _vm._v(" "),
      _c("span", { staticClass: "input-unit-preview" }, [
        _vm._v(_vm._s(_vm.fileNames))
      ]),
      _vm._v(" "),
      _vm._m(0),
      _vm._v(" "),
      _c("input", {
        ref: "fileInput",
        attrs: {
          type: "file",
          multiple: _vm.allowMultiple,
          name: _vm.formFieldId,
          id: _vm.formFieldId,
          disabled: _vm.allowedFileExtensions.trim().length === 0,
          accept: _vm.allowedFileExtensions
        },
        on: { change: _vm.collectFiles }
      })
    ]
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("span", { staticClass: "input-unit-btn" }, [
      _c("i", { staticClass: "fa fa-ellipsis-h" })
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/src/app/components/form/FormAttachment.vue":
/*!*****************************************************************!*\
  !*** ./resources/js/src/app/components/form/FormAttachment.vue ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _FormAttachment_vue_vue_type_template_id_64299210___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./FormAttachment.vue?vue&type=template&id=64299210& */ "./resources/js/src/app/components/form/FormAttachment.vue?vue&type=template&id=64299210&");
/* harmony import */ var _FormAttachment_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./FormAttachment.vue?vue&type=script&lang=js& */ "./resources/js/src/app/components/form/FormAttachment.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _FormAttachment_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _FormAttachment_vue_vue_type_template_id_64299210___WEBPACK_IMPORTED_MODULE_0__["render"],
  _FormAttachment_vue_vue_type_template_id_64299210___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/app/components/form/FormAttachment.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/app/components/form/FormAttachment.vue?vue&type=script&lang=js&":
/*!******************************************************************************************!*\
  !*** ./resources/js/src/app/components/form/FormAttachment.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_node_modules_vue_loader_lib_index_js_vue_loader_options_FormAttachment_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./FormAttachment.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js!./node_modules/vue-loader/lib/index.js?!./resources/js/src/app/components/form/FormAttachment.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_node_modules_vue_loader_lib_index_js_vue_loader_options_FormAttachment_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/app/components/form/FormAttachment.vue?vue&type=template&id=64299210&":
/*!************************************************************************************************!*\
  !*** ./resources/js/src/app/components/form/FormAttachment.vue?vue&type=template&id=64299210& ***!
  \************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_FormAttachment_vue_vue_type_template_id_64299210___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./FormAttachment.vue?vue&type=template&id=64299210& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/app/components/form/FormAttachment.vue?vue&type=template&id=64299210&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_FormAttachment_vue_vue_type_template_id_64299210___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_FormAttachment_vue_vue_type_template_id_64299210___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
//# sourceMappingURL=ceres-27.js.map