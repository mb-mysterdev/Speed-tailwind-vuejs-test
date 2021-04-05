<template>
  <div>
    <carousel-front></carousel-front>
    <v-row class="pa-2">
      <v-card
          v-for="key in numbers"
          :key="key"
          elevation="2"
      >
        {{ key }}
      </v-card>
    </v-row>
    <a href="/list-product">Product List</a>
  </div>
</template>

<script>
import CarouselFront from "@/components/front-office/global/CarouselFront";
export default {
name: "HomeFrontComponent",
  components: {CarouselFront},
  data(){
    return {
      numbers: 10
    }
  }
}
</script>

<style scoped>

</style>