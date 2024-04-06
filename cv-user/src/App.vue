<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <HelloWorld msg="Curriculum App"/>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  components: {
    HelloWorld
  }
}
</script>

<style>
body {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: white;
  margin-top: 60px;
  background: rgb(74,34,0);
  background: linear-gradient(164deg, rgba(74,34,0,1) 0%, rgba(10,10,12,1) 50%);
  background-repeat: no-repeat;
  background-attachment: fixed;
}
</style>
