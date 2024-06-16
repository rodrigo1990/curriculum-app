<template>
    <div class="my-container" style="padding-left: 1px;width: 100%;">
        <div style="width: 100%;">
            <div class="content" v-for="(item, index) in content" :key="index">
                <div v-html="item"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"Content",
    props: {
        content:{
            required:true,
            type:String
        }
    }
}
</script>

<style scoped lang="scss">
    @import "./src/styles/content.scss";
</style>