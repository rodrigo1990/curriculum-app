<template>
    <hidden :xs="true" :sm="true">
        <div class="container">
          <div class="header">
            <row container :gutter="12">
                <column class="logo" :xs="12" :md="4" :lg="3"> 
                  <a href="">
                    <ButtonHeader msg="This is a logo" />
                  </a> 
                </column>
                <column :xs="12" :md="4" :lg="3"></column>
                <column class="right" :md="4" :lg="3">
                   <ButtonHeader msg="Button 1" /> 
                </column>
                <column class="right" :md="4" :lg="3">
                   <ButtonHeader msg="Call me" /> 
                </column>
            </row>
          </div>
        </div>
  </hidden>
</template>

<script>
import { Row, Column, Hidden } from 'vue-grid-responsive';
import ButtonHeader from './../Buttons/ButtonHeader.vue';
export default {
    name: 'HeaderLayout',
    components: {
    Row,
    Column,
    Hidden,
    ButtonHeader
  }
}
</script>

<style scoped lang="scss">
    @import "./src/styles/header-layout.scss";
</style>