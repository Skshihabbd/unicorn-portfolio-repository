

document.getElementById('about_page_who_we_are_post').addEventListener('submit',function(e){
    e.preventDefault()
const formData=new FormData(e.target)
const image= formData.get('image')

const title_1= formData.get('title_1')
const title_2= formData.get('title_2')
const title_3= formData.get('title_3')
const title_4= formData.get('title_4')
const description_1= formData.get('description_1')
const description_2= formData.get('description_2')

const token=formData.get("_token")
console.log(title_1,image,title_2,title_3,title_4,description_1,description_2);


axios.post('/about_page_who_we_are_post_data',{
    image,
    title_1,
    title_2,
    title_3,
    title_4,
    description_1,
    description_2

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

    ['image',  'title_1','title_2','title_3','title_4','description_1', 'description_2', ].forEach(field => {
        document.getElementById(`error-${field}`).innerText = '';
    });

    for (let field in errors) {
        if (document.getElementById(`error-${field}`)) {
            document.getElementById(`error-${field}`).innerText = errors[field][0];
        }
    }

})

})


