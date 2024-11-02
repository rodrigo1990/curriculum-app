<template>
  <div>
    <a>
       <NuxtLink :to="`/content/${contentId}`" class="btn">{{ description }}</NuxtLink> 
    </a>
    
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