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

<style lang="scss">
    @import "./src/styles/app.scss";
</style>