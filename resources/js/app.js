import Swup from 'swup';
import SwupScrollPlugin from '@swup/scroll-plugin';
import SwupHeadPlugin from '@swup/head-plugin';
import SwupPreloadPlugin from '@swup/preload-plugin';

const swup = new Swup({
    containers: ['#swup', '#chooser'],
    plugins: [
        new SwupScrollPlugin({
            animateScroll: false
        }),
        new SwupHeadPlugin(),
        new SwupPreloadPlugin(),
    ],
});

import Vue from 'vue';
import SiteChooser from "./components/SiteChooser";
import MenuDynamic from "./components/Menu";

function mount() {
    new Vue({
        el: '#app',
        components: {SiteChooser}
    });

    new Vue({
        el: "#menuVue",
        components: {MenuDynamic}
    });
}
mount();

swup.on('contentReplaced', mount);
