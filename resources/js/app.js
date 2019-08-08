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

let compo = null;
let studio = null;

function compoEnter() {
    compo.classList.add("large");
    studio.classList.add("small");
}

function studioEnter() {
    studio.classList.add("large");
    compo.classList.add("small");
}

function compoLeave() {
    compo.classList.remove("large");
    studio.classList.remove("small");
}

function studioLeave() {
    studio.classList.remove("large");
    compo.classList.remove("small");
}

function mount() {
    compo = document.getElementById("compo");
    studio = document.getElementById("studio");

    if (compo)
    {
        compo.addEventListener("mouseenter", compoEnter);
        compo.addEventListener("mouseleave", compoLeave);
    }

    if (studio)
    {
        studio.addEventListener("mouseenter", studioEnter);
        studio.addEventListener("mouseleave", studioLeave);
    }
    console.log("mount");
}

function unmount() {
    if (compo)
    {
        compo.removeEventListener("mouseenter", compoEnter);
        compo.removeEventListener("mouseleave", compoLeave);
    }

    if (studio)
    {
        studio.removeEventListener("mouseenter", studioEnter);
        studio.removeEventListener("mouseleave", studioLeave);
    }

    compo = null;
    studio = null;

    console.log("unmount");
}

mount();

swup.on('contentReplaced', mount);
swup.on('willReplaceContent', unmount);

// swup.on('pagePreloaded', function () {
//     console.log('preload');
// });