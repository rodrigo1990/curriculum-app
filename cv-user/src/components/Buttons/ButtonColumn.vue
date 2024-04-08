<template>
  <a href="">
    {{ msg }}
  </a>
</template>

<script>
export default {
    name:'ButtonColumn',
    props: {
        msg: {
            type: String,
            required:true
        }
    }
}
</script>

<style scoped lang="scss">
    @import "./src/styles/button-column.scss";
</style>

