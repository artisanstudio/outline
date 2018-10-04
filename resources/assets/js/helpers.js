export const tap = (object, callback = null) => {
    if (callback) {
        callback(object)

        return object
    }

    return new Proxy(object, {
        get: function (target, attribute) {
            return function (...args) {
                target[attribute].apply(target, args)

                return target
            }
        },
    })
}

export const widont = string => string.replace(/\s(?![\s\S]*\s)/, '\u00a0')

export const debounce = (func, wait, immediate) => {
	  var timeout;

	  return function() {
		    var context = this, args = arguments;
		    var later = function() {
			      timeout = null;
			      if (!immediate) func.apply(context, args);
		    };
		    var callNow = immediate && !timeout;
		    clearTimeout(timeout);
		    timeout = setTimeout(later, wait);
		    if (callNow) func.apply(context, args);
	  };
};
