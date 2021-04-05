<template>
  <v-app>
    <app-front>

    </app-front>
    <router-view></router-view>
  </v-app>
</template>

<script lang="ts">
import Vue from 'vue';
import VueRouter from "vue-router/types/router";
import AppFront from "@/components/base/AppFront.vue";

export default Vue.extend({
  name: 'App',
  components: {AppFront},
});
</script>
