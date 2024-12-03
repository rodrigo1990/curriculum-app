const data = [
      {id: 0,description: 'Whoami', contentId:1,class:'afterSquare', styles:{fontFamily:'Roboto-Thin',color:'white', fontSize:'1.70rem',afterSquareBackground:'#CC5F00'}},
      {id: 1,description: 'Call me!',contentId:5,class:'afterSquare', styles:{fontFamily:'Roboto-Thin',color:'white', fontSize:'1.70rem',afterSquareBackground:'#CC5F00'}},
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