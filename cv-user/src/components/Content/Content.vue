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
            if(to.params.id == 1){
                this.data = ['<p> I am a developer from Argentina, I like PHP etc. </p>']
            }else if(to.params.id == 2){
                this.data = ['<p> Section 2 </p>']
            }else if(to.params.id == 3){
                this.data = ['<p> Section 3 </p>']
            }
            else{
                this.data = ['<p> Something else </p>']
            }
        }
    }
}
</script>

<style scoped lang="scss">
    @import "./src/styles/content.scss";
</style>