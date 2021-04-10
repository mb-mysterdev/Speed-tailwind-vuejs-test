<template>
  <div class="home">
    <div>
      <input-search-front-component></input-search-front-component>
      <el-carousel :autoplay="false" indicator-position="outside" height="50rem">
        <el-carousel-item v-for="item in 3" :key="item">
          <img :src="'/img/carousel/test'+item+'.jpg'">
          <h3>{{ item }}</h3>
        </el-carousel-item>
      </el-carousel>
    </div>
    <div>
      <h2>Nos magasins partenaires</h2>
      <el-row class="flex justify-center">
        <el-col :span="6" v-for="(o, index) in 3" :key="o" :offset="index">
          <el-card>
            <img src="https://shadow.elemecdn.com/app/element/hamburger.9cf7b091-55e9-11e9-a976-7f4d0b07eef6.png" class="image">
            <div>
              <span>Yummy hamburger</span>
              <div class="bottom clearfix">
                <time class="time"></time>
                <el-button type="text" class="button">Operating</el-button>
              </div>
            </div>
          </el-card>
        </el-col>
      </el-row>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src

import InputSearchFrontComponent from "@/components/Front-office/Home/InputSearchFrontComponent";
export default {
  name: "Home",
  components: {InputSearchFrontComponent},
};
</script>