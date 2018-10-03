<template>
<section class="search-overlay">
    <h1 class="title">Search Everywhere</h1>
    <p class="caption">Shortcut: Press <strong><code>/</code></strong> to search in future</p>

    <input id="global-search" class="input" name="" type="text" placeholder="Type Here..." ref="input">
</section>
</template>

<script>
export default {
    created() {
        this.$nextTick(() => {
            this.$refs.input.focus()
        })
    },
}
</script>
