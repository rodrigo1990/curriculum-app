export default defineEventHandler (async (event) => {
    let id = Number(getRouterParam(event, 'id'))
    const response = await $fetch('http://localhost/api/rodrigo1990/'+id);
    return response.data;
})