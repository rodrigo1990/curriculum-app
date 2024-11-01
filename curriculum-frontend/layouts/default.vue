<template>
  <div class="container-fluid">
            {{ btnsData }}

    <div class="row">
      <div class="col-xs-12 col-md-4 col-lg-2"> 
          <ButtonsColumn :buttonsArray="btnsData"/>
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

<script setup>

  const btnsData = ref(0)

  const {data: buttonsBody, pending} = await useAsyncData("buttonsBody", () =>
      $fetch('/api/buttonsBody')
  )
  console.log(buttonsBody.value.response)

  btnsData.value = buttonsBody.value.response

</script>

<style scoped lang="scss">
    @import url("~/assets/styles/body-layout.scss");
</style>