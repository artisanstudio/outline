<template>
  <a :href="route" class="card [ no-underline text-14 text-grey-darkest border rounded flex flex-col relative ]">
    <button class="card-actions button [
        p-1 absolute flex items-center justify-center
        hover:bg-offwhite hover:border-grey-lighter
      ]" type="button" v-if="hasMenu()" @click.prevent="openMenu">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </button>

    <slot></slot>
  </a>
</template>

<script>
export default {
    props: ['route'],

    methods: {
        hasMenu() {
            return this.$slots.hasOwnProperty('menu')
        },

        openMenu() {
            console.error('test');
        }
    },
}
</script>

<style lang="postcss" scoped>
.card, .card-actions {
    transition: box-shadow 0.2s, transform 0.2s ease-in-out;
}

.card:hover {
    transform:  translateY(-2px);
    box-shadow: config('shadows.lg');
}

.card-actions:hover {
    transform:  translateY(-2px);
    box-shadow: config('shadows.md');
}

.card-actions {
    top:   config('padding.4');
    right: config('padding.4');
    height: 36px;
    width:  36px;
}

.card-actions .dot + .dot {
    margin-left: 3px;
}

.card-actions .dot {
    height:           3px;
    width:            3px;
    display:          block;
    background-color: config('colors.grey');
    border-radius:    100%;
}

.card-actions:hover .dot {
    background-color: config('colors.grey-dark');
}
</style>
