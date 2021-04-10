<template>
  <el-select
      v-model="value"
      multiple
      filterable
      remote
      reserve-keyword
      placeholder="Entrez un mot-clé"
      :loading="loading">
    <el-option
        v-for="item in options"
        :key="item.value"
        :label="item.label"
        :value="item.value">
    </el-option>
  </el-select>
</template>

<script>
export default {
name: "InputSearchFrontComponent"
}
</script>

<style scoped>

</style>