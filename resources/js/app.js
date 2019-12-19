import Swup from 'swup';
import SwupScrollPlugin from '@swup/scroll-plugin';
import SwupHeadPlugin from '@swup/head-plugin';
import SwupPreloadPlugin from '@swup/preload-plugin';
import SwupDebugPlugin from '@swup/debug-plugin';

const swup = new Swup({
    containers: ['#swup', '#chooser'],
    plugins: [
        new SwupHeadPlugin(),
        new SwupPreloadPlugin(),
        new SwupScrollPlugin({
            animateScroll: true
        }),
        new SwupDebugPlugin()
    ],
});

import Vue from 'vue';
import SiteChooser from "./components/SiteChooser";
import MenuDynamic from "./components/Menu";
import ArticleTitle from "./components/Title";

function mount() {
    new Vue({
        el: '#app',
        components: {SiteChooser}
    });

    new Vue({
        el: "#menuVue",
        components: {MenuDynamic}
    });

    new Vue({
        el: "#articles",
        components: {ArticleTitle}
    });
}
mount();

swup.on('contentReplaced', mount);
