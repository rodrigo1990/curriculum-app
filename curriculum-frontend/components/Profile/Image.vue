<template>
  <div class="profile-img-container" fallback-tag="span" fallback="Loading...">
        <ClientOnly>
          <div class="profile-img" :style="{ 'background-image': 'url('+getImagePath(path)+'' }"> </div>
        </ClientOnly>
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
      return  "/images/user/profile/pic.jpg";
  }
</script>

<style scoped lang="scss">
    @import url("~/assets/styles/profile-image.scss");
</style>