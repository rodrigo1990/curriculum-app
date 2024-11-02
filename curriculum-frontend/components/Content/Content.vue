<template>
    <div class="my-container" style="padding-left: 1px;width: 100%;">
        <div style="width: 100%;">
            <strong style="color:white;">
                Current content id: {{ $route.params.id }}
            </strong> 
            <div class="content" v-for="(item, index) in data" :key="index">
                <div v-html="item"></div>
            </div>
        </div>
    </div>
</template>


<script setup>

const data = ref(null)
const route = useRoute()


onBeforeMount (() => {
    setState(route)
})
onMounted(() => {
    setState(route)
})

async function setState(to){
    data.value = await getData(to.params.id)
}

async function  getData(id){
 const {data: getContent, pending} = await useAsyncData("getContent", () =>
      $fetch('/api/content/'+id)
  )
  return getContent.value.response
}

</script>

<style scoped lang="scss">
    @import url("~/assets/styles/content.scss");
</style>