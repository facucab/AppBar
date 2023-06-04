//home 
const BtnSearch = document.getElementById('BtnSearch');
const inputSearch = document.getElementById('inputSearch');

BtnSearch.addEventListener('click', ()=>{
    valor = inputSearch.value;
    if(validarDatos(valor)){
        Redirreccionar(valor);
        console.log(valor)
        return true;
    }

    console.error("Datos no validos");
});


function validarDatos(valor){
    if(valor ==="" || valor.length > 40){
        return false;
    }
    return true;
}

function Redirreccionar(slug){
    window.location.href="search/"+slug;
}