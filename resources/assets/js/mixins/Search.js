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

        window.addEventListener('paste', (event) => {
            this.isSearching = true

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
    },
}
