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
