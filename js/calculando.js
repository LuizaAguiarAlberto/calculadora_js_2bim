function AC(){
    document.calculando.tela.value="";
}


function clica(x){ 
    document.calculando.tela.value=document.calculando.tela.value+x;
}

function resultado(){ 
    var realizando_conta = document.calculando.tela.value;
    document.calculando.tela.value= eval(realizando_conta);
}