import Vue from 'vue';

const home = document.querySelector('#home');
if (home) {
    new Vue({
        el: home,
        data: {
            message: 'This is home page'
        }
    });
}

const about = document.querySelector('#about');
if (about) {
    new Vue({
        el: about,
        data: {
            message: 'This is about page'
        }
    });
}

const contact = document.querySelector('#contact');
if (contact) {
    new Vue({
        el: contact,
        data: {
            message: 'This is contact page'
        }
    });
}