<template>
  <html lang="en">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <header-layout/>
    <body-layout/>
  </html>
</template>


<script>
  import HeaderLayout from './components/Layout/HeaderLayout.vue'
  import BodyLayout from './components/Layout/BodyLayout.vue'

  export default {
    name: 'App',
    components: {
      HeaderLayout,
      BodyLayout
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
