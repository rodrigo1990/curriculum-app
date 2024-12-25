<template>
  <div class="buttons-header">
    <ul>
        <li v-for="(item, index) in props.buttons" :key="item.button.id">
          <ButtonHeader :contentId="item.button.page_id"
          :description="item.button.name"
          :class="item.class"
          :styles="item.styles"
          /> 
        </li>
    </ul>
  </div>
</template>

<script setup>
const props = defineProps({
  buttons: {
    type: Array,
    required:false
  }
})
</script>
<style scoped lang="scss">
    ul{
        width: 100%;
        display:block;
        float:right;
        display:flex;
        flex-direction: row;
        justify-content: right;
        li:not(:last-child){
            margin-right:15rem;
        }
    }
</style>