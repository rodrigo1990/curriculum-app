export default defineEventHandler (async () => {
    const response = await $fetch('http://localhost/api/site/rodrigo1990');
    return response.data;
})