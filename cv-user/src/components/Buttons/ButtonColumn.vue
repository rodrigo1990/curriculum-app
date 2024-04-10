<template>
  <div>
    <a href="" @mouseover="animateLine" @mouseleave="unanimateLine">
      {{ msg }}
      <Transition>
        <div v-if="animate" div class="line"></div>
      </Transition>
    </a>
    
    
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
          animate.value = true
      }
      function unanimateLine(){
          animate.value = false
      }
      // expose the ref to the template
      return {
        animate,
        animateLine,
        unanimateLine
      }
  }
}
</script>

<style scoped lang="scss">
    @import "./src/styles/button-column.scss";
</style>

