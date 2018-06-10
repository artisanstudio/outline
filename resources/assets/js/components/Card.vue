<template>
    <div class="card" :class="{ '[ is-active ]': menu.open }">
        <button class="card-menu-button button" type="button"
                @click.prevent="toggleMenu" v-if="hasMenu()">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </button>

        <transition name="card-menu-animation">
            <nav class="card-menu" v-if="menu.open">
                <ul class="card-menu-ul">
                    <slot name="menu"></slot>
                </ul>
            </nav>
        </transition>

        <transition name="fade">
            <div class="card-overlay" v-if="menu.open" @click.prevent="toggleMenu()"></div>
        </transition>

        <a :href="route" class="card-content">
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
