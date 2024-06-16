<template>
    <hidden :xs="true" :sm="true">
        <div class="container">
          <div class="header">
            <row container :gutter="12">
                <column class="logo" :xs="12" :md="4" :lg="3"> 
                  <a href="">
                    <ButtonHeader :contentId="this.btnsHeaderData[0].id" description="This is a logo" />
                  </a> 
                </column>
                <column :xs="12" :md="4" :lg="3"></column>
                <column v-for="(btn, index) in this.btnsHeaderData" :key="index" class="right" :md="4" :lg="3">
                  <ButtonHeader :contentId="btn.contentId" :description="btn.description" /> 
                </column>
            </row>
          </div>
        </div>
  </hidden>
</template>

<script>
import { Row, Column, Hidden } from 'vue-grid-responsive';
import ButtonHeader from './../Buttons/ButtonHeader.vue';
import { BtnsHeaderData } from '@/dummyData/BtnsHeaderData';

export default {
    name: 'HeaderLayout',
    data(){
      return {
        btnsHeaderData:BtnsHeaderData
      }
    },
    components: {
    Row,
    Column,
    Hidden,
    ButtonHeader
  }
}
</script>

<style scoped lang="scss">
    @import "./src/styles/header-layout.scss";
</style>