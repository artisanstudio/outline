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

new Vue({
    el: '#app',

    data: {
        sidebar: { open: false },
    },

    methods: {
        openSidebar() {
            this.sidebar.open = true
        },

        closeSidebar() {
            this.sidebar.open = false
        },
    },
})
