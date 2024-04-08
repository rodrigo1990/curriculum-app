<template>
  <row class="row" container :gutter="12">
      <column :xs="12" :lg="6"> 
        <ButtonsColumn :buttonsArray="['Whoami','Academics','Services','Github']"/>
      </column>
      <column :xs="12" :lg="6">
    </column>
  </row>
</template>

<script>
import { Row, Column } from 'vue-grid-responsive';
import ButtonsColumn from '../Buttons/ButtonsColumn.vue'
export default {
    name: 'BodyMain',
    components: {
        ButtonsColumn,
        Row,
        Column
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .row  {
      padding-top:20px;
      padding:0px 50px;
  }
</style>