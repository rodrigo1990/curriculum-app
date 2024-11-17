<template>
  <div>
  
    <NuxtLink :to="`/${route.params.user}/content/${contentId}`"
      class="btn"
      :class='class'>

      {{ description }}
    
    </NuxtLink>     
  
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
let afterLineBackground = props.styles.afterLineBackground

if(fontFamily == null && fontFamily != '')
  fontFamily = 'unset'

if(color == null && color != '')
  color = 'unset'

if(fontSize == null && fontSize != '')
  fontSize = 'unset'

if(afterLineBackground == null && afterLineBackground != '')
  afterLineBackground = 'unset'

</script>

<style scoped lang="scss">
  @import url("~/assets/styles/buttons/afterLine.scss");
  
  a {
    font-family: v-bind(fontFamily);
    color: v-bind(color);
    font-size: v-bind(fontSize);
  }

  .afterLine{
    &::after {
        background-color: v-bind(afterLineBackground);
    }
  }
</style>