<template>
    <div class="imageTitle" v-on:resize="Resize" v-bind:style="{ 'backgroundImage': 'url(' + titleImageUrl + ')' }">
        <h1>{{ title }}</h1>
    </div>
</template>

<script>
    export default {
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
            "Resize": function () {
                this.titleImageUrl = this.image;
            }
        },

        mounted() {
            this.Resize();
        }
    }
</script>
