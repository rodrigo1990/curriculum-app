<template>
  <div class="container">
    <row container :gutter="12">
        <column :xs="12" :lg="6"> 
          <ButtonsColumn :buttonsArray="['Whoami','Academics','Services','Github']"/>
        </column>
        <column :xs="12" :lg="6">
      </column>
    </row>
  </div>
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

<style scoped lang="scss">
    @import "./src/styles/body-layout.scss";
</style>