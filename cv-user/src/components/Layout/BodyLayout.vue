<template>
  <div class="container">
    <row container :gutter="12">
        
      <column :xs="12" :lg="1"> 
          <ButtonsColumn :buttonsArray="this.btnsData"/>
        </column>
        
        <column :xs="12" :lg="4">
          <ProfileImage path="pic.jpg"/>
        </column>

        <column :xs="12" :lg="7">
          <RouterView />
        </column>
    
      </row>
  </div>
</template>

<script>
import { Row, Column } from 'vue-grid-responsive';
import ButtonsColumn from '../Buttons/ButtonsColumn.vue'
import ProfileImage from '../ProfilePics/ProfileImage.vue';
import { RouterView } from 'vue-router';
import { BtnsBodyData } from '@/dummyData/BtnsBodyData';
export default {
    name: 'BodyMain',
    data(){
      return {
        btnsData:BtnsBodyData
      }
    },
    components: {
        RouterView,
        ButtonsColumn,
        Row,
        Column,
        ProfileImage,
  }
}
</script>

<style scoped lang="scss">
    @import "./src/styles/body-layout.scss";
</style>