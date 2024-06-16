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
    async beforeRouteUpdate(to) {
        this.setState(to)
    },
    mounted(){
        this.setState(this.$route)
    },
    methods:{ 
        setState(to){
            const contentData = [
                {
                    id:1,
                    content:['<p> I am a developer from Argentina, I like PHP etc. </p>']
                },
                {
                    id:2,
                    content:['<p> Section 2 </p>']
                },
                {
                    id:3,
                    content:['<p> Section 3 </p>']
                },
                {
                    id:4,
                    content:['<p> Section 4 </p>']
                },

            ]
            this.data = contentData[to.params.id].content
        }
    }
}
</script>

<style scoped lang="scss">
    @import "./src/styles/content.scss";
</style>