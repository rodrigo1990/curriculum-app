let data = [
      {id: 0,description: 'Whoami', contentId:1, class:'afterLine', styles:{fontFamily:'Roboto-Thin',color:'white', fontSize:'1.70rem',afterLineBackground:'#CC5F00'}},
      {id: 1, description: 'Academics', contentId:2, class:'afterLine', styles:{fontFamily:'Roboto-Thin',color:'white', fontSize:'1.70rem',afterLineBackground:'#CC5F00'}},
      {id: 2,description: 'Services',  contentId:3, class:'afterLine', styles:{fontFamily:'Roboto-Thin',color:'white', fontSize:'1.70rem',afterLineBackground:'#CC5F00'}},
      {id: 3,description: 'Github',  contentId:4, class:'afterLine', styles:{fontFamily:'Roboto-Thin',color:'white', fontSize:'1.70rem',afterLineBackground:'#CC5F00'}},
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