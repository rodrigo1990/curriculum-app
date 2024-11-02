<template>
<div>
  <div class="container">
    <div class="header">
      <div class="row">
          <div class="col-lg-3"> 
              <!--  <ButtonHeader :contentId="btnsHeaderData[0].id" description="This is a logo" />-->
              <ButtonHeader :contentId="btnsHeaderData[0].id" description="this is a logo" />
          </div>
          <div class="col-lg=3"></div>
          <div class="col-lg-3" v-for="(btn, index) in btnsHeaderData" :key="index">
            <ButtonHeader :contentId="btn.contentId" :description="btn.description" /> 
          </div> 
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-4 col-lg-2"> 
          <ButtonsColumn :buttonsArrayProp="btnsData"/>
      </div>
      <div class="col-xs-12 col-md-4 col-lg-4">
        <ProfileImage path="pic.jpg"/>
      </div>
      <div class="col-xs-12 col-md-4 col-lg-6">
        <slot />
      </div>
    </div>
  </div>
</div>
</template>

<script setup>


  //Buttons body
  const {data: buttonsBody, pendingBtnsBody} = await useFetch('/api/buttonsBody')
  const btnsData = ref(buttonsBody.value.response)


  //Buttons header
  const {data: buttonsHeader, pendingBtnsHeader} = await useFetch('/api/buttonsHeader')
  const btnsHeaderData = ref(buttonsHeader.value.response)
  

</script>

<style lang="scss">
  @import url("~/assets/styles/app.scss");
</style>
<style scoped lang="scss">
  @import url("~/assets/styles/body-layout.scss");
</style>