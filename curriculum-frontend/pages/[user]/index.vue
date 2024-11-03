<template>
    <NuxtLayout>
    </NuxtLayout>
</template>
<script setup>
const route = useRoute()
if(route.params.id == null)
    navigateTo('/'+route.params.user+'/content/1')

</script>