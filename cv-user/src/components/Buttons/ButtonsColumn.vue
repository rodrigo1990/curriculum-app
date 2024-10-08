<template>
  <div class="buttons-column">
    <ul>
      <li v-for="(item) in buttonsArray" :key="item.id">
        <buttonColumn :contentId="item.contentId" :description="item.description"/>
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

<style scoped lang="scss">
    @import "./src/styles/buttons-column.scss";
</style>