<template>
    <div class="imageTitle" v-resize:debounce="Resize" v-resize:initial="Resize"
         ref="background" v-bind:style="{ 'backgroundImage': 'url(' + titleImageUrl + ')' }">
        <h1>{{ title }}</h1>
    </div>
</template>

<script>
    import resize from 'vue-resize-directive';

    export default {
        directives: {
            resize,
        },

        props: {
            image: {type: String, required: true},
            title: {type: String, required: true}
        },

        data() {
            return {
                titleImageUrl: ""
            }
        },

        methods: {
            Resize: function () {
                let width = this.$refs.background.clientWidth;

                if (width <= 800)
                {
                    this.titleImageUrl = this.image + "/small.jpg";
                }
                else if (width <= 1280)
                {
                    this.titleImageUrl = this.image + "/medium.jpg";
                }
                else
                {
                    this.titleImageUrl = this.image + "/large.jpg";
                }
            }
        }
    }
</script>
