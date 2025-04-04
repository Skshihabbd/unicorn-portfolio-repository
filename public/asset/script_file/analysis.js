

document.getElementById("analysis_section").addEventListener("submit",function(event){

event.preventDefault()
const formdata=new FormData(event.target)
const logo=formdata.get('logo')
const title=formdata.get('title')
const description=formdata.get('description')

 console.log(logo,title,description);

axios.post('/analysis_section_post',


    {

    logo:logo,
    title:title,
    description:description,

},{
   headers:{
    'Content-Type':'multipart/form-data'
   }
})
.then(function(result){
console.log(result);
event.reset()
})
.catch(function(error){
    console.log(error);
})
})
