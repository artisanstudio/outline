<template>
    <section class="search-overlay">
        <button class="close" href="#" @click.prevent="$emit('close')">
            <i class="icon icon-x"></i>
            <abbr class="shortcut" title="Close Search">esc</abbr>
        </button>

        <h1 class="title">Search Everywhere</h1>
        <p class="caption">Shortcut: Press <strong><code>/</code></strong> or <strong>paste</strong> to search in future</p>

        <input id="global-search" class="input" name="" type="text" placeholder="Type Here..." ref="input" @keyup="search">

        <section class="results mt-8">
            <SearchResultSet v-for="(items, name) in results" :name="name" :results="items" :key="name">
            </SearchResultSet>
        </section>
    </section>
</template>

<script>
import axios from 'axios'
import SearchResultSet from './SearchResultSet'
import { debounce } from '../helpers.js'

export default {
    props: { api: String },

    components: {
        SearchResultSet
    },

    created() {
        this.$nextTick(() => {
            this.$refs.input.focus()
        })
    },

    data() {
        return {
            results: {}
        }
    },

    methods: {
        search: debounce(function (event) {
            let q = event.target.value

            if (! q) {
                this.results = {}
                return
            }

            axios.get(this.api, {
                params: { q }
            }).then((response) => {
                this.results = response.data
            })
        }, 300),
    },
}
</script>
