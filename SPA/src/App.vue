<template>
  <div id="app">
    <navbar-front-component></navbar-front-component>
<!--      <router-link to="/about">About</router-link>-->
    <router-view />
  </div>
</template>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

body {
  padding: 0px;
  margin: 0px;
}
</style>
<script>
import NavbarFrontComponent from "@/components/Front-office/NavbarFrontComponent";
export default {
  components: {NavbarFrontComponent}
}
</script>