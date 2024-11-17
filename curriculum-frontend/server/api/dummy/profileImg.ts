let data = [
      {id: 0,path: '/images/user/profile/pic.jpg'}];

export default defineEventHandler (async () => {
    let response =  await new Promise((resolve) => {
        setTimeout(() => {
            resolve(data[0])
        },0);
    })
    return {
        response
    }
})