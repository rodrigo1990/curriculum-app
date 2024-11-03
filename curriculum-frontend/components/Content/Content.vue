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
    const route = useRoute()
    const {data: getContent, pendingBtnsBody} = await useFetch('/api/content/'+route.params.id)
    const data = ref(getContent.value.response)
</script>

<style scoped lang="scss">
    @import url("~/assets/styles/content.scss");
</style>