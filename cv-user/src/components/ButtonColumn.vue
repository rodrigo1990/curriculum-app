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

<style>
    a {
        color: white;
        font-size:24px;
    }
</style>