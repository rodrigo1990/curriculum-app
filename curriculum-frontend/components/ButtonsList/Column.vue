<template>
  <div class="buttons-column">
    <ul>
        <li v-for="(item) in buttonsArray" :key="item.id">
        
          <ButtonColumn :contentId="item.contentId"
           :description="item.description"
            :class="item.class"
            :styles="item.styles"
          />
        
        </li>
    </ul>
  </div>
</template>

<script setup>
  const {data: buttonsBody, pendingBtnsBody} = await useFetch('/api/dummy/buttonsBody')
  const buttonsArray = ref(buttonsBody.value.response)
</script>

<style scoped lang="scss">
    @import url("~/assets/styles/buttons-column.scss");
</style>