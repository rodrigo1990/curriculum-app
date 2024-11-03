<template>
<div>
  <HeaderMain :btns="btnsHeaderData"/>
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
  const {data: buttonsBody, pendingBtnsBody} = await useFetch('/api/buttonsBody')
  const btnsData = ref(buttonsBody.value.response)
</script>

<style lang="scss">
  @import url("~/assets/styles/app.scss");
  @import url("~/assets/styles/body-layout.scss");
  body {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    background: rgb(74, 34, 0);
    background: linear-gradient(164deg, rgba(74, 34, 0, 1) 0%, rgba(10, 10, 12, 1) 50%);
    background-repeat: no-repeat;
    background-attachment: fixed;
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