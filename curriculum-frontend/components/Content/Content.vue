<template>
    <div class="my-container" style="padding-left: 1px;width: 100%;">
        <div style="width: 100%;">
            <strong style="color:white;">Current content id: {{ $route.params.id }}</strong> 

                <div class="content" v-for="(item, index) in data" :key="index">
                    <div v-html="item"></div>
                </div>
            
        </div>
    </div>
</template>


<script setup>
const data = ref(null)
const route = useRoute()

onMounted(() => {
    
    setState(route)
})

function setState(to){
    console.log('setState')
    console.log(route.params)
    getContent(to.params.id).then((response) => {
        data.value = response.data.content
        console.log('getContent...')
        console.log(data.value)
    })
}
</script>
<style scoped lang="scss">
    @import url("~/assets/styles/content.scss");
</style>