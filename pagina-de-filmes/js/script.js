// efeito on/off do search
var btn = document.getElementById('search_btn')
var btns = document.getElementById('search_btns')
var container = document.querySelector('.boxContainer')
btn.addEventListener('click', function() {
if(container.style.display === 'block') {
    container.style.display = 'none'
} else {
    container.style.display = 'block'
}
})
btns.addEventListener('click', function() {
if(container.style.display === 'block') {
    container.style.display = 'none'
} else {
    container.style.display = 'block'
}
})
// mudar foto menu
function mudaFoto(foto){
    document.getElementById("icone_menu").src = foto
}
function voltaFoto(){
  document.getElementById("icone_menu").src = 'https://carlinhosuniformes.com.br/wp-content/uploads/2019/03/SEU-LOGO.png'
}