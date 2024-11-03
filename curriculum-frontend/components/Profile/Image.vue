<template>
  <div class="profile-img-container animate__animated animate__fadeIn">
    
        <ClientOnly>
          <div class="profile-img" :style="{ 'background-image': 'url('+getImagePath(path)+'' }"> </div>
          <template #fallback>
            <!-- this will be rendered on server side -->
              <span class="loader"></span>>
          </template>
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
    @import url("~/assets/styles/loader.scss");
    @import url("~/assets/styles/profile-image.scss");
</style>