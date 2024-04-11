<template>
  <div>
    <a href="" @mouseover="animateLine" @mouseleave="unanimateLine">
      {{ msg }}
      <Transition>
        <div div class="square"></div>
      </Transition>
    </a>
    
    
  </div>
</template>

<script>
import { ref } from 'vue'
export default {
    name:'ButtonHeader',
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
    @import "./src/styles/button-header.scss";
</style>

