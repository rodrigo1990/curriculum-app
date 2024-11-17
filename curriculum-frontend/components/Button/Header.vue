<template>
    <div>
      <NuxtLink :to="`/${route.params.user}/content/${contentId}`" class="btn" :class="class">{{ description }}</NuxtLink> 
    </div>
</template>

<script setup>
const route = useRoute()
const props = defineProps({
  description: {
    type: String,
    required:true
  },
  contentId:{
    type:Number,
    required:true
  },
  class:{
    type:String,
    required:true
  },
  styles:{
    type:Object,
    required:true
  }
})

let fontFamily = props.styles.fontFamily
let color = props.styles.color
let fontSize = props.styles.fontSize
let afterSquareBackground = props.styles.afterSquareBackground

if(fontFamily == null && fontFamily != '')
  fontFamily = 'unset'

if(color == null && color != '')
  color = 'unset'

if(fontSize == null && fontSize != '')
  fontSize = 'unset'

if(afterSquareBackground == null && afterSquareBackground != '')
  afterSquareBackground = 'unset'

</script>

<style scoped lang="scss">
  @import url("~/assets/styles/buttons-header.scss");
  a {
    font-family: v-bind(fontFamily);
    color: v-bind(color);
    font-size: v-bind(fontSize);
  }

  .afterSquare{
    &:after,
    &:before {
        border: 0px solid #fff;
    }

    &:after {
        border-top: 1px solid v-bind(afterSquareBackground);
        border-left: 1px solid v-bind(afterSquareBackground);
    }

    &:before {
        border-bottom: 1px solid v-bind(afterSquareBackground);
        border-right: 1px solid v-bind(afterSquareBackground);
    }

    &:active {
        background-color: v-bind(afterSquareBackground);
    }
  }
</style>