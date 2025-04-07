

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

//service page tab-bar make

function tabBar(tab){
console.log(tab);
const allClass=document.querySelectorAll('.tab-div')
console.log(allClass);
console.log(allClass[0].id);


allClass.forEach(tabId=>{
    if(tabId.id===tab){
        tabId.classList.remove('hidden')
    }
    else{
        tabId.classList.add('hidden')
    }
})
}

//service page tab-bar make





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
