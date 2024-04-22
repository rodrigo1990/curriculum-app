<template>
  <div class="profile-img-container">
        <div class="profile-img" :style="{ 'background-image': 'url('+getImagePath(path)+'' }"> </div>
  </div>
</template>

<script>
export default {
    name: 'ProfileImage',
    props:{
      path:{
        required:true,
        type:String
      }
    },
    methods: {
    getImagePath(path) {
      // Concatenate the image path with the property value
      return  require('@/assets/images/'+path);
    }
  }
}
</script>

<style scoped lang="scss">
    @import "./src/styles/profile-image.scss";
</style>