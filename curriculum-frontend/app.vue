<template>
  <div class="row">
    <div class="container">
        
      <div class="col-xs-12 col-md-1 col-lg-1"> 
          <ButtonsColumn :buttonsArray="this.btnsData"/>
      </div>
        
        <div class="col-xs-12 col-lg-4">
         <!--   <ProfileImage path="pic.jpg"/> -->
        </div>

        <div class="col-xs-12 col-lg-7">
          <NuxtLayout>
            <NuxtPage />
          </NuxtLayout>
        </div>
      </div>
  </div>
</template>
<script>
import { BtnsBodyData } from '~/src/dummyData/BtnsBodyData';
export default {
    name: 'App',
    data(){
      return {
          btnsData:BtnsBodyData
      }
    },
}
</script>
<style scoped lang="scss">
    @import url("~/assets/styles/body-layout.scss");
</style>