export default defineEventHandler (async (event) => {
    let id = Number(getRouterParam(event, 'id'))

    let data = [
                {id:1, content:['<h1>Whoami!</h1>','<p>This is a description of myself as a professional</p>'],},
                {id:2, content:['<h1> Academics </h1> <p> These are my studies in the field...</p>']},
                {id:3, content:['<h1> Services </h1><p>These are the services I do offer..</p>']},
                {id:4, content:['<h1> GitHub </h1><p>And this is my github =)</p>']},
                {id:5, content:['<p> <h1>Call me! </h1></p><p>Please call me ! Dont be bad</p>']},
            ];

    let selected = data.find(item => item.id == id);
    
    let response =  await new Promise((resolve) => {
        setTimeout(() => {
            //resolve(selected)
            resolve(selected)
        },0);
    })
    return {
        response
    }
})
