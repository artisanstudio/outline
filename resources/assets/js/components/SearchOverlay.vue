<template>
    <section class="search-overlay">
        <button class="close" href="#" @click.prevent="$emit('close')">
            <i class="icon icon-x"></i>
            <abbr class="shortcut" title="Close Search">esc</abbr>
        </button>

        <h1 class="title">Search Everywhere</h1>
        <p class="caption">Shortcut: Press <strong><code>/</code></strong> or <strong>paste</strong> to search in future</p>

        <input id="global-search" class="input" name="" type="text" placeholder="Type Here..." ref="input" @keyup="search" v-model="query">

        <div class="loader mt-8" v-if="isLoading">
            <div></div> <div></div> <div></div>
        </div>

        <section class="results mt-8" v-if="! isLoading && hasResults">
            <SearchResultSet v-for="(items, name) in results" :name="name" :results="items" :key="name" v-if="items.length">
            </SearchResultSet>
        </section>

        <p v-if="! isLoading && ! hasResults && query">No results</p>
    </section>
</template>

<script>
import { debounce } from '../helpers.js'
import axios from 'axios'
import SearchResultSet from './SearchResultSet'

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
    
    computed: {
        hasResults() {
            let hasResults = false;

            for (var key in this.results) {
                if (this.results[key].length) {
                    hasResults = true
                }
            }

            return hasResults
        },
    },

    data: () => ({
        query:     null,
        results:   {},
        isLoading: false,
    }),

    methods: {
        search: debounce(function (event) {
            let q = event.target.value

            if (! q) {
                this.results = {}
                return
            }

            this.isLoading = true

            axios.get(this.api, {
                params: { q }
            }).then((response) => {
                this.results = response.data
                this.isLoading = false
            })
        }, 300),
    },
}
</script>
