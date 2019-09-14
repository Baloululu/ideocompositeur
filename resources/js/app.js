import Swup from 'swup';
import SwupScrollPlugin from '@swup/scroll-plugin';
import SwupHeadPlugin from '@swup/head-plugin';
import SwupPreloadPlugin from '@swup/preload-plugin';

const swup = new Swup({
    containers: ['#swup'],
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

function mount() {
    const app = new Vue({
        el: '#app',
        components: {SiteChooser}
    });
}
mount();

swup.on('contentReplaced', mount);
