<template>
<div id="global-wrapper">
  <HeaderMain/>
  <section id="body">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-4 col-lg-2"> 
          <ButtonsListColumn :buttons="buttonsBody"/>
        </div>
        <div class="col-xs-12 col-md-4 col-lg-4">
          <ProfileImage />
        </div>
        <div class="col-xs-12 col-md-4 col-lg-6">
          <slot />
        </div>
      </div>
    </div>
  </section>
</div>
</template>

<script setup>
  ///api/dummy/site
  const {data} = await useFetch('/api/dummy/site')
  const buttonsBody = ref(data.value.site.body.buttons).value
  const backgroundColor = ref(data.value.site.body.styles.backgroundGradient).value

  useHead({
    style: [
      {
        children: `
          body {
            ${backgroundColor}
          }
        `
      }
    ]
  })

</script>

<style lang="scss">
  @import url("~/assets/styles/app.scss");
  @import url("~/assets/styles/body-layout.scss");
  body {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
</style>
<style scoped lang="scss">
  section#body{
    margin-top:6rem;
  }
  section#header{
    margin-top:1.5rem
  }
</style>