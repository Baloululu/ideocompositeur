<template>
    <div class="w3-center w3-row" style="height: 100%">
        <a id="studio" class="w3-col w3-block" :class="{small: IsCompo, large: IsStudio}" :href="studioRoute" data-swup-preload
           @mouseenter="studioSelected = true"
           @mouseleave="studioSelected = false"
        >
            <div class="w3-display-container dark-grey" style="height: 100%">
                <div class="w3-container w3-display-left w3-center width100">
                    <p style="margin: 0" :class="{ 'w3-Xlarge': IsStudio }">STUDIO</p>
                </div>
            </div>
        </a>

        <div class="w3-col diagonalsvg" style="width: 10%; height: 100%">
        </div>

        <a id="compo" class="w3-col w3-block" :class="{large: IsCompo, small: IsStudio}" :href="compoRoute" data-swup-preload
           @mouseenter="compoSelected = true"
           @mouseleave="compoSelected = false"
        >
            <div class="w3-display-container dark-red" style="height: 100%">
                <div class="w3-container w3-display-left w3-center width100">
                    <p style="margin: 0" :class="{ 'w3-Xlarge': IsCompo }">MES COMPOS</p>
                </div>
            </div>
        </a>
    </div>
</template>

<script>
    export default {
        props: {
            studio: {type: Boolean, default: false},
            compo: {type: Boolean, default: false}
        },

        data () {
            return {
                studioSelected: false,
                compoSelected: false,
                compoRoute: php.compoPath,
                studioRoute: php.studioPath
            }
        },

        computed: {
            /**
             * @return {boolean}
             */
            "IsStudio": function () {
                return this.studioSelected ? true : (this.compoSelected ? false : this.studio)
            },

            /**
             * @return {boolean}
             */
            "IsCompo": function () {
                return this.compoSelected ? true : (this.studioSelected ? false : this.compo)
            }
        }
    }
</script>
