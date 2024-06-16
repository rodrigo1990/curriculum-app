<template>
  <div class="container">
    <row container :gutter="12">
        
      <column :xs="12" :lg="1"> 
          <ButtonsColumn :buttonsArray="this.btnsData"/>
        </column>
        
        <column :xs="12" :lg="4">
          <ProfileImage path="pic.jpg"/>
        </column>

        <column :xs="12" :lg="7">
          <RouterView />
        </column>
    
      </row>
  </div>
</template>

<script>
import { Row, Column } from 'vue-grid-responsive';
import ButtonsColumn from '../Buttons/ButtonsColumn.vue'
import ProfileImage from '../ProfilePics/ProfileImage.vue';
import { RouterView } from 'vue-router';
export default {
    name: 'BodyMain',
    data(){
      return {
        btnsData:null
      }
    },
    components: {
        RouterView,
        ButtonsColumn,
        Row,
        Column,
        ProfileImage,
  },
  beforeMount(){
    this.btnsData = [
      {
        'id': 1,
        'description': 'Whoami',
      },
      {
        'id': 2,
        'description': 'Academics',
      },
      {
        'id': 3,
        'description': 'Services',
      },
      {
        'id': 4,
        'description': 'Github',
      },
    ]
  }
}
</script>

<style scoped lang="scss">
    @import "./src/styles/body-layout.scss";
</style>