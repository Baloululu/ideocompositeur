!function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=0)}({"+3Np":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},r=n("izH8");t.default=function(e,t){var n=e.replace("<body",'<div id="swupBody"').replace("</body>","</div>"),i=document.createElement("div");i.innerHTML=n;for(var a=[],s=function(e){if(null==i.querySelector(t[e]))return{v:null};(0,r.queryAll)(t[e]).forEach(function(n,o){(0,r.queryAll)(t[e],i)[o].setAttribute("data-swup",a.length),a.push((0,r.queryAll)(t[e],i)[o].outerHTML)})},l=0;l<t.length;l++){var u=s(l);if("object"===(void 0===u?"undefined":o(u)))return u.v}var c={title:i.querySelector("title").innerText,pageClass:i.querySelector("#swupBody").className,originalContent:e,blocks:a};return i.innerHTML="",i=null,c}},0:function(e,t,n){n("bUC5"),n("hbyh"),n("oMDg"),n("sr85"),e.exports=n("2Qb6")},"1Xf+":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}();var r=function(){function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),t instanceof Element||t instanceof SVGElement?this.link=t:(this.link=document.createElement("a"),this.link.href=t)}return o(e,[{key:"getPath",value:function(){var e=this.link.pathname;return"/"!==e[0]&&(e="/"+e),e}},{key:"getAddress",value:function(){var e=this.link.pathname+this.link.search;return this.link.getAttribute("xlink:href")&&(e=this.link.getAttribute("xlink:href")),"/"!==e[0]&&(e="/"+e),e}},{key:"getHash",value:function(){return this.link.hash}}]),e}();t.default=r},"2Qb6":function(e,t){},"2jTK":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=n("izH8");t.default=function(e,t){for(var n=0,r=function(r){null==e.querySelector(t[r])?console.warn("Element "+t[r]+" is not in current page."):(0,o.queryAll)(t[r]).forEach(function(i,a){(0,o.queryAll)(t[r],e)[a].setAttribute("data-swup",n),n++})},i=0;i<t.length;i++)r(i)}},"6G6b":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});t.default=function(){return window.location.pathname+window.location.search}},"9S/K":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&(e[o]=n[o])}return e},r=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}(),i=s(n("fN7r")),a=s(n("mdSH"));function s(e){return e&&e.__esModule?e:{default:e}}var l=function(e){function t(e){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t);var n=function(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}(this,(t.__proto__||Object.getPrototypeOf(t)).call(this));n.name="ScrollPlugin",n.onSamePage=function(){n.swup.scrollTo(0)},n.onSamePageWithHash=function(e){var t=e.delegateTarget,o=document.querySelector(t.hash).getBoundingClientRect().top+window.pageYOffset;n.swup.scrollTo(o)},n.onTransitionStart=function(e){n.options.doScrollingRightAway&&!n.swup.scrollToElement&&n.doScrolling(e)},n.onContentReplaced=function(e){n.options.doScrollingRightAway&&!n.swup.scrollToElement||n.doScrolling(e)},n.doScrolling=function(e){var t=n.swup;if(!e||t.options.animateHistoryBrowsing)if(null!=t.scrollToElement){var o=document.querySelector(t.scrollToElement);if(null!=o){var r=o.getBoundingClientRect().top+window.pageYOffset;t.scrollTo(r)}else console.warn("Element "+t.scrollToElement+" not found");t.scrollToElement=null}else t.scrollTo(0)};return n.options=o({},{doScrollingRightAway:!1,animateScroll:!0,scrollFriction:.3,scrollAcceleration:.04},e),n}return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}(t,i.default),r(t,[{key:"mount",value:function(){var e=this,t=this.swup;t._handlers.scrollDone=[],t._handlers.scrollStart=[],this.scrl=new a.default({onStart:function(){return t.triggerEvent("scrollStart")},onEnd:function(){return t.triggerEvent("scrollDone")},onCancel:function(){return t.triggerEvent("scrollDone")},friction:this.options.scrollFriction,acceleration:this.options.scrollAcceleration}),t.scrollTo=function(n){e.options.animateScroll?e.scrl.scrollTo(n):(t.triggerEvent("scrollStart"),window.scrollTo(0,n),t.triggerEvent("scrollDone"))},t.options.animateHistoryBrowsing&&(window.history.scrollRestoration="manual"),t.on("samePage",this.onSamePage),t.on("samePageWithHash",this.onSamePageWithHash),t.on("transitionStart",this.onTransitionStart),t.on("contentReplaced",this.onContentReplaced)}},{key:"unmount",value:function(){this.swup.scrollTo=null,delete this.scrl,this.scrl=null,this.swup.off("samePage",this.onSamePage),this.swup.off("samePageWithHash",this.onSamePageWithHash),this.swup.off("transitionStart",this.onTransitionStart),this.swup.off("contentReplaced",this.onContentReplaced),this.swup._handlers.scrollDone=null,this.swup._handlers.scrollStart=null,window.history.scrollRestoration="auto"}}]),t}();t.default=l},BYqk:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&(e[o]=n[o])}return e};t.default=function(e){var t=arguments.length>1&&void 0!==arguments[1]&&arguments[1],n={url:window.location.pathname+window.location.search,method:"GET",data:null,headers:{}},r=o({},n,e),i=new XMLHttpRequest;return i.onreadystatechange=function(){4===i.readyState&&(i.status,t(i))},i.open(r.method,r.url,!0),Object.keys(r.headers).forEach(function(e){i.setRequestHeader(e,r.headers[e])}),i.send(r.data),i}},CvEM:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});t.default=function(){var e=document.createElement("div"),t={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"};for(var n in t)if(void 0!==e.style[n])return t[n];return!1}},HhxY:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});t.default=function(e,t){var n=this;if(null!=e)if(null!=t)if(this._handlers[e]&&this._handlers[e].filter(function(e){return e===t}).length){var o=this._handlers[e].filter(function(e){return e===t})[0],r=this._handlers[e].indexOf(o);r>-1&&this._handlers[e].splice(r,1)}else console.warn("Handler for event '"+e+"' no found.");else this._handlers[e]=[];else Object.keys(this._handlers).forEach(function(e){n._handlers[e]=[]})}},Ijqz:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});t.default=function(e,t,n){this.transition={from:e,to:t,custom:n}}},NWnN:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&(e[o]=n[o])}return e},r=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}(),i=y(n("jFDo")),a=y(n("XVVL")),s=y(n("iwYJ")),l=y(n("k1yQ")),u=y(n("hwaQ")),c=y(n("c+2F")),f=y(n("HhxY")),d=y(n("Ijqz")),p=y(n("hCH/")),h=y(n("lt5t")),g=n("qRPr"),m=n("izH8"),v=n("YVRM");function y(e){return e&&e.__esModule?e:{default:e}}var w=function(){function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e);var n={animateHistoryBrowsing:!1,animationSelector:'[class*="transition-"]',linkSelector:'a[href^="'+window.location.origin+'"]:not([data-no-swup]), a[href^="/"]:not([data-no-swup]), a[href^="#"]:not([data-no-swup])',cache:!0,containers:["#swup"],requestHeaders:{"X-Requested-With":"swup",Accept:"text/html, application/xhtml+xml"},plugins:[],skipPopStateHandling:function(e){return!(e.state&&"swup"===e.state.source)}},r=o({},n,t);this._handlers={animationInDone:[],animationInStart:[],animationOutDone:[],animationOutStart:[],animationSkipped:[],clickLink:[],contentReplaced:[],disabled:[],enabled:[],openPageInNewTab:[],pageLoaded:[],pageRetrievedFromCache:[],pageView:[],popState:[],samePage:[],samePageWithHash:[],serverError:[],transitionStart:[],transitionEnd:[],willReplaceContent:[]},this.scrollToElement=null,this.preloadPromise=null,this.options=r,this.plugins=[],this.transition={},this.delegatedListeners={},this.cache=new a.default,this.cache.swup=this,this.loadPage=s.default,this.renderPage=l.default,this.triggerEvent=u.default,this.on=c.default,this.off=f.default,this.updateTransition=d.default,this.getAnimationPromises=p.default,this.getPageData=h.default,this.log=function(){},this.use=g.use,this.unuse=g.unuse,this.findPlugin=g.findPlugin,this.enable()}return r(e,[{key:"enable",value:function(){var e=this;if("undefined"!=typeof Promise){this.delegatedListeners.click=(0,i.default)(document,this.options.linkSelector,"click",this.linkClickHandler.bind(this)),window.addEventListener("popstate",this.popStateHandler.bind(this));var t=(0,v.getDataFromHtml)(document.documentElement.outerHTML,this.options.containers);t.url=t.responseURL=(0,v.getCurrentUrl)(),this.options.cache&&this.cache.cacheUrl(t),(0,v.markSwupElements)(document.documentElement,this.options.containers),this.options.plugins.forEach(function(t){e.use(t)}),window.history.replaceState(Object.assign({},window.history.state,{url:window.location.href,random:Math.random(),source:"swup"}),document.title,window.location.href),this.triggerEvent("enabled"),document.documentElement.classList.add("swup-enabled"),this.triggerEvent("pageView")}else console.warn("Promise is not supported")}},{key:"destroy",value:function(){var e=this;this.delegatedListeners.click.destroy(),this.delegatedListeners.mouseover.destroy(),window.removeEventListener("popstate",this.popStateHandler.bind(this)),this.cache.empty(),this.options.plugins.forEach(function(t){e.unuse(t)}),(0,m.queryAll)("[data-swup]").forEach(function(e){e.removeAttribute("data-swup")}),this.off(),this.triggerEvent("disabled"),document.documentElement.classList.remove("swup-enabled")}},{key:"linkClickHandler",value:function(e){if(e.metaKey||e.ctrlKey||e.shiftKey||e.altKey)this.triggerEvent("openPageInNewTab",e);else if(0===e.button){this.triggerEvent("clickLink",e),e.preventDefault();var t=new v.Link(e.delegateTarget);if(t.getAddress()==(0,v.getCurrentUrl)()||""==t.getAddress()){if(""!=t.getHash())this.triggerEvent("samePageWithHash",e),null!=document.querySelector(t.getHash())?history.replaceState({url:t.getAddress()+t.getHash(),random:Math.random(),source:"swup"},document.title,t.getAddress()+t.getHash()):console.warn("Element for offset not found ("+t.getHash()+")");else this.triggerEvent("samePage",e)}else{""!=t.getHash()&&(this.scrollToElement=t.getHash());var n=e.delegateTarget.getAttribute("data-swup-transition");this.loadPage({url:t.getAddress(),customTransition:n},!1)}}}},{key:"popStateHandler",value:function(e){if(!this.options.skipPopStateHandling(e)){var t=new v.Link(e.state?e.state.url:window.location.pathname);""!==t.getHash()?this.scrollToElement=t.getHash():e.preventDefault(),this.triggerEvent("popState",e),this.loadPage({url:t.getAddress()},e)}}}]),e}();t.default=w},QvXe:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}(),r=l(n("fN7r")),i=l(n("Rz1H")),a=n("izH8"),s=n("YVRM");function l(e){return e&&e.__esModule?e:{default:e}}function u(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}var c=function(e){function t(){var e,n,o;!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t);for(var r=arguments.length,i=Array(r),l=0;l<r;l++)i[l]=arguments[l];return n=o=u(this,(e=t.__proto__||Object.getPrototypeOf(t)).call.apply(e,[this].concat(i))),o.name="PreloadPlugin",o.onContentReplaced=function(){o.swup.preloadPages()},o.onMouseover=function(e){var t=o.swup;t.triggerEvent("hoverLink",e);var n=new s.Link(e.delegateTarget);n.getAddress()===(0,s.getCurrentUrl)()||t.cache.exists(n.getAddress())||null!=t.preloadPromise||(t.preloadPromise=t.preloadPage(n.getAddress()),t.preloadPromise.route=n.getAddress(),t.preloadPromise.finally(function(){t.preloadPromise=null}))},o.preloadPage=function(e){var t=o.swup,n=new s.Link(e);return new Promise(function(e,o){n.getAddress()==(0,s.getCurrentUrl)()||t.cache.exists(n.getAddress())?e(t.cache.getPage(n.getAddress())):(0,s.fetch)({url:n.getAddress(),headers:t.options.requestHeaders},function(r){if(500===r.status)t.triggerEvent("serverError"),o();else{var i=t.getPageData(r);if(null==i)return void o(n.getAddress());i.url=n.getAddress(),t.cache.cacheUrl(i,t.options.debugMode),t.triggerEvent("pagePreloaded"),e(t.cache.getPage(n.getAddress()))}})})},o.preloadPages=function(){(0,a.queryAll)("[data-swup-preload]").forEach(function(e){o.swup.preloadPage(e.href)})},u(o,n)}return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}(t,r.default),o(t,[{key:"mount",value:function(){var e=this.swup;e._handlers.pagePreloaded=[],e._handlers.hoverLink=[],e.preloadPage=this.preloadPage,e.preloadPages=this.preloadPages,e.delegatedListeners.mouseover=(0,i.default)(document.body,e.options.linkSelector,"mouseover",this.onMouseover.bind(this)),e.preloadPages(),e.on("contentReplaced",this.onContentReplaced)}},{key:"unmount",value:function(){var e=this.swup;e._handlers.pagePreloaded=null,e._handlers.hoverLink=null,e.preloadPage=null,e.preloadPages=null,e.delegatedListeners.mouseover.destroy(),e.off("contentReplaced",this.onContentReplaced)}}]),t}();t.default=c},QwAx:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});t.default=function(e){window.history.pushState({url:e||window.location.href.split(window.location.hostname)[1],random:Math.random(),source:"swup"},document.getElementsByTagName("title")[0].innerText,e||window.location.href.split(window.location.hostname)[1])}},Rz1H:function(e,t,n){var o=n("p0NV");function r(e,t,n,r,i){var a=function(e,t,n,r){return function(n){n.delegateTarget=o(n.target,t),n.delegateTarget&&r.call(e,n)}}.apply(this,arguments);return e.addEventListener(n,a,i),{destroy:function(){e.removeEventListener(n,a,i)}}}e.exports=function(e,t,n,o,i){return"function"==typeof e.addEventListener?r.apply(null,arguments):"function"==typeof n?r.bind(null,document).apply(null,arguments):("string"==typeof e&&(e=document.querySelectorAll(e)),Array.prototype.map.call(e,function(e){return r(e,t,n,o,i)}))}},XVVL:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}();var r=t.Cache=function(){function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.pages={},this.last=null}return o(e,[{key:"cacheUrl",value:function(e){e.url in this.pages==!1&&(this.pages[e.url]=e),this.last=this.pages[e.url],this.swup.log("Cache ("+Object.keys(this.pages).length+")",this.pages)}},{key:"getPage",value:function(e){return this.pages[e]}},{key:"getCurrentPage",value:function(){return this.getPage(window.location.pathname+window.location.search)}},{key:"exists",value:function(e){return e in this.pages}},{key:"empty",value:function(){this.pages={},this.last=null,this.swup.log("Cache cleared")}},{key:"remove",value:function(e){delete this.pages[e]}}]),e}();t.default=r},YVRM:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.Link=t.markSwupElements=t.getCurrentUrl=t.transitionEnd=t.fetch=t.getDataFromHtml=t.createHistoryRecord=t.classify=void 0;var o=f(n("hjPM")),r=f(n("QwAx")),i=f(n("+3Np")),a=f(n("BYqk")),s=f(n("CvEM")),l=f(n("6G6b")),u=f(n("2jTK")),c=f(n("1Xf+"));function f(e){return e&&e.__esModule?e:{default:e}}t.classify=o.default,t.createHistoryRecord=r.default,t.getDataFromHtml=i.default,t.fetch=a.default,t.transitionEnd=s.default,t.getCurrentUrl=l.default,t.markSwupElements=u.default,t.Link=c.default},bUC5:function(e,t,n){"use strict";n.r(t);var o=n("NWnN"),r=n.n(o),i=n("9S/K"),a=n.n(i),s=n("gQBE"),l=n.n(s),u=n("QvXe"),c=n.n(u),f=new r.a({containers:["#swup"],plugins:[new a.a({animateScroll:!1}),new l.a,new c.a]}),d=null,p=null;function h(){d.classList.add("large"),p.classList.add("small")}function g(){p.classList.add("large"),d.classList.add("small")}function m(){d.classList.remove("large"),p.classList.remove("small")}function v(){p.classList.remove("large"),d.classList.remove("small")}function y(){d=document.getElementById("compo"),p=document.getElementById("studio"),d&&(d.addEventListener("mouseenter",h),d.addEventListener("mouseleave",m)),p&&(p.addEventListener("mouseenter",g),p.addEventListener("mouseleave",v)),console.log("mount")}y(),f.on("contentReplaced",y),f.on("willReplaceContent",function(){d&&(d.removeEventListener("mouseenter",h),d.removeEventListener("mouseleave",m)),p&&(p.removeEventListener("mouseenter",g),p.removeEventListener("mouseleave",v)),d=null,p=null})},"c+2F":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});t.default=function(e,t){this._handlers[e]?this._handlers[e].push(t):console.warn("Unsupported event "+e+".")}},fN7r:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}();var r=function(){function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.isSwupPlugin=!0}return o(e,[{key:"mount",value:function(){}},{key:"unmount",value:function(){}},{key:"_beforeMount",value:function(){}},{key:"_afterUnmount",value:function(){}}]),e}();t.default=r},gQBE:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o,r=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}(),i=n("fN7r"),a=(o=i)&&o.__esModule?o:{default:o};function s(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}var l=function(e){function t(){var e,n,o;!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t);for(var r=arguments.length,i=Array(r),a=0;a<r;a++)i[a]=arguments[a];return n=o=s(this,(e=t.__proto__||Object.getPrototypeOf(t)).call.apply(e,[this].concat(i))),o.name="HeadPlugin",o.getHeadAndReplace=function(){var e=o.getHeadChildren(),t=o.getNextHeadChildren();o.replaceTags(e,t)},o.getHeadChildren=function(){return document.head.children},o.getNextHeadChildren=function(){var e=o.swup.cache.getCurrentPage().originalContent.replace("<head",'<div id="swupHead"').replace("</head>","</div>"),t=document.createElement("div");t.innerHTML=e;var n=t.querySelector("#swupHead").children;return t.innerHTML="",t=null,n},o.replaceTags=function(e,t){var n=document.head,r=Boolean(document.querySelector("[data-swup-theme]")),i=o.getTagsToAdd(e,t,r),a=o.getTagsToRemove(e,t,r);a.reverse().forEach(function(e){n.removeChild(e.tag)}),i.forEach(function(e){n.insertBefore(e.tag,n.children[e.index])}),o.swup.log("Removed "+a.length+" / added "+i.length+" tags in head")},o.compareTags=function(e,t){return e.outerHTML===t.outerHTML},o.getTagsToRemove=function(e,t){for(var n=[],r=0;r<e.length;r++){for(var i=null,a=0;a<t.length;a++)if(o.compareTags(e[r],t[a])){i=a;break}null==i&&null===e[r].getAttribute("data-swup-theme")&&n.push({tag:e[r]})}return n},o.getTagsToAdd=function(e,t,n){for(var r=[],i=0;i<t.length;i++){for(var a=null,s=0;s<e.length;s++)if(o.compareTags(e[s],t[i])){a=s;break}null==a&&r.push({index:n?i+1:i,tag:t[i]})}return r},s(o,n)}return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}(t,a.default),r(t,[{key:"mount",value:function(){this.swup.on("contentReplaced",this.getHeadAndReplace)}},{key:"unmount",value:function(){this.swup.off("contentReplaced",this.getHeadAndReplace)}}]),t}();t.default=l},"hCH/":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=n("izH8"),r=n("YVRM");t.default=function(){var e=[];return(0,o.queryAll)(this.options.animationSelector).forEach(function(t){var n=new Promise(function(e){t.addEventListener((0,r.transitionEnd)(),function(n){t==n.target&&e()})});e.push(n)}),e}},hbyh:function(e,t){function n(e){return(n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}!function(e,t,o){var r=[],i=[],a={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){i.push({name:e,fn:t,options:n})},addAsyncTest:function(e){i.push({name:null,fn:e})}},s=function(){};function l(e,t){return n(e)===t}s.prototype=a,s=new s;var u,c,f=t.documentElement,d="svg"===f.nodeName.toLowerCase();function p(e){var t=f.className,n=s._config.classPrefix||"";if(d&&(t=t.baseVal),s._config.enableJSClass){var o=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(o,"$1"+n+"js$2")}s._config.enableClasses&&(t+=" "+n+e.join(" "+n),d?f.className.baseVal=t:f.className=t)}function h(e,t){if("object"==n(e))for(var o in e)u(e,o)&&h(o,e[o]);else{var r=(e=e.toLowerCase()).split("."),i=s[r[0]];if(2==r.length&&(i=i[r[1]]),void 0!==i)return s;t="function"==typeof t?t():t,1==r.length?s[r[0]]=t:(!s[r[0]]||s[r[0]]instanceof Boolean||(s[r[0]]=new Boolean(s[r[0]])),s[r[0]][r[1]]=t),p([(t&&0!=t?"":"no-")+r.join("-")]),s._trigger(e,t)}return s}u=l(c={}.hasOwnProperty,"undefined")||l(c.call,"undefined")?function(e,t){return t in e&&l(e.constructor.prototype[t],"undefined")}:function(e,t){return c.call(e,t)},a._l={},a.on=function(e,t){this._l[e]||(this._l[e]=[]),this._l[e].push(t),s.hasOwnProperty(e)&&setTimeout(function(){s._trigger(e,s[e])},0)},a._trigger=function(e,t){if(this._l[e]){var n=this._l[e];setTimeout(function(){var e;for(e=0;e<n.length;e++)(0,n[e])(t)},0),delete this._l[e]}},s._q.push(function(){a.addTest=h}),s.addAsyncTest(function(){var e=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],t=e.shift();function n(e,t,n){var o=new Image;function r(t){var r=!(!t||"load"!==t.type)&&1==o.width;h(e,"webp"===e&&r?new Boolean(r):r),n&&n(t)}o.onerror=r,o.onload=r,o.src=t}n(t.name,t.uri,function(t){if(t&&"load"===t.type)for(var o=0;o<e.length;o++)n(e[o].name,e[o].uri)})}),function(){var e,t,n,o,a,u;for(var c in i)if(i.hasOwnProperty(c)){if(e=[],(t=i[c]).name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(o=l(t.fn,"function")?t.fn():t.fn,a=0;a<e.length;a++)1===(u=e[a].split(".")).length?s[u[0]]=o:(!s[u[0]]||s[u[0]]instanceof Boolean||(s[u[0]]=new Boolean(s[u[0]])),s[u[0]][u[1]]=o),r.push((o?"":"no-")+u.join("-"))}}(),p(r),delete a.addTest,delete a.addAsyncTest;for(var g=0;g<s._q.length;g++)s._q[g]();e.Modernizr=s}(window,document)},hjPM:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});t.default=function(e){var t=e.toString().toLowerCase().replace(/\s+/g,"-").replace(/\//g,"-").replace(/[^\w\-]+/g,"").replace(/\-\-+/g,"-").replace(/^-+/,"").replace(/-+$/,"");return"/"===t[0]&&(t=t.splice(1)),""===t&&(t="homepage"),t}},hwaQ:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});t.default=function(e,t){this._handlers[e].forEach(function(e){try{e(t)}catch(e){console.error(e)}});var n=new CustomEvent("swup:"+e,{detail:e});document.dispatchEvent(n)}},iwYJ:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&(e[o]=n[o])}return e},r=n("YVRM");t.default=function(e,t){var n=this,i=[],a=void 0;this.triggerEvent("transitionStart",t),null!=e.customTransition?(this.updateTransition(window.location.pathname,e.url,e.customTransition),document.documentElement.classList.add("to-"+(0,r.classify)(e.customTransition))):this.updateTransition(window.location.pathname,e.url),!t||this.options.animateHistoryBrowsing?function(){if(n.triggerEvent("animationOutStart"),document.documentElement.classList.add("is-changing"),document.documentElement.classList.add("is-leaving"),document.documentElement.classList.add("is-animating"),t&&document.documentElement.classList.add("is-popstate"),document.documentElement.classList.add("to-"+(0,r.classify)(e.url)),i=n.getAnimationPromises("out"),Promise.all(i).then(function(){n.triggerEvent("animationOutDone")}),!t){var o=void 0;o=null!=n.scrollToElement?e.url+n.scrollToElement:e.url,(0,r.createHistoryRecord)(o)}}():this.triggerEvent("animationSkipped"),this.cache.exists(e.url)?(a=new Promise(function(e){e()}),this.triggerEvent("pageRetrievedFromCache")):a=this.preloadPromise&&this.preloadPromise.route==e.url?this.preloadPromise:new Promise(function(t,i){(0,r.fetch)(o({},e,{headers:n.options.requestHeaders}),function(o){if(500===o.status)return n.triggerEvent("serverError"),void i(e.url);var r=n.getPageData(o);null!=r?(r.url=e.url,n.cache.cacheUrl(r),n.triggerEvent("pageLoaded"),t()):i(e.url)})}),Promise.all(i.concat([a])).then(function(){n.renderPage(n.cache.getPage(e.url),t),n.preloadPromise=null}).catch(function(e){n.options.skipPopStateHandling=function(){return window.location=e,!0},window.history.go(-1)})}},izH8:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});t.query=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:document;return"string"!=typeof e?e:t.querySelector(e)},t.queryAll=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:document;return"string"!=typeof e?e:Array.prototype.slice.call(t.querySelectorAll(e))}},jFDo:function(e,t,n){var o=n("lNia");e.exports=function(e,t,n,r,i){var a=function(e,t,n,r){return function(n){n.delegateTarget=o(n.target,t),n.delegateTarget&&r.call(e,n)}}.apply(this,arguments);return e.addEventListener(n,a,i),{destroy:function(){e.removeEventListener(n,a,i)}}}},k1yQ:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&(e[o]=n[o])}return e},r=(n("izH8"),n("YVRM"));t.default=function(e,t){var n=this;document.documentElement.classList.remove("is-leaving");var i=new r.Link(e.responseURL);window.location.pathname!==i.getPath()&&(window.history.replaceState({url:i.getPath(),random:Math.random(),source:"swup"},document.title,i.getPath()),this.cache.cacheUrl(o({},e,{url:i.getPath()}))),t&&!this.options.animateHistoryBrowsing||document.documentElement.classList.add("is-rendering"),this.triggerEvent("willReplaceContent",t);for(var a=0;a<e.blocks.length;a++)document.body.querySelector('[data-swup="'+a+'"]').outerHTML=e.blocks[a];document.title=e.title,this.triggerEvent("contentReplaced",t),this.triggerEvent("pageView",t),this.options.cache||this.cache.empty(),setTimeout(function(){t&&!n.options.animateHistoryBrowsing||(n.triggerEvent("animationInStart"),document.documentElement.classList.remove("is-animating"))},10);var s=this.getAnimationPromises("in");!t||this.options.animateHistoryBrowsing?Promise.all(s).then(function(){n.triggerEvent("animationInDone"),n.triggerEvent("transitionEnd",t),document.documentElement.className.split(" ").forEach(function(e){(new RegExp("^to-").test(e)||"is-changing"===e||"is-rendering"===e||"is-popstate"===e)&&document.documentElement.classList.remove(e)})}):this.triggerEvent("transitionEnd",t),this.scrollToElement=null}},lNia:function(e,t){var n=9;if("undefined"!=typeof Element&&!Element.prototype.matches){var o=Element.prototype;o.matches=o.matchesSelector||o.mozMatchesSelector||o.msMatchesSelector||o.oMatchesSelector||o.webkitMatchesSelector}e.exports=function(e,t){for(;e&&e.nodeType!==n;){if("function"==typeof e.matches&&e.matches(t))return e;e=e.parentNode}}},lt5t:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=n("YVRM");t.default=function(e){var t=e.responseText,n=(0,o.getDataFromHtml)(t,this.options.containers);return n?(n.responseURL=e.responseURL?e.responseURL:window.location.href,n):(console.warn("Received page is invalid."),null)}},mdSH:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&(e[o]=n[o])}return e};t.default=function e(t){var n=this;!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this._raf=null,this._positionY=0,this._velocityY=0,this._targetPositionY=0,this._targetPositionYWithOffset=0,this._direction=0,this.scrollTo=function(e){if(e&&e.nodeType)n._targetPositionY=Math.round(e.getBoundingClientRect().top+window.pageYOffset);else{if(parseInt(n._targetPositionY)!==n._targetPositionY)return void console.error("Argument must be a number or an element.");n._targetPositionY=Math.round(e)}n._targetPositionY>document.documentElement.scrollHeight-window.innerHeight&&(n._targetPositionY=document.documentElement.scrollHeight-window.innerHeight),n._positionY=document.body.scrollTop||document.documentElement.scrollTop,n._direction=n._positionY>n._targetPositionY?-1:1,n._targetPositionYWithOffset=n._targetPositionY+n._direction,n._velocityY=0,n._positionY!==n._targetPositionY?(n.options.onStart(),n._animate()):n.options.onAlreadyAtPositions()},this._animate=function(){n._update(),n._render(),1===n._direction&&n._targetPositionY>n._positionY||-1===n._direction&&n._targetPositionY<n._positionY?(n._raf=requestAnimationFrame(n._animate),n.options.onTick()):(n._positionY=n._targetPositionY,n._render(),n._raf=null,n.options.onTick(),n.options.onEnd())},this._update=function(){var e=n._targetPositionYWithOffset-n._positionY,t=e*n.options.acceleration;return n._velocityY+=t,n._velocityY*=n.options.friction,n._positionY+=n._velocityY,Math.abs(e)},this._render=function(){window.scrollTo(0,n._positionY)};this.options=o({},{onAlreadyAtPositions:function(){},onCancel:function(){},onEnd:function(){},onStart:function(){},onTick:function(){},friction:.7,acceleration:.04},t),t&&t.friction&&(this.options.friction=1-t.friction),window.addEventListener("mousewheel",function(e){n._raf&&(n.options.onCancel(),cancelAnimationFrame(n._raf),n._raf=null)},{passive:!0})}},oMDg:function(e,t){},p0NV:function(e,t){var n=9;if("undefined"!=typeof Element&&!Element.prototype.matches){var o=Element.prototype;o.matches=o.matchesSelector||o.mozMatchesSelector||o.msMatchesSelector||o.oMatchesSelector||o.webkitMatchesSelector}e.exports=function(e,t){for(;e&&e.nodeType!==n;){if("function"==typeof e.matches&&e.matches(t))return e;e=e.parentNode}}},qRPr:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});t.use=function(e){if(e.isSwupPlugin)return this.plugins.push(e),e.swup=this,"function"==typeof e._beforeMount&&e._beforeMount(),e.mount(),this.plugins;console.warn("Not swup plugin instance "+e+".")},t.unuse=function(e){var t=void 0;if(t="string"==typeof e?this.plugins.find(function(t){return e===t.name}):e){t.unmount(),"function"==typeof t._afterUnmount&&t._afterUnmount();var n=this.plugins.indexOf(t);return this.plugins.splice(n,1),this.plugins}console.warn("No such plugin.")},t.findPlugin=function(e){return this.plugins.find(function(t){return e===t.name})}},sr85:function(e,t){}});