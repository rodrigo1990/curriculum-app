<template>
  <div class="buttons-header">
    <ul>
        <li v-for="(btn, index) in buttonsArray" :key="index">
          <ButtonHeader :contentId="btn.contentId" 
          :description="btn.description"
          :class="btn.class"
          :styles="btn.styles"
          /> 
        </li>
    </ul>
  </div>
</template>

<script setup>
const {data: buttonsHeader, pendingBtnsHeader} = await useFetch('/api/dummy/buttonsHeader')
const buttonsArray = ref(buttonsHeader.value.response)
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