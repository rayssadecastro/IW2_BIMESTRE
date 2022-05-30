document.getElementById("botao").onclick = function(){
    var radios = document.getElementsByName("sex")
    var ano = (document.getElementById('ano')).value 
    for (var i = 0; i < radios.lenght; i++){
        if (radios[i].checked){
            var escolha = radios [i].value
            console.log("escolheu" + escolha);
            resultado(escolha,ano)
        }
    }
};
function resultado(opcao, ano){
    var idade = 2022 - (parseInt(ano))
    console.log(idade)
    if (opcao == 'masc'){
        texto.innerHTML
    }
}