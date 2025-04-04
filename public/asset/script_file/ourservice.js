

document.getElementById('ourservices').addEventListener('submit',function(e){

e.preventDefault()

const formdata = new FormData(e.target)
const images=formdata.get('images')
const title=formdata.get('title')
const description=formdata.get('description')
console.log(images.name,title,description);
axios.post('/storeourservice',{
    images:images,
    title:title,
    description:description
},{
    headers:{
        'Content-Type':'multipart/form-data'
    }
})
.then(function(res){
console.log(res);
}).catch(function(error){
console.log(error);
})


});


