<template>
<div id="global-wrapper">
  <HeaderMain/>
  <section id="body">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-4 col-lg-2"> 
            <ButtonsListColumn :buttonsArrayProp="btnsData"/>
        </div>
        <div class="col-xs-12 col-md-4 col-lg-4">
          <ProfileImage path="pic.jpg"/>
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
  const {data: buttonsBody, pendingBtnsBody} = await useFetch('/api/dummy/buttonsBody')
  const {data: site, pendingSite} = await useFetch('/api/dummy/site')
  const btnsData = ref(buttonsBody.value.response)
  const backgroundColor = ref(site.value.response.styles)
  useHead({
    style: [
      {
        children: `
          body {
            ${backgroundColor.value}
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