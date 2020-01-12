import Vue from 'vue';
import ImageUpload from "./components/ImageUploadManager";

import axios from "axios";

Vue.prototype.$axios = axios;

new Vue({
    el: '#vuejs',
    components: {ImageUpload}
});
