const connexion = document.querySelector("#connexion");
const model= document.querySelector(".modal");
const overlay = document.querySelector(".overlay");
const close= document.querySelector(".btn--close-modal");

connexion.addEventListener("click", function(){
    model.style.display="block";
    overlay.style.display="block";
})

overlay.addEventListener("click", function(){
    model.style.display="none";
    overlay.style.display="none";

})

close.addEventListener("click", function(){
    model.style.display="none";
    overlay.style.display="none";
})