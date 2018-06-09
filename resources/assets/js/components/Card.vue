<template>
  <div class="card [ relative border rounded z-0 ]" :class="{ '[ is-active ]': menu.open }">
    <div class="card-menu-container [ absolute z-50 ]" v-if="hasMenu()">
      <button class="card-actions button [ p-1 hover:bg-offwhite hover:border-grey-lighter flex items-center justify-center ]"
              type="button" @click.prevent="toggleMenu">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </button>

      <transition name="pop">
        <nav v-if="menu.open" class="card-menu [ bg-white absolute shadow-md z-50 bg-white rounded-sm border ]" style="top: 40px; left: -100%;">
          <ul class="[ list-reset m-0 p-0 text-14 ]">
            <slot name="menu"></slot>
          </ul>
        </nav>
      </transition>
    </div>

    <a :href="route" class="card-content [ no-underline text-14 text-grey-darkest flex flex-col h-full z-0 ]">
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
        }
    },
}
</script>

<style lang="postcss">
.card-menu-container {
    top:   config('padding.4');
    right: config('padding.4');
}

.card-actions:focus {
    outline: none;
}

.card,
.card-actions {
    transition: box-shadow 0.2s, transform 0.2s ease-in-out;
}

.card.is-active,
.card:hover {
    transform:  translateY(-2px);
    box-shadow: config('shadows.lg');
}

.card-actions:hover {
    transform:  translateY(-2px);
    box-shadow: config('shadows.md');
}

.card-actions {
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

.pop-enter-active, .pop-leave-active {
    transition: transform 0.35s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.pop-enter, .pop-leave-to {
    transform: scale(0);
}
</style>
