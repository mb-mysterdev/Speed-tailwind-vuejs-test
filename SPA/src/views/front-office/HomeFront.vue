<template>
  <div class="home">
    <img alt="Vue logo" src="../../assets/logo.png">
    <home-front-component></home-front-component>
  </div>
</template>

<script lang="ts">
import { Component, Vue } from 'vue-property-decorator';
import HomeFrontComponent from '@/components/front-office/Home/HomeFrontComponent.vue';

@Component({
  components: {
    HomeFrontComponent,
  },
})
export default class HomeFront extends Vue {}
</script>
