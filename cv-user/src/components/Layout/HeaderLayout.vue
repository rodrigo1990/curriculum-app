<template>
    <hidden :xs="true" :sm="true">
        <row class="row" container :gutter="12">
            <column class="logo" :xs="12" :md="4" :lg="3"> 
              <a href="">This is a logo</a> 
            </column>
            <column :xs="12" :md="4" :lg="3"></column>
            <column class="right" :md="4" :lg="3"> <a href="">Button 1</a> </column>
            <column class="right" :md="4" :lg="3"> <a href="">Call me</a> </column>
        </row>
  </hidden>
</template>

<script>
import { Row, Column, Hidden } from 'vue-grid-responsive';
export default {
    name: 'HeaderLayout',
    components: {
    Row,
    Column,
    Hidden
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .row  {
      padding:20px 50px;
  }

  .row a{
    text-decoration: none;
    color:white;
  }

  .right{
    text-align: right;;
  }
</style>