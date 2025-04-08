// ourworkupdate

document.getElementById('ourworkupdate').addEventListener('submit',function(e){
    e.preventDefault()
const formData=new FormData(e.target)
const image= formData.get('image')
const heading= formData.get('heading')
const title= formData.get('title')
const id= formData.get('id')
const description= formData.get('description')
let explaination = nicEditors.findEditor('explaination').getContent();
explaination = explaination.replace(/<\/?(ul|ol)>/gi, '');
explaination = explaination.replace(/<span[^>]*>/gi, '').replace(/<\/span>/gi, '');
const token=formData.get("_token")
console.log(image,heading,title,description,explaination,id);


axios.post(`/single_data_our_work_update/${id}`,

    {
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
console.log('redirect_url',res.data.redirect_url);
console.log(res.data.message);
if(res.data.message){
    Swal.fire({
        position: "top-center",
        icon: "success",
        title: `${res.data.message}`,
        showConfirmButton: false,
        timer: 1500
      });
    window.location.href = res.data.redirect_url;

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
