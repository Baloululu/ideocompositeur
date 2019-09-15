<template>
    <nav class="w3-theme-dark round-bottom-left-corner w3-right-align">
        <button id="collapseBtn" class="hamburger hamburger--slider" :class="{ 'is-active': isActive } " type="button" v-on:click="Toggle">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
        </button>

        <div id="menuCollapse" class="w3-bar-block" v-show="isActive">
            <a href="#" class="w3-bar-item w3-button" v-for="link in links" v-html="link"></a>
        </div>
    </nav>
</template>

<script>
    export default {
        props: {
            links: {type: Array}
        },

        data () {
            return {
                isActive: false,
            }
        },

        methods: {
            "Toggle": function () {
                this.isActive = !this.isActive;
            }
        }
    }
</script>
