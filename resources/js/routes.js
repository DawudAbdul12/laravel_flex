import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '@/js/pages/Index';
import About from '@/js/pages/About-us';
import Testimonials from '@/js/pages/testimonials';
import Howitworks from '@/js/pages/work';
import Blog from '@/js/pages/Blog';
import Contact from '@/js/pages/Contact-us';
// import Contact from '@/js/components/Contact-us';

Vue.use(VueRouter);

const router = new VueRouter({
    
    mode: 'history',

    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/index',
            name: 'home',
            component: Home
        },
        
        {
           path: '/about-us',
           name: 'about',
           component: About

        },
        {
            path: '/testimonials',
            name: 'testimonials',
            component: Testimonials
        },
        {
            path: '/how-it-works',
            name: 'Howitworks',
            component: Howitworks
        },
        {
            path: '/blog',
            name: 'blog',
            component: Blog
        },
        {
            path: '/contact-us',
            name: 'contact',
            component: Contact
        },
        // {
        //     path: '/contact-us',
        //     name: 'contact-us',
        //     component: Contact
        // }
    ]


});


export default router;
