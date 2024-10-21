<template>
  <div class="container">
    <div class="row">
        
      <div class="col-xs-12 col-lg-1"> 
          <ButtonsColumn :buttonsArray="this.btnsData"/>
      </div>
        
        <div class="col-xs-12 col-lg-4">
         <!--   <ProfileImage path="pic.jpg"/> -->
        </div>

        <div class="col-xs-12 col-lg-7">
          <RouterView :key="$route.path"/>
        </div>
      </div>
  </div>
</template>

<script>
import { RouterView } from 'vue-router';
import { BtnsBodyData } from '~/src/dummyData/BtnsBodyData';
import ButtonsColumn from './Buttons/ButtonsColumn.vue';
export default {
    name: 'BodyMain',
    data(){
      return {
          btnsData:BtnsBodyData
      }
    },
    components: {
      ButtonsColumn,
  //    Row,
  //    Column,
  //    ProfileImage,
  }
}
</script>

<style scoped lang="scss">
    @import url("~/assets/styles/body-layout.scss");
</style>