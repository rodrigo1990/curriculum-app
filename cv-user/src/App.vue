<template>
  <html lang="en">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <header-main/>
    <body-main/>
  </html>
</template>


<script>
  import HeaderMain from './components/sections/HeaderMain.vue'
  import BodyMain from './components/sections/BodyMain.vue'

  export default {
    name: 'App',
    components: {
      HeaderMain,
      BodyMain
    }
  }
  </script>

  <style>
  body {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;

    background: rgb(74,34,0);
    background: linear-gradient(164deg, rgba(74,34,0,1) 0%, rgba(10,10,12,1) 50%);
    background-repeat: no-repeat;
    background-attachment: fixed;
  }
</style>
