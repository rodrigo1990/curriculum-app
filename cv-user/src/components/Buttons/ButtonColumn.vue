<template>
  <div>
    <a href="" @mouseover="animateLine" @mouseleave="unanimateLine">
      {{ msg }}
      <Transition>
        <div v-if="animate"  class="line"></div>
      </Transition>
    </a>
    
    
  </div>
</template>

<script>
import { ref } from 'vue';

export default {
  name:'ButtonColumn',
  props: {
      msg: {
          type: String,
          required:true
      }
  },
  data() {
    return {
      animate:ref(false)
    }
  },
  methods:{
      animateLine(){
          this.animate = true
      },
      unanimateLine(){
          this.animate = false
      }
  }
}
</script>

<style scoped lang="scss">
    @import "./src/styles/button-column.scss";
</style>

