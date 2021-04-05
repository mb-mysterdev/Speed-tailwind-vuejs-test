import Vue from 'vue'
import VueRouter, { RouteConfig } from 'vue-router'
import ProductListFrontComponent from "@/components/front-office/Product/ProductListFrontComponent.vue";
import ProductFrontComponent from "@/components/front-office/Product/ProductFrontComponent.vue";
import HomeFrontComponent from "@/components/front-office/Home/HomeFrontComponent.vue";

Vue.use(VueRouter)

const routes: Array<RouteConfig> = [
  {
    path: '/',
    name: 'HomeFront',
    component: HomeFrontComponent
  },
  {
    path: '/list-product',
    name: 'ProductListFrontComponent',
    component: ProductListFrontComponent
  },
  {
    path: '/product/:id',
    name: 'ProductFrontComponent',
    component: ProductFrontComponent
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
