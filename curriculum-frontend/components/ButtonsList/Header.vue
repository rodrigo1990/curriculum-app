<template>
  <div class="buttons-header">
    <ul>
        <li v-for="(btn, index) in buttonsArray" :key="index">
          <ButtonHeader :contentId="btn.contentId" :description="btn.description" /> 
        </li>
    </ul>
  </div>
</template>

<script setup>
//import ButtonColumn from './ButtonColumn.vue';
const props = defineProps({
  msg: String,
  btns: {
    type: Array,
    required: true
  }
})
const buttonsArray = ref(props.btns)
</script>
<style scoped>
    ul{
        width: 100%;
        display:block;
        float:right;
        display:flex;
        flex-direction: row;
        justify-content: right;
    }
</style>