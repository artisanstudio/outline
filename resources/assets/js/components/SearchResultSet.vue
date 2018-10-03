<template>
    <section class="set search-result-set">
        <header class="header">
            <h2 class="title">
                {{ name }}
                <span class="length">({{ results.length }})</span>
            </h2>
        </header>

        <div class="results">
            <a :href="result.link" class="result" v-for="result in resultsToShow">
                <img class="image" v-if="result.image" :src="result.image">
                <div class="content">
                    <h3 class="title">{{ result.title }}</h3>
                    <p class="subtitle">{{ result.subtitle }}</p>
                </div>
            </a>
        </div>
    </section>
</template>

<script>
export default {
    props: {
        name: String,
        results: Array,
    },

    computed: {
        resultsToShow() {
            return this.results.slice(0, 6)
        },
    },
}
</script>
