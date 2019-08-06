import Swup from 'swup';
import SwupScrollPlugin from '@swup/scroll-plugin';

const swup = new Swup({
    containers: ['#swup'],
    plugins: [
        new SwupScrollPlugin({
            animateScroll: false
        }),
    ],
});
