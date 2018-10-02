webpackJsonp([2],{

/***/ "./resources/assets/js/bootstrap.js":
/***/ (function(module, exports) {

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

// window.axios = require('axios')

// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

var token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    // window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

/**
import Echo from 'laravel-echo'

window.Pusher = require('pusher-js')

window.Echo = new Echo({
    broadcaster: 'pusher',
    key:         window.App.pusher.key,
    cluster:     window.App.pusher.cluster,
    encrypted:   true,
})
**/

var Outline = function () {
    function Outline() {
        _classCallCheck(this, Outline);

        this.boot = function () {};
    }

    _createClass(Outline, [{
        key: 'booting',
        value: function booting(callback) {
            this.boot = callback;
        }
    }]);

    return Outline;
}();

window.Outline = new Outline();

/***/ }),

/***/ 1:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./resources/assets/js/bootstrap.js");


/***/ })

},[1]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2pzL2Jvb3RzdHJhcC5qcyJdLCJuYW1lcyI6WyJ0b2tlbiIsImRvY3VtZW50IiwiaGVhZCIsInF1ZXJ5U2VsZWN0b3IiLCJjb25zb2xlIiwiZXJyb3IiLCJPdXRsaW5lIiwiYm9vdCIsImNhbGxiYWNrIiwid2luZG93Il0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7QUFBQTs7Ozs7O0FBTUE7O0FBRUE7O0FBRUE7Ozs7OztBQU1BLElBQUlBLFFBQVFDLFNBQVNDLElBQVQsQ0FBY0MsYUFBZCxDQUE0Qix5QkFBNUIsQ0FBWjs7QUFFQSxJQUFJSCxLQUFKLEVBQVc7QUFDUDtBQUNILENBRkQsTUFFTztBQUNISSxZQUFRQyxLQUFSLENBQWMsdUVBQWQ7QUFDSDs7QUFFRDs7Ozs7O0FBTUE7Ozs7Ozs7Ozs7Ozs7SUFhTUMsTztBQUNGLHVCQUFjO0FBQUE7O0FBQ1YsYUFBS0MsSUFBTCxHQUFZLFlBQU0sQ0FBRSxDQUFwQjtBQUNIOzs7O2dDQUVPQyxRLEVBQVU7QUFDZCxpQkFBS0QsSUFBTCxHQUFZQyxRQUFaO0FBQ0g7Ozs7OztBQUdMQyxPQUFPSCxPQUFQLEdBQWlCLElBQUlBLE9BQUosRUFBakIsQyIsImZpbGUiOiIvanMvYm9vdHN0cmFwLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLyoqXG4gKiBXZSdsbCBsb2FkIHRoZSBheGlvcyBIVFRQIGxpYnJhcnkgd2hpY2ggYWxsb3dzIHVzIHRvIGVhc2lseSBpc3N1ZSByZXF1ZXN0c1xuICogdG8gb3VyIExhcmF2ZWwgYmFjay1lbmQuIFRoaXMgbGlicmFyeSBhdXRvbWF0aWNhbGx5IGhhbmRsZXMgc2VuZGluZyB0aGVcbiAqIENTUkYgdG9rZW4gYXMgYSBoZWFkZXIgYmFzZWQgb24gdGhlIHZhbHVlIG9mIHRoZSBcIlhTUkZcIiB0b2tlbiBjb29raWUuXG4gKi9cblxuLy8gd2luZG93LmF4aW9zID0gcmVxdWlyZSgnYXhpb3MnKVxuXG4vLyB3aW5kb3cuYXhpb3MuZGVmYXVsdHMuaGVhZGVycy5jb21tb25bJ1gtUmVxdWVzdGVkLVdpdGgnXSA9ICdYTUxIdHRwUmVxdWVzdCdcblxuLyoqXG4gKiBOZXh0IHdlIHdpbGwgcmVnaXN0ZXIgdGhlIENTUkYgVG9rZW4gYXMgYSBjb21tb24gaGVhZGVyIHdpdGggQXhpb3Mgc28gdGhhdFxuICogYWxsIG91dGdvaW5nIEhUVFAgcmVxdWVzdHMgYXV0b21hdGljYWxseSBoYXZlIGl0IGF0dGFjaGVkLiBUaGlzIGlzIGp1c3RcbiAqIGEgc2ltcGxlIGNvbnZlbmllbmNlIHNvIHdlIGRvbid0IGhhdmUgdG8gYXR0YWNoIGV2ZXJ5IHRva2VuIG1hbnVhbGx5LlxuICovXG5cbmxldCB0b2tlbiA9IGRvY3VtZW50LmhlYWQucXVlcnlTZWxlY3RvcignbWV0YVtuYW1lPVwiY3NyZi10b2tlblwiXScpXG5cbmlmICh0b2tlbikge1xuICAgIC8vIHdpbmRvdy5heGlvcy5kZWZhdWx0cy5oZWFkZXJzLmNvbW1vblsnWC1DU1JGLVRPS0VOJ10gPSB0b2tlbi5jb250ZW50XG59IGVsc2Uge1xuICAgIGNvbnNvbGUuZXJyb3IoJ0NTUkYgdG9rZW4gbm90IGZvdW5kOiBodHRwczovL2xhcmF2ZWwuY29tL2RvY3MvY3NyZiNjc3JmLXgtY3NyZi10b2tlbicpXG59XG5cbi8qKlxuICogRWNobyBleHBvc2VzIGFuIGV4cHJlc3NpdmUgQVBJIGZvciBzdWJzY3JpYmluZyB0byBjaGFubmVscyBhbmQgbGlzdGVuaW5nXG4gKiBmb3IgZXZlbnRzIHRoYXQgYXJlIGJyb2FkY2FzdCBieSBMYXJhdmVsLiBFY2hvIGFuZCBldmVudCBicm9hZGNhc3RpbmdcbiAqIGFsbG93cyB5b3VyIHRlYW0gdG8gZWFzaWx5IGJ1aWxkIHJvYnVzdCByZWFsLXRpbWUgd2ViIGFwcGxpY2F0aW9ucy5cbiAqL1xuXG4vKipcbmltcG9ydCBFY2hvIGZyb20gJ2xhcmF2ZWwtZWNobydcblxud2luZG93LlB1c2hlciA9IHJlcXVpcmUoJ3B1c2hlci1qcycpXG5cbndpbmRvdy5FY2hvID0gbmV3IEVjaG8oe1xuICAgIGJyb2FkY2FzdGVyOiAncHVzaGVyJyxcbiAgICBrZXk6ICAgICAgICAgd2luZG93LkFwcC5wdXNoZXIua2V5LFxuICAgIGNsdXN0ZXI6ICAgICB3aW5kb3cuQXBwLnB1c2hlci5jbHVzdGVyLFxuICAgIGVuY3J5cHRlZDogICB0cnVlLFxufSlcbioqL1xuXG5jbGFzcyBPdXRsaW5lIHtcbiAgICBjb25zdHJ1Y3RvcigpIHtcbiAgICAgICAgdGhpcy5ib290ID0gKCkgPT4ge31cbiAgICB9XG5cbiAgICBib290aW5nKGNhbGxiYWNrKSB7XG4gICAgICAgIHRoaXMuYm9vdCA9IGNhbGxiYWNrXG4gICAgfVxufVxuXG53aW5kb3cuT3V0bGluZSA9IG5ldyBPdXRsaW5lXG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gLi9yZXNvdXJjZXMvYXNzZXRzL2pzL2Jvb3RzdHJhcC5qcyJdLCJzb3VyY2VSb290IjoiIn0=