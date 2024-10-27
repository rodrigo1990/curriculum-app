export const getContent = (id) => {

  let data = [
            {id:1, content:['<h1>Whoami!</h1>','<p>This is a description of myself as a professional</p>'],},
            {id:2, content:['<h1> Academics </h1>']},
            {id:3, content:['<h1> Services </h1>']},
            {id:4, content:['<h1> GitHub </h1>']},
            {id:5, content:['<p> <h1>Call me! </h1></p>']},
          ];

  let selected = data.find(item => item.id == id);
  console.log(selected)
  return useAsyncData("mockApi", () => {
    return Promise.resolve({
          success: true,
          data: selected,
        });
  }).then((response) => response.data.value)
};