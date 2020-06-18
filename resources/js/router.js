import Vue from 'vue'
import Router from 'vue-router'

//If it is a plugin, i.e. Router, we write like this
Vue.use(Router)
import firstPage from './components/pages/myFirstVuePage'

import home from './components/pages/home'
// import country from './components/pages/country'
import user from './components/pages/user'

import message from './components/pages/message'
import blog from './components/pages/blog'
import underdev from './components/pages/underdev'
import usecom from './vuex/usecom'


import country from './admin/pages/country'
import categoryListingType from './admin/pages/categoryListingType'
import categoryListings from './admin/pages/categoryListings'
import tags from './admin/pages/tags'
import categoryblog from './admin/pages/categoryBlog'


//Lets make a variable and make an array and it will have objects
const routes = [
    // START project routes

    {
        path: '/', 
        component: home, 
        name: 'home'
    },
    {
        path: '/testvuex', 
        component: usecom, 
       
    },

    {
        path: '/country', 
        component: country, 
        name: 'country'
       
    },

    {
        path: '/user', 
        component: user, 
        name: 'user'
       
    },
    {
        path: '/category-listing-type', 
        component: categoryListingType, 
        name: 'categoryListingType'
       
    },

    {
        path: '/category-listings', 
        component: categoryListings, 
        name: 'categoryListings'
       
    },

    {
        path: '/message', 
        component: message, 
        name: 'message'
       
    },
    {
        path: '/blog', 
        component: blog, 
        name: 'blog'
       
    },

    {
        path: '/categoryblog', 
        component: categoryblog, 
        name: 'categoryblog'
       
    },

    {
        path: '/tags', 
        component: tags, 
        name: 'tags'
       
    },

    {
        path: '/underdev', 
        component: underdev, 
        name: 'underdev'
       
    },

    // END project routes

    {
        path: '/my-new-vue-route',
        component: firstPage
    }
]

export default new Router({
    mode: 'history',
    routes
})