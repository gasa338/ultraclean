/******/ (() => { // webpackBootstrap
/*!*******************************!*\
  !*** ./assets/src/js/auth.js ***!
  \*******************************/
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _defineProperty(e, r, t) { return (r = _toPropertyKey(r)) in e ? Object.defineProperty(e, r, { value: t, enumerable: !0, configurable: !0, writable: !0 }) : e[r] = t, e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
// Auth.js
var Auth = /*#__PURE__*/function () {
  function Auth() {
    var _this$form, _this$form2, _this$form3, _this$form4;
    _classCallCheck(this, Auth);
    _defineProperty(this, "validateEmail", function (email) {
      var re = /\S+@\S+\.\S+/;
      return re.test(email);
    });
    this.form = document.querySelector("[data-x-form]");
    this.email = (_this$form = this.form) === null || _this$form === void 0 ? void 0 : _this$form.querySelector("[data-x-field='email']");
    this.emailError = (_this$form2 = this.form) === null || _this$form2 === void 0 ? void 0 : _this$form2.querySelector("[data-x-field-error='email']");
    this.password = (_this$form3 = this.form) === null || _this$form3 === void 0 ? void 0 : _this$form3.querySelector("[data-x-field='password']");
    this.passwordError = (_this$form4 = this.form) === null || _this$form4 === void 0 ? void 0 : _this$form4.querySelector("[data-x-field-error='password']");
    this.errors = {};
    this.dummyUser = {
      email: "user@demo.com",
      password: "password"
    };
  }
  return _createClass(Auth, [{
    key: "initEventListener",
    value: function initEventListener() {
      var _this = this;
      this.form.addEventListener("submit", function (e) {
        e.preventDefault();
        var email = _this.email.value;
        var password = _this.password.value;
        if (email.length === 0) {
          _this.errors["email"] = "Please enter a email address";
        } else if (!_this.validateEmail(email)) {
          _this.errors["email"] = "Please enter a proper email";
        } else if (email !== _this.dummyUser.email) {
          _this.errors["email"] = "This user is not registered yet";
        }
        if (password.length === 0) {
          _this.errors["password"] = "Please enter a password";
        }
        if (email === _this.dummyUser.email && password !== _this.dummyUser.password) {
          _this.errors["password"] = "Invalid credentials";
        }
        if (Object.keys(_this.errors).length === 0) {
          _this.goToNext();
        } else {
          _this.showErrors();
        }
      });
    }
  }, {
    key: "goToNext",
    value: function goToNext() {
      var next = this.form.getAttribute("data-x-form-to");
      console.info(next);
      if (next) {
        window.location.href = next;
      }
    }
  }, {
    key: "clearErrors",
    value: function clearErrors() {
      if (this.emailError) this.emailError.innerHTML = "";
      if (this.passwordError) this.passwordError.innerHTML = "";
    }
  }, {
    key: "showErrors",
    value: function showErrors() {
      this.clearErrors();
      if (this.errors["email"] && this.emailError) {
        this.emailError.innerHTML = this.errors["email"];
      }
      if (this.errors["password"] && this.passwordError) {
        this.passwordError.innerHTML = this.errors["password"];
      }
      this.errors = {};
    }
  }, {
    key: "init",
    value: function init() {
      if (this.email && this.password) {
        this.initEventListener();
      }
    }
  }]);
}();
new Auth().init();
/******/ })()
;