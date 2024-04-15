<template>
  <div>
    <a href="data-container">
      <span class="btn">{{ msg }}</span>
    </a>
    
  </div>
</template>

<script>
export default {
    name:'ButtonHeader',
    props: {
        msg: {
            type: String,
            required:true
        }
    },
}
</script>

<style scoped lang="scss">
    @import "./src/styles/button-header.scss";
</style>

