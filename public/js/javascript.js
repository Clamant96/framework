document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
document.body.scrollTop = 0; // For Safari

window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}

// RESPONSIVIDADE

const responsividade = window.matchMedia("(max-width: 1023px)");
metodoResponsivo(responsividade);

document.getElementById("img").onclick = function() {ativarMenu()};

function ativarMenu() {
  document.getElementById("sideBar").style.marginLeft = "0%";

}

function metodoResponsivo() {
  document.getElementById("sideBar").onclick = function() {desativarMenu()}
  
  function desativarMenu() {
    document.getElementById("sideBar").style.marginLeft = "-22%";
  
  }

}

/*var width = 0;

if(window.innerWidth >= 1024){
  width = 0;
}else if(window.innerWidth >= 768 && window.innerWidth <= 1023){
  width = 1;
}else if(window.innerWidth >= 361 && window.innerWidth <= 767){
  width = 2;
}else if(window.innerWidth <= 360){
  width = 3;
}

switch(width){
  case 0:
    document.getElementById("img").onclick = function() {ativarMenu(0)};
  break;

  case 1:
    document.getElementById("img").onclick = function() {ativarMenu(0)};
  break;

  case 2:
    document.getElementById("img").onclick = function() {ativarMenu(0, 100, "auto", 0, "center")};
  break;

  case 3:
    document.getElementById("img").onclick = function() {ativarMenu(0, 100, "auto", 0, "center")};
  break;
}

function ativarMenu(marginLeft) {
  document.getElementById("sideBar").style.marginLeft = `${marginLeft}%`;
}*/

function ativarMenu(marginLeft, width, height, padding, textAlign) {
  document.getElementById("sideBar").style.marginLeft = `${marginLeft}%`;
  document.getElementById("sideBar").style.width = `${width}%`;
  document.getElementById("sideBar").style.height = `${height}`;
  document.querySelector('ul').style.padding = `${padding}%`;
  document.querySelector('ul').style.textAlign = `${textAlign}`;
  //document.getElementById("sideBar").style.position = "relative";
}

/*switch(width){
  case (width >= 1024):
    console.log("Case habilitado -> 1024px. A tela e "+ width +"px");
    alert("A tela e "+ width +"px");
  break;

  case (width >= 768 && width <= 1023):
    console.log("Case habilitado -> 768px e 1023px. A tela e "+ width +"px");
    alert("A tela e "+ width +"px");
  break;

  case (width >= 361 && width <= 767):
    console.log("Case habilitado -> 361px e 767px. A tela e "+ width +"px");
    alert("A tela e "+ width +"px");
  break;

  case (width <= 360):
    console.log("Case habilitado -> 360px. A tela e "+ width +"px");
    alert("A tela e "+ width +"px");
  break;
}*/

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}

/*MODAL - CADASTRO / LOGIN*/
/*var modal = document.getElementById("modal-login-cadastro");
var person = document.getElementById("person");
var span = document.getElementsByClassName("close")[0];

person.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
}*/