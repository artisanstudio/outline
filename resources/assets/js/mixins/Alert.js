export default {
    data: {
        alert: { open: true }
    },

    methods: {
        closeAlertMessage() {
            this.alert.open = false
        },
    },
}
