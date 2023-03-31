/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import html5 from './components/html5.vue';
app.component('html5', html5);

import css3 from './components/css3.vue';
app.component('css3' , css3)

import js from './components/js.vue';
app.component('js' , js)

import php from './components/php.vue';
app.component('php' , php)

import tailwind from './components/tailwind.vue';
app.component('tailwind' , tailwind)

import bootstrp from './components/bootstrp.vue';
app.component('bootstrp' , bootstrp)

import laravel from './components/laravel.vue';
app.component('laravel' , laravel)

import vue from './components/vue.vue';
app.component('vue' , vue)

import jquery from './components/jquery.vue';
app.component('jquery' , jquery)

import mysql from './components/mysql.vue';
app.component('mysql' , mysql)

import github from './components/github.vue';
app.component('github' , github)

import adobe from './components/adobe.vue';
app.component('adobe' , adobe)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/html5.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */



app.mount('#app');
