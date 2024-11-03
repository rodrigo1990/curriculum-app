const data = [
      {id: 0,description: 'Whoami', contentId:1},
      {id: 1,description: 'Call me!',contentId:5},
];

export default defineEventHandler (async () => {
    let response =  await new Promise((resolve) => {
        setTimeout(() => {
            resolve(data)
        },0);
    })
    return {
        response
    }
})