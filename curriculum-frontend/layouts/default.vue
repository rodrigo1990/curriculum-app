<template>
  <div class="container-fluid">
    <div class="row">
        
      <div class="col-xs-12 col-md-4 col-lg-2"> 
          <ClientOnly fallback-tag="span" fallback="Loading buttons...">
            <ButtonsColumn :buttonsArray="this.btnsData"/>
          </ClientOnly>
      </div>
        
      <div class="col-xs-12 col-md-4 col-lg-4">
        <ProfileImage path="pic.jpg"/>
      </div>

      <div class="col-xs-12 col-md-4 col-lg-6">
        <slot />
      </div>
    </div>
  </div>
</template>

<script>
import { RouterView } from 'vue-router';
import { BtnsBodyData } from '~/src/dummyData/BtnsBodyData';
export default {
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