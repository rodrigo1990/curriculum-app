<template>
    <div class="my-container" style="padding-left: 1px;width: 100%;">
        <div style="width: 100%;">
            <strong style="color:white;">Current content id: {{ $route.params.id }}</strong> 
            <div class="content" v-for="(item, index) in this.data" :key="index">
                <div v-html="item"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"Content",
    data(){
        return{
            data: null
        }
    },
    mounted(){
        this.data = ['<p> I am a developer from Argentina, I like PHP etc. </p>']
    }
}
</script>

<style scoped lang="scss">
    @import "./src/styles/content.scss";
</style>