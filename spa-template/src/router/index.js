import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/views/Home'
import Shop from '@/views/Shop'
import Product from '@/views/Product'
import Blog from '@/views/Blog'
import Post from '@/views/Post'
import Cart from '@/views/Cart'
import Layout from '@/views/Layout'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      component: Layout,
      children:[
        {
          path:'/',
          component:Home,
          name:'Home'
        },
        {
          path:'/shop',
          component:Shop,
          name:'Shop'
        },
        {
          path:'/product',
          component:Product,
          name:'Product'
        },
        {
          path:'/blog',
          component:Blog,
          name:'Blog'
        },
        {
          path:'/post',
          component:Post,
          name:'Post'
        },
        {
          path:'/cart',
          component:Cart,
          name:'Cart'
        }
      ]

    }
  ],
    mode:'history'
},

  )
