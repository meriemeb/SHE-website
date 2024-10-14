let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navibar');
const overlay =document.querySelector("#overlay");






document.querySelector("#show-modal-btn2").addEventListener("click",()=>{
  overlay.style.display ="block";
})
document.querySelector("#close-modal-btn").addEventListener("click",()=>{
  overlay.style.display ="none";
})





document.querySelector("#show-modal-btn3").addEventListener("click",()=>{
  overlay.style.display ="block";
})
document.querySelector("#close-modal-btn").addEventListener("click",()=>{
  overlay.style.display ="none";
})



menu.onclick = () =>{
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
}



var swiper = new Swiper(".home-slider", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 5,
    stretch: 0,
    depth: 100,
    modifier: 2,
    slideShadows: true,
  },
  loop:true,
  autoplay:{
    delay: 1000,
    disableOnInteraction:false,
  }
});



