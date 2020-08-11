var div1;
var div2;

window.onload = function(){
    div1 = document.getElementById("cadastro");
    div2 = document.getElementById("login");

    var bt1 = document.getElementById("bt1");
    bt1.onclick = mostraDiv1;
 
    var bt1 = document.getElementById("bt2");
    bt2.onclick = mostraDiv2;

    div1.classList.add("escondido");
    div2.classList.add("escondido");
}

function mostraDiv1(){
    div1.classList.remove("escondido");
    div2.classList.add("escondido");
    bt1.style.opacity = 1;
    bt2.style.opacity = 0.5;
}

function mostraDiv2(){
    div2.classList.remove("escondido");
    div1.classList.add("escondido");
    bt1.style.opacity = 0.5;
    bt2.style.opacity = 1;
}