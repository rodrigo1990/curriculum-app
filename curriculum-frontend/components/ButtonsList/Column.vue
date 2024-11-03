<template>
  <div class="buttons-column">
    <ul>
        <li v-for="(item) in buttonsArray" :key="item.id">
          <ButtonColumn :contentId="item.contentId" :description="item.description"/>
        </li>
    </ul>
  </div>
</template>

<script setup>
//import ButtonColumn from './ButtonColumn.vue';
const props = defineProps({
  msg: String,
  buttonsArrayProp: {
    type: Array,
    required: true
  }
})
const buttonsArray = ref(props.buttonsArrayProp)
</script>

<style scoped lang="scss">
    @import url("~/assets/styles/buttons-column.scss");
</style>