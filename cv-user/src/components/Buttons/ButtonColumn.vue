<template>
  <div>
    <a href="" @mouseover="animateLine" @mouseleave="animateLine">
      {{ msg }}
    </a>
    <Transition>
      <div v-if="animate" div class="line"></div>
    </Transition>
    
  </div>
</template>

<script>
import { ref } from 'vue'
export default {
    name:'ButtonColumn',
    props: {
        msg: {
            type: String,
            required:true
        }
    },
    setup() {
      const animate = ref(false)
      function animateLine(){
          animate.value = !animate.value
      }
      // expose the ref to the template
      return {
        animate,
        animateLine
      }
  }
}
</script>

<style scoped lang="scss">
    @import "./src/styles/button-column.scss";
</style>

