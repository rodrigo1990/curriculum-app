let data = [
      {id: 0,description: 'Whoami', contentId:1},
      {id: 1, description: 'Academics', contentId:2},
      {id: 2,description: 'Services',  contentId:3},
      {id: 3,description: 'Github',  contentId:4},
  ];

export default async () => {
    let response = await new Promise((resolve) => {
        setTimeout(() => {
            resolve(data)
        },1000);
    })
    return {
        response
    }
}