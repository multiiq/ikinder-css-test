//sidebar open close js



let menuOpenBtn = document.querySelector(".nav-bar .fa-bars");
let closeOpenBtn = document.querySelector(".nav-links .bx-x");
let navLinks = document.querySelector(".nav-links");

menuOpenBtn.addEventListener("click",()=>{
  navLinks.style.left="0";
})

closeOpenBtn.addEventListener("click",()=>{
  navLinks.style.left="-100%";
})


//sidebar sub menu open close js code

let dropArrow = document.querySelectorAll(".drop-arrow");
dropArrow.forEach((target)=>target.addEventListener("click",()=>{
  let submenu= target.nextSibling.nextSibling;
  console.log(submenu);
  if(!submenu.classList.contains("show1")){
    submenu.classList.add("show1");
  }else{
    submenu.classList.remove("show1");
  }

}
));



