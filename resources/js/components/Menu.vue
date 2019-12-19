<template>
    <nav>
        <div class="w3-hide-large w3-theme-dark w3-right-align border-bottom-left-round">
            <button id="collapseBtn" class="hamburger hamburger--slider" :class="{ 'is-active': isActive } " type="button" v-on:click="Toggle">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
            </button>

            <div id="menuCollapse" class="w3-bar-block" v-show="isActive">
                <a href="#" class="w3-bar-item w3-button" v-for="link in links" v-html="link"></a>
            </div>
        </div>

        <div class="w3-bar-block w3-hide-medium w3-hide-small">
            <img class="w3-padding-large" style="height: 80px; margin-bottom: 15px" :src="logoPath" alt="Logo">
            <div id="menuLarge" class="w3-theme-dark w3-round w3-large" style="height: 100%">
                <a class="w3-bar-item w3-button" v-for="(link, id) in links" v-html="link" v-on:click.prevent="ScrollTo(id)"></a>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        props: {
            isStudio: {type: Boolean}
        },

        data () {
            return {
                isActive: false,
                links: [],
                logoPath: php.logoPath
            }
        },

        methods: {
            "Toggle": function () {
                this.isActive = !this.isActive;
            },

            "ScrollTo": function ($id) {
                swup.scrollTo(document.getElementById("cat" + $id))
            }
        },

        mounted() {
            this.links = this.isStudio ? php.studioMenu : php.compoMenu;
        }
    }
</script>
