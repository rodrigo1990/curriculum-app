<template>
    <section id="header">
        <div class="container-fluid">
        <div class="header">
            <div class="row">
                <div class="col-lg-6"> 
                    <!--  <ButtonHeader :contentId="btnsHeaderData[0].id" description="This is a logo" />-->
                    <ButtonHeader :contentId="btnsState[0].id" description="this is a logo" />
                </div>
                <div class="col-lg-6">
                    <ButtonsListHeader :btns="btnsState"/>
                </div> 
            </div>
        </div>
        </div>
  </section>
</template>

<script setup>
    const props = defineProps({
        btns:{
            type:Array,
            required:true
        }
    })
    const btnsState = ref(props.btns)
</script>