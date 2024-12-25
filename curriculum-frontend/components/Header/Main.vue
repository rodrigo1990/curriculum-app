<template>
    <section id="header">
        <div class="container-fluid">
        <div class="header">
            <div class="row">
                <div class="col-lg-6"> 
                    <h1 style="color:white;">Logo</h1>
                </div>
                <div class="col-lg-6">
                    <ButtonsListHeader :buttons="props.buttons"/>
                </div> 
            </div>
        </div>
        </div>
  </section>
</template>

<script setup>
const props = defineProps({
  buttons: {
    type: Array,
    required:false
  }
})
console.log(props.buttons)
</script>