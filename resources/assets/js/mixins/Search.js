export default {
    data() {
        return {
            search: { open: false },
        }
    },

    mounted() {
        window.addEventListener('keyup', (event) => {
            event.preventDefault()

            if (event.key === '/') {
                this.search.open = true
            }

            if (event.key === 'Escape') {
                this.search.open = false
            }
        })

        window.addEventListener('paste', (event) => {
            this.search.open = true

            this.$nextTick(() => {
                document.querySelector('#global-search').focus()
                document.querySelector('#global-search').select()
            })
        })
    },

    methods: {
        openGlobalSearch() {
            this.isSearching = true
        },

        closeGlobalSearch() {
            this.isSearching = false
        },
    },
}
