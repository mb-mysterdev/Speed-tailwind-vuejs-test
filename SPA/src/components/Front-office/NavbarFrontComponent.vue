<template>
  <el-menu class="el-menu-demo" mode="horizontal">
    <el-menu-item index="1">Centre de traitement</el-menu-item>
    <el-submenu index="2">
      <template slot="title">Lieu de travail</template>
      <el-menu-item index="2-1">item un</el-menu-item>
      <el-menu-item index="2-2">item deux</el-menu-item>
      <el-menu-item index="2-3">item trois</el-menu-item>
      <el-submenu index="2-4">
        <template slot="title">item quatre</template>
        <el-menu-item index="2-4-1">item un</el-menu-item>
        <el-menu-item index="2-4-2">item deux</el-menu-item>
        <el-menu-item index="2-4-3">item trois</el-menu-item>
      </el-submenu>
    </el-submenu>
    <el-menu-item index="3" disabled>Infos</el-menu-item>
    <el-menu-item index="4"><a href="https://www.ele.me" target="_blank">Commandes</a></el-menu-item>
  </el-menu>
</template>

<script>
export default {
name: "NavbarFrontComponent"
}
</script>

<style scoped>

</style>