<template>
  <div>
    <a>
      <RouterLink :to="`/content/${contentId}`" class="btn">{{ description }}</RouterLink>
    </a>
    
  </div>
</template>

<script>
export default {
    name:'ButtonHeader',
    props: {
      description: {
          type: String,
          required:true
      },
      contentId:{
        type:Number,
        required:true
      }
  },
}
</script>

<style scoped lang="scss">
    @import "./src/styles/button-header.scss";
</style>

