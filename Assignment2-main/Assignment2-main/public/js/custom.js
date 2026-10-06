const navList = document.querySelector("#navList");
const openIcon = document.querySelector("#openIcon");
const closeIcon = document.querySelector("#closeIcon");

function toggleNav(){
    navList.classList.toggle('hide')
    openIcon.classList.toggle('hide')
    closeIcon.classList.toggle('hide')
}