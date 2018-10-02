<template>
    <div class="card" :class="{ '-active': menu.open }">
        <button class="kebab button" type="button" @click.prevent="toggleMenu" v-if="hasMenu()">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </button>

        <transition name="animate">
            <nav class="menu" v-if="menu.open">
                <ul class="menu-items">
                    <slot name="menu"></slot>
                </ul>
            </nav>
        </transition>

        <transition name="fade">
            <div class="overlay" v-if="menu.open" @click.prevent="toggleMenu()"></div>
        </transition>

        <a :href="route" class="content">
            <slot></slot>
        </a>
    </div>
</template>

<script>
export default {
    props: ['route'],

    data() {
        return {
            menu: { open: false },
        }
    },

    methods: {
        hasMenu() {
            return this.$slots.hasOwnProperty('menu')
        },

        toggleMenu() {
            this.menu.open = ! this.menu.open
        },
    },
}
</script>
