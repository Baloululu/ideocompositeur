<template>
    <nav>
        <div class="w3-hide-large w3-theme-dark w3-right-align border-bottom-left-round" :class="PhoneMenu">
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
            <img class="w3-padding-large" style="width: 180px" :src="logoPath" alt="Logo">
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
                logoPath: "",
                oldY: 0,
                isVisible: true
            }
        },

        methods: {
            Toggle: function () {
                this.isActive = !this.isActive;
            },

            ScrollTo: function (id) {
                swup.scrollTo(document.getElementById("cat" + id))
            },

            handleScroll: function (event) {
                this.isVisible = this.oldY - window.scrollY >= 0;
                this.oldY = window.scrollY;
            }
        },

        computed: {
            PhoneMenu()
            {
                if (this.isVisible)
                {
                    return "menuVisible"
                }
                else
                {
                    return "menuInvisible"
                }
            }
        },

        mounted() {
            window.addEventListener('scroll', this.handleScroll);
            this.links = this.isStudio ? php.studioMenu : php.compoMenu;
            this.logoPath = this.isStudio ? php.logoNeeroPath : php.logoIdeoPath;
        },

        destroyed() {
            window.removeEventListener('scroll', this.handleScroll);
        }
    }
</script>
