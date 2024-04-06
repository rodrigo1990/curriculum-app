<template>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <html lang="en">
    <HeaderMain/>
    <ButtonsColumn :buttonsArray="['Whoami','Academics','Services','Github']"/>
  </html>
</template>

<script>


import ButtonsColumn from './components/ButtonsColumn.vue'
import HeaderMain from './components/HeaderMain.vue'

export default {
  name: 'App',
  components: {
    ButtonsColumn,
    HeaderMain
  }
}
</script>

<style>
body {
  margin:0;
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: white;
  background: rgb(74,34,0);
  background: linear-gradient(164deg, rgba(74,34,0,1) 0%, rgba(10,10,12,1) 50%);
  background-repeat: no-repeat;
  background-attachment: fixed;
}
</style>
