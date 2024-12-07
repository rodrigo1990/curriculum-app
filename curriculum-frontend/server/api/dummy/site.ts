let data = [
      {id: 0,styles: 'background: rgb(74, 34, 0);background: linear-gradient(164deg, rgba(74, 34, 0, 1) 0%, rgba(10, 10, 12, 1) 50%);background-repeat: no-repeat;background-attachment: fixed;'},
  ];

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