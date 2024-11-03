<template>
  <div class="profile-img-container">
        <div class="profile-img" :style="{ 'background-image': 'url('+getImagePath(path)+'' }"> </div>
  </div>
</template>

<script setup>
  defineProps({
    path:{
        required:true,
        type:String
      }
  })

  function getImagePath(path) {
      // Concatenate the image path with the property value
      return  '/assets/images/profile/'+path;
  }
</script>

<style scoped lang="scss">
    @import url("~/assets/styles/profile-image.scss");
</style>