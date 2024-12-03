// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
   /*components: [
    {
      path: '~/components',
      pathPrefix: false,
    },
  ],*/
  modules: ['@bootstrap-vue-next/nuxt'],
  css: [
    'animate.css/animate.min.css',
    'bootstrap/dist/css/bootstrap.min.css',
  ],
  vite:{
    css: {
      preprocessorOptions: {
        scss: {
          api: 'modern-compiler' // or "modern"
        }
      }
    }
  }
})
