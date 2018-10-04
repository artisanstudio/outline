export default {
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
}
