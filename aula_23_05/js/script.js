var botao = document.getElementById('botao')
var lamp = document.getElementById('lampada')

botao.onclick = function(){
    //alert('Clicado!')
    if(botao.value == "Acender"){
    lamp.src = "./img/acesa.jpg"
    botao.value = 'Apagar'
    botao.innerHTML = 'Apagar'
}else{
    lamp.src = './img/apagada.jpg'
    botao.value = 'Acender'
    botao.innerHTML = 'Acender'
}
}