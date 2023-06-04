document.addEventListener('DOMContentLoaded', ()=>{
    document.getElementById('formRegistro').addEventListener('submit', validardatos);
});

function validardatos(e){
    e.preventDefault();
    let usuario = document.getElementById('usuario').value;
    let password =  document.getElementById('password').value;
    let nombre = document.getElementById('nombre').value;
    let dateBirth = document.getElementById('dateBirth').value;
    let email = document.getElementById('email').value;
    let imagen = document.getElementById('file-1');

   
    if(usuario === ""  || password === ""  || nombre ===" " || email ===""  || dateBirth === ""){
        document.querySelector(".formError").innerHTML="Complete todos los campos!"
        return false;
    }
    else{
        if(!validarfecha(dateBirth)){
            console.log("se envia")
            this.submit();
        };
      
    }
}


function validarfecha(fecha){
    const ACTUAL_YEAR = new Date().getFullYear(); //actual
    let year= parseInt(fecha.split('-')[0]);
    let month= parseInt(fecha.split('-')[1]);
    let day= parseInt(fecha.split('-')[2]);
    let monthDay = new Date(year, month, 0).getDate();
    if(year > ACTUAL_YEAR || day > monthDay ){
        document.querySelector(".formError").innerHTML="¡Fecha no valida!"
        return false;
    }

}
