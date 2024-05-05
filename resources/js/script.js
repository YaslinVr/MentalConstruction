/*Navegacion plegable */
var logo = document.getElementById("logo");
var barraLateral = document.querySelector(".barra-lateral")
var spans = document.querySelectorAll("span");
var menu = document.querySelector(".menu");
var main = document.querySelector(".main_content");

menu.addEventListener("click", function(){
    barraLateral.classList.toggle("max_barra_lateral");
    if(barraLateral.classList.contains("max_barra_lateral")){
        menu.children[0].style.display="none";
        menu.children[1].style.display="block";
    }
    else{
        menu.children[0].style.display="block";
        menu.children[1].style.display="none";
    }
    if(window.innerWidth<=320){
        barraLateral.classList.add("mini_barra_lateral");
        main.classList.add("min_main");
        spans.forEach((span)=>{
            span.classList.add("oculto");
        })
    }
});

logo.addEventListener("click", function() {
    barraLateral.classList.toggle("mini_barra_lateral");
    main.classList.toggle("min_main");
    
    spans.forEach(function(span) {

        span.classList.toggle("oculto");

    });
        
});

