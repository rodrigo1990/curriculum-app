<template>
  <div class="buttons-column">
    <ul>
      <li v-for="(buttonTxt, index) in buttonsArray" :key="index">
        <buttonColumn :msg="buttonTxt"/>
      </li>
    </ul>
  </div>
</template>

<script>
import ButtonColumn from './ButtonColumn.vue'

export default {
  name: 'ButtonsColumn',
  components: {
    ButtonColumn
  },
  props: {
    msg: String,
    buttonsArray: {
      type: Array,
      required: true
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  h3 {
    margin: 40px 0 0;
  }
  ul {
    list-style-type: none;
    float:left;
    padding:0;
  }
  li {
    text-align: left;
    display: block;
    margin-top: 20px;
  }
</style>
