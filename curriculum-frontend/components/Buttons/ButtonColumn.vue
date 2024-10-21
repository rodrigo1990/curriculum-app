<template>
  <div>
    <a>
      <!-- <RouterLink :to="`/content/${contentId}`" class="btn">{{ description }}</RouterLink> -->
      {{ description }}
    </a>
    
  </div>
</template>

<script>
import { RouterLink } from 'vue-router';
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
  components:{
    RouterLink
  },
}
</script>

<style scoped lang="scss">
    @import url("~/assets/styles/button-column.scss");
</style>