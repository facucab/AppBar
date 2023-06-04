const btnNav = document.getElementById('btnNav'); //boton
const menu = document.querySelector(".menu"); // Menu
const modal = document.querySelector(".modal"); //modal
btnNav.addEventListener("click", ()=>{
    menu.classList.add("showMenu");
    modal.classList.add("showModal");
});


//cerrar menu
const BtnClose = document.getElementById('BtnClose');
BtnClose.addEventListener("click", ()=>{
    menu.classList.remove("showMenu");
    modal.classList.remove("showModal");
});

//

const UserOptions = document.getElementById('UserOptions');
const profile = document.querySelector(".profile");
UserOptions.addEventListener("click", ()=>{
    profile.classList.toggle("showProfile");
});