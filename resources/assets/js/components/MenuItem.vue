<template>
<li class="[ px-8 py-4 whitespace-no-wrap hover:bg-grey-lightest ]">
  <slot></slot>
</li>
</template>

<script>
export default {
}
</script>

<style scoped>
li a, li button, li form {
  display: block;
}

li a {
  text-decoration: none;
}
</style>
