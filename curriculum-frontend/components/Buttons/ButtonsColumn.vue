<template>
  <div class="buttons-column">
    <ul>
      <li v-for="(item) in buttonsArray" :key="item.id">
        <buttonColumn :contentId="item.contentId" :description="item.description"/>
      </li>
    </ul>
  </div>
</template>

<script setup>
import ButtonColumn from './ButtonColumn.vue';
defineProps({
  msg: String,
  buttonsArray: {
    type: Array,
    required: true
  }
})
</script>

<style scoped lang="scss">
    @import url("~/assets/styles/buttons-column.scss");
</style>