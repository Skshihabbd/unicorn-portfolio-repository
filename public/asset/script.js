

//medium and small device responsive navber codebase
function burgerMenu() {
    document.getElementById("burger").classList.add("hidden");
    document.getElementById("cross").classList.remove("hidden");

    const menudiv = document.getElementById("menudiv");
    menudiv.classList.remove("-translate-x-full");
    menudiv.classList.add("translate-x-0");
}

function crossMenu() {
    document.getElementById("cross").classList.add("hidden");
    document.getElementById("burger").classList.remove("hidden");

    const menudiv = document.getElementById("menudiv");
    menudiv.classList.add("-translate-x-full");
    menudiv.classList.remove("translate-x-0");
}
//medium and small device responsive navber codebase

//contact form data get value from input

document.getElementById("contact").addEventListener('submit',function(e){
e.preventDefault()

// const formData=new FormData(e.target);
// const ss=formData.get("_token")

const email=document.querySelector("#email").value
const name=document.querySelector("#username").value
const phone=document.querySelector("#number").value
const message=document.querySelector("#message").value
const s=document.querySelector('meta[name="csrf-token"]').getAttribute('content')
console.log(email,name,phone,message,s)

console.log(this.getAttribute('action'));

axios.post('/store',{
    email:email,
    name:name,
    phone:phone,
    message:message
},{headers:{
    "Content-Type":"application/json",
    'X-CSRF-TOKEN':document.querySelector('meta[name="csrf-token"]').getAttribute('content')

}})
.then(function(res){

    if(res.data){
        if (typeof res.data === 'string' && res.data.includes('<html')) {
            throw new Error('Route not found');
        }else{
            Swal.fire({
                position: "center",
                icon: "success",
                title: "data successfully saved to database",
                showConfirmButton: false,
                timer: 1500
              });
        }


    }
})
.catch(function(error){
    console.log(error);
    Swal.fire({
        position: "center",
        icon: "success",
        title: `${error}`,
        showConfirmButton: false,
        timer: 1500
      });

})

})





document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".swiper", {
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});
