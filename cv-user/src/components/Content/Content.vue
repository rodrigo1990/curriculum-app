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
import { ContentData } from '@/dummyData/ContentData'
export default {
    name:"Content",
    data(){
        return{
            data: null
        }
    },
    async beforeRouteUpdate(to) {
        this.setState(to)
    },
    mounted(){
        this.setState(this.$route)
    },
    methods:{ 
        setState(to){
            this.data = ContentData.find(item => item.id == to.params.id).content;
            //contentData[to.params.id].content
        }
    }
}
</script>

<style scoped lang="scss">
    @import "./src/styles/content.scss";
</style>