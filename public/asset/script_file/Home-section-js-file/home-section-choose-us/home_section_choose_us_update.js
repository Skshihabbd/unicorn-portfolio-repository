document.getElementById('home_choose_us_update').addEventListener('submit',function(e){
    e.preventDefault()
const formData=new FormData(e.target)
const image= formData.get('image')

const title= formData.get('title')
const id= formData.get('id')

const description= formData.get('description');
const token=formData.get("_token")
console.log(image,title,description,id);


axios.post(`/home_choose_us_update_data/${id}`,

    {
    image,

    title,
    description,


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

    ['image',  'title', 'description',].forEach(field => {
        document.getElementById(`error-${field}`).innerText = '';
    });

    for (let field in errors) {
        if (document.getElementById(`error-${field}`)) {
            document.getElementById(`error-${field}`).innerText = errors[field][0];
        }
    }

})

})
