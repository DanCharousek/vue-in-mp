import Vue from 'vue';

new Vue({
    el: '#app',
    data: {
        message: 'Hello World!'
    },
    methods: {
        changeMessage() {
            this.message = 'Hello VueJS Prague!';
        }
    }
})