import Vue from 'vue'

import "./bootstrap.js"

/**
 * The bootstrap.js file isn't bundled up with this file so userland
 * can plug in custom components through the 'scripts' stack.
 *
 * The Vue dependency is registered via window as a compromise since
 * I still have no other idea how to implement something better.
 */
// import axios from 'axios'

/**
 * Let's create our state handler for Vue. Another problem is if
 * components from userland wants to access this, I might end up
 * moving this to the bootstrap file.
 *
 * For now, it'll stay here.
 */

import store from './vuex/store'
import Sidebar from './mixins/Sidebar.js'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('card', require('./components/Card'))
Vue.component('menu-item', require('./components/MenuItem'))

Vue.component('csrf', {
    template: `<input type="hidden" name="_token" :value="csrfToken">`,

    computed: {
        csrfToken() {
            return document.head.querySelector('meta[name="csrf-token"]').content
        },
    },
})

/**
 * Hook user-land components before mounting our Vue instance.
 */
window.Outline.boot(Vue)

const app = new Vue({
    el: '#app',

    store,

    mixins: [
        Sidebar,
    ],
})
