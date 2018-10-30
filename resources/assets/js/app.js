import Vue from 'vue'
import VueNotification from 'vue-notification'
import velocity from 'velocity-animate'

// Vue.config.devtools = true

/**
 * The bootstrap.js file isn't bundled up with this file so userland
 * can plug in custom components through the 'scripts' stack.
 *
 * The Vue dependency is registered via window as a compromise since
 * I still have no other idea how to implement something better.
 */
// import axios from 'axios'
Vue.use(VueNotification, { velocity })

/**
 * Let's create our state handler for Vue. Another problem is if
 * components from userland wants to access this, I might end up
 * moving this to the bootstrap file.
 *
 * For now, it'll stay here.
 */

import store from './vuex/store'
import Sidebar from './mixins/Sidebar.js'
import Search from './mixins/Search.js'
import Alert from './mixins/Alert.js'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('search-overlay', require('./components/SearchOverlay'))
Vue.component('card', require('./components/Card'))
Vue.component('asset-field', require('./components/AssetField'))
Vue.component('menu-item', require('./components/MenuItem'))

Vue.component('csrf', {
    template: `<input type="hidden" name="_token" :value="csrfToken">`,

    computed: {
        csrfToken() {
            return document.head.querySelector('meta[name="csrf-token"]').content
        },
    },
})

const app = new Vue({
    store,

    mixins: [ Sidebar, Search, Alert ],

    computed: {
        notification() {
            return window.Admin.notification
        },
    },

    mounted() {
        if (this.notification) {
            this.$notify({
                type:  this.notification.type,
                title: this.notification.title,
                text:  this.notification.content,
            })
        }
    },
})

window.Outline.boot.bind(app)(Vue)

app.$mount('#app')
