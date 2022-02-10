import Index from "./components/cms/Index";

require('./bootstrap');


import Vue from 'vue'
import Buefy from 'buefy'
// import 'buefy/dist/buefy.css'
import '@mdi/font/css/materialdesignicons.min.css'
import VueRouter from 'vue-router'
import {extend} from 'vee-validate';
import CKEditor from 'ckeditor4-vue';
import moment from 'moment';


import App from './components/cms/App'

let router = new VueRouter({
    routes: [
        {
            'path':'/',
            'name':'home',
            'component': Index,
        }

    ]
});
Vue.prototype.$moment = moment;
Vue.use(VueRouter);
Vue.use(Buefy);
Vue.use(CKEditor);


import { required, email } from 'vee-validate/dist/rules';
extend('email', {
    ...email,
    message: "Поле {_field_} должно быть действительным электронным адресом",
});
extend('required', {
    ...required,
    message: "Поле {_field_} обязательно для заполнения",
});



let app = new Vue({
    router,
    data(){
        return {
            tableDefaults:{
                current:1,
                perPage:10,
                search:'',

            },
            treeDefaults:{
                search:'',
                parent_id:0,
            }
        }
    },

    render : h => h(App),
}).$mount('#app');
