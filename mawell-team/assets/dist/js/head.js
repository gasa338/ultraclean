/******/ (() => { // webpackBootstrap
/*!*******************************!*\
  !*** ./assets/src/js/head.js ***!
  \*******************************/
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _defineProperty(e, r, t) { return (r = _toPropertyKey(r)) in e ? Object.defineProperty(e, r, { value: t, enumerable: !0, configurable: !0, writable: !0 }) : e[r] = t, e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
/*
Template Name: AeroPage - Tailwind CSS Multipurpose One Page Landing Template
Version: 1.0
Author: coderthemes
Email: support@coderthemes.com
*/
// import "../css/style.css";
// import "../css/icons.css";
var ThemeCustomizer = /*#__PURE__*/function () {
  function ThemeCustomizer() {
    var _this = this;
    _classCallCheck(this, ThemeCustomizer);
    _defineProperty(this, "theme", "light");
    _defineProperty(this, "onThemeChange", function () {
      if (_this.theme === "dark") {
        _this.html.classList.add("dark");
      } else {
        _this.html.classList.remove("dark");
      }
      if (_this.lightTheme && _this.darkTheme) {
        if (_this.theme === "light") {
          _this.lightTheme.classList.remove("hidden");
          _this.darkTheme.classList.add("hidden");
        } else {
          _this.darkTheme.classList.remove("hidden");
          _this.lightTheme.classList.add("hidden");
        }
      }
      localStorage.setItem("__AEROPAGE_CONFIG__", JSON.stringify({
        theme: _this.theme
      }));
    });
  }
  return _createClass(ThemeCustomizer, [{
    key: "init",
    value: function init() {
      var _this2 = this;
      this.html = document.getElementsByTagName("html")[0];
      var config = localStorage.getItem("__AEROPAGE_CONFIG__");
      if (config) {
        var parsed = JSON.parse(config);
        this.theme = parsed["theme"];
      }
      if (this.theme === "dark") {
        this.html.classList.add("dark");
      }
      this.onThemeChange();
      window.addEventListener("DOMContentLoaded", function () {
        _this2.after();
      });
    }
  }, {
    key: "after",
    value: function after() {
      var _this3 = this;
      this.lightTheme = document.getElementById("light-theme");
      this.darkTheme = document.getElementById("dark-theme");
      if (this.lightTheme && this.darkTheme) {
        this.lightTheme.addEventListener("click", function (e) {
          _this3.theme = "dark";
          _this3.onThemeChange();
        });
        this.darkTheme.addEventListener("click", function (e) {
          _this3.theme = "light";
          _this3.onThemeChange();
        });
      }
      this.onThemeChange();
    }
  }]);
}();
new ThemeCustomizer().init();
/******/ })()
;