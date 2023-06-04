// ELEGIR FAVORITO
const BtnFavorito = document.getElementById('BtnFavorito');
BtnFavorito.addEventListener('click' , ()=> {
    let id  = {
        'id' : document.getElementById('FavoritoInput').value,
        'idUser' : document.getElementById('FavoritoIdUser').value
    }
    if(!BtnFavorito.classList.contains('ClickFavorito') == true){
        fetch('favorito-agregar', {
            method: 'POST',
            headers:  {'Content-Type': 'application/json',},
            body: JSON.stringify(id)
        }).then(response =>response.json())
        .then(data=>{
            if(data.error === false){
                BtnFavorito.classList.add('ClickFavorito');
            }
            else{
                console.error(data.mensage);
            }
        })
       
    }
    else if(BtnFavorito.classList.contains('ClickFavorito') == true){
        fetch('favorito-remover', {
            method: 'POST',
            headers:  {'Content-Type': 'application/json',},
            body: JSON.stringify(id)
        }).then(response =>response.json())
        .then(data=>{
            if(data.error === false){
                BtnFavorito.classList.remove('ClickFavorito');
            }
            else{
                console.error(data.mensage);
            }
        })
    }
});


// /*Modal de compartir*/
// const BtnShare = document.getElementById('BtnShare');
// const ModalShare = document.querySelector(".ModalShare");
// BtnShare.addEventListener("click", ()=>{
//     ModalShare.classList.toggle("ModalShareShow");
// });


//
function posicion(vector) {
    let a = vector.length;
    for(let i= 0 ; i<a ; i++){
      if(vector[i].classList.contains("active")){
        return i;
      }
    }
}
//
const BtnNext = document.getElementById('BtnNext');
let carruselBox = document.querySelectorAll(".carruselBox");
let i =1;
BtnNext.addEventListener("click", ()=>{
    let pos= posicion(carruselBox);
    if(pos != (carruselBox.length - 1)){
        carruselBox[pos].classList.remove("active");
        carruselBox[pos + 1].classList.add("active");
    }
 
})
//
const BtnPrev = document.getElementById('BtnPrev');
BtnPrev.addEventListener("click", ()=>{
    let pos = posicion(carruselBox);
    if(pos != 0){
        carruselBox[pos].classList.remove("active");
        carruselBox[pos - 1].classList.add("active");
    }
})



