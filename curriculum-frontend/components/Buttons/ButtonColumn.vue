<template>
  <div>
    <NuxtLink :to="`/content/${contentId}`" class="btn">{{ description }}</NuxtLink>     
  </div>
</template>

<script setup>
defineProps({
  description: {
          type: String,
          required:true
      },
      contentId:{
        type:Number,
        required:true
      }
})
</script>

<style scoped lang="scss">
    @import url("~/assets/styles/button-column.scss");
</style>