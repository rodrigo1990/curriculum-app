<template>
    <div>
      <NuxtLink :to="`/${route.params.user}/content/${contentId}`" class="btn">{{ description }}</NuxtLink> 
    </div>
</template>

<script setup>
const route = useRoute()
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
    @import url("~/assets/styles/buttons-header.scss");
</style>