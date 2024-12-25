<template>
  <div class="profile-img-container animate__animated animate__fadeIn">
    
        <ClientOnly>
          <div class="profile-img" :style="{ 'background-image': 'url(/images/user/profile/'+img+'' }"> </div>
          <template #fallback>
            <!-- this will be rendered on server side -->
              <span class="loader"></span>>
          </template>
        </ClientOnly>
  </div>
</template>

<script setup>
const props = defineProps({
  img: {
    type: String,
    required:true
  }
})
</script>

<style scoped lang="scss">
    @import url("~/assets/styles/loader.scss");
    @import url("~/assets/styles/profile-image.scss");
</style>