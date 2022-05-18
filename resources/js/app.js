require('./bootstrap');
window.Swal = require('sweetalert2')

import Vue from 'vue';

const app = new Vue({

    el: '#app',

    methods:{
      printme(){
        window.print()
      }
    }
});
