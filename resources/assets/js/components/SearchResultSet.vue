<template>
    <section class="result">
        <h2 class="title uppercase ms-base border-b mb-4">
            {{ name }}
            <small>{{ results.length }}</small>
        </h2>


        <span v-if="! results.length">No results</span>
        <ul class="list-reset" v-else>
            <li v-for="result in results">
                <strong v-if="result.title">{{ result.title }}</strong>
                <strong v-else>{{ result.id }}</strong>
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
}
</script>
