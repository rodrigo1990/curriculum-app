<template>
  <div class="container">
    <row container :gutter="12">
        
      <column :xs="12" :lg="1"> 
          <ButtonsColumn :buttonsArray="['Whoami','Academics','Services','Github']"/>
        </column>
        
        <column :xs="12" :lg="4">
          <ProfileImage path="pic.jpg"/>
        </column>

        <column :xs="12" :lg="7">
          <Content />
        </column>
    
      </row>
  </div>
</template>

<script>
import { Row, Column } from 'vue-grid-responsive';
import ButtonsColumn from '../Buttons/ButtonsColumn.vue'
import ProfileImage from '../ProfilePics/ProfileImage.vue';
import Content from '../Content/Content.vue';
export default {
    name: 'BodyMain',
    components: {
        ButtonsColumn,
        Row,
        Column,
        ProfileImage,
        Content
  }
}
</script>

<style scoped lang="scss">
    @import "./src/styles/body-layout.scss";
</style>