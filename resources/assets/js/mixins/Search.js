export default {
    data() {
        return {
            isSearching: false,
        }
    },

    mounted() {
        window.addEventListener('keyup', (event) => {
            event.preventDefault()

            if (event.key === '/') {
                this.isSearching = true
            }

            if (event.key === 'Escape') {
                this.isSearching = false
            }
        })
    },

    methods: {
        openGlobalSearch() {
            this.isSearching = true
        },
    },
}
