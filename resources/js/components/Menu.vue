<template>
    <nav>
        <div class="w3-hide-large w3-theme-dark w3-right-align border-bottom-left-round" :class="PhoneMenu">
            <button id="collapseBtn" class="hamburger hamburger--slider" :class="{ 'is-active': isActive } " type="button" v-on:click="Toggle">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
            </button>

            <div id="menuCollapse" class="w3-bar-block" v-show="isActive">
                <a class="w3-bar-item w3-button" v-for="(link, id) in links" v-html="link" v-on:click.prevent="ScrollTo(id)"></a>
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
    import axios from "axios";

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
            /**
             * @return {string}
             */
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

            let formData = new FormData();
            formData.append("Studio", this.isStudio);

            axios.post('/api/menu',
                formData,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(resp => {
                this.links = resp.data.menu;
                this.logoPath = resp.data.logo;
            }).catch(() => {
                console.log("Error loading menu")
            });
        },

        destroyed() {
            window.removeEventListener('scroll', this.handleScroll);
        }
    }
</script>
