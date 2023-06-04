document.addEventListener('DOMContentLoaded', ()=>{
    document.getElementById('FormLogin').addEventListener('submit', validardatos);
});

function validardatos(e){
    e.preventDefault();
    let usuario = document.getElementById('usuario').value;
    let password =  document.getElementById('password').value;
    if(usuario === ""  || password === "" ){
        document.querySelector(".formError").innerHTML="Complete todos los campos!"
        return false;
    }
    else{
        this.submit();
    }
}
