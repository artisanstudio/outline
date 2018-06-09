Vue.component('card', require('./components/Card'))
Vue.component('menu-item', require('./components/MenuItem'))

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
