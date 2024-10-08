<template>
  <div>
    <RouterLink :to="`/content/${contentId}`" @mouseenter="animate = true" @mouseleave="animate = false">
      {{ description }}
      <Transition>
        <div v-if="animate"  class="line"></div>
      </Transition>
    </RouterLink>
    
    
  </div>
</template>

<script>
import { RouterLink } from 'vue-router'

export default {
  name:'ButtonColumn',
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
  data() {
    return {
      animate:false
    }
  }
}
</script>

<style scoped lang="scss">
    @import "./src/styles/button-column.scss";
</style>

