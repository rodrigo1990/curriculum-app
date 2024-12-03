<template>
  <div class="profile-img-container animate__animated animate__fadeIn">
    
        <ClientOnly>
          <div class="profile-img" :style="{ 'background-image': 'url('+imgState.path+'' }"> </div>
          <template #fallback>
            <!-- this will be rendered on server side -->
              <span class="loader"></span>>
          </template>
        </ClientOnly>
  </div>
</template>

<script setup>
  const {data: img, pendingSite} = await useFetch('/api/dummy/profileImg')
  const imgState = ref(img.value.response)
</script>

<style scoped lang="scss">
    @import url("~/assets/styles/loader.scss");
    @import url("~/assets/styles/profile-image.scss");
</style>