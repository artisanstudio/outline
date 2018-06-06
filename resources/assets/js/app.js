import Vue from 'vue'

Vue.component('card', require('./components/Card'))

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
