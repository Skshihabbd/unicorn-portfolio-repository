

document.getElementById('ourwork').addEventListener('submit',function(e){
    e.preventDefault()
const formData=new FormData(e.target)
const image= formData.get('image')
const heading= formData.get('heading')
const title= formData.get('title')
const description= formData.get('description')
let explaination= nicEditors.findEditor('explaination').getContent();
explaination = explaination.replace(/<\/?(ul|ol)>/gi, '');
explaination = explaination.replace(/<span[^>]*>/gi, '').replace(/<\/span>/gi, '');
const token=formData.get("_token")


console.log(image,heading,title,description,explaination);


axios.post('/portfolio_post_ourwork',{
    image,
    heading,
    title,
    description,
    explaination
},{
    headers:{
        'Content-Type':'multipart/form-data',
        'X-CSRF-TOKEN':token,
    }
})

.then(function(res){
console.log(res.data.message);
if(res.data.message){
    e.target.reset()
    Swal.fire({
        position: "top-center",
        icon: "success",
        title: `${res.data.message}`,
        showConfirmButton: false,
        timer: 1500
      });

    document.querySelectorAll('.error-message').forEach(el => {
        el.innerText = '';
    });

nicEditors.findEditor('explaination').setContent('');
}

})
.catch(function(error){
    console.log(error.response.data.errors);
    console.log(error.response.data.databaseerror);
    if(error.response.data.databaseerror){
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: `${error.response.data.databaseerror}`,
            footer: '<a href="#">this is daytabase exception error</a>'
          });
      }

    const errors = error.response.data.errors;

    ['image', 'heading', 'title', 'description', 'explaination'].forEach(field => {
        document.getElementById(`error-${field}`).innerText = '';
    });

    for (let field in errors) {
        if (document.getElementById(`error-${field}`)) {
            document.getElementById(`error-${field}`).innerText = errors[field][0];
        }
    }

})

})


