<script>
export default {
    props: {
        name: String,
        label: String,
    },

    data() {
        return {
            file: null,
            overlay: { open: false },
        }
    },

    methods: {
        openFileDialog() {
            this.$refs.input.click()
        },

        showOverlay() {
            this.overlay.open = true
        },

        hideOverlay() {
            this.overlay.open = false
        },

        previewImage() {
            if (! this.$refs.input.files.length) {
                return null
            }

            let reader = new FileReader();

            reader.onload = (e) => {
                this.file = e.target.result
            }

            reader.readAsDataURL(this.$refs.input.files[0]);
        },
    },
}
</script>

<template>
    <div class="asset-field" :class="{ '-empty': ! file }">
        <label :for="name" class="label">{{ label }}</label>

        <div class="preview" @mouseover="showOverlay()" @mouseleave="hideOverlay()">
            <img class="image" ref="image" :src="file">

            <transition name="fade">
                <button type="button" class="overlay" @click.prevent="openFileDialog()" v-if="overlay.open">
                    <template v-if="file">Change Image</template>
                    <template v-else>Add Image</template>
                </button>
            </transition>
        </div>

        <input :id="name" class="hidden" :name="name" type="file" ref="input" @change="previewImage">
    </div>
</template>
