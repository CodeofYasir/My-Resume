
// show menu
const menu = document.querySelector('.nav');
const menuBtn = document.querySelector('#open');
const closeBtn = document.querySelector('#close');

menuBtn.addEventListener('click',()=>{
    menu.style.display  ="flex";
    closeBtn.style.display = "inline-block";
    menuBtn.style.display = "none";
})

const closeNav = ()=>{
    menu.style.display = "none";
    closeBtn.style.display = "none"
    menuBtn.style.display = "inline-block";
    location.reload();
    
}
closeBtn.addEventListener('click',closeNav);
