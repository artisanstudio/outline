<template>
    <section class="result">
        <h2 class="title uppercase ms-base border-b mb-4">
            {{ name }}
            <small>{{ results.length }}</small>
        </h2>


        <span v-if="! results.length">No results</span>
        <ul class="list-reset" v-else>
            <li class="flex mb-2" v-for="result in resultsToShow">
                <img class="h-8 w-8" v-if="result.image" :src="result.image">
                <div class="content ml-2">
                    <h3>{{ result.title }}</h3>
                    <p>{{ result.subtitle }}</p>
                </div>
            </li>
        </ul>
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
