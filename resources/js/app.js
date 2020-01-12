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
import axios from "axios";

Vue.prototype.$axios = axios;

let app, menu, articles;

function mount() {
    app = new Vue({
        el: '#app',
        components: {SiteChooser}
    });

    menu = new Vue({
        el: "#menuVue",
        components: {MenuDynamic}
    });

    articles = new Vue({
        el: "#articles",
        components: {ArticleTitle}
    });
}

function unMount() {
    app.$destroy();
    menu.$destroy();
    articles.$destroy();
}
mount();

swup.on('contentReplaced', mount);
swup.on('willReplaceContent', unMount);
