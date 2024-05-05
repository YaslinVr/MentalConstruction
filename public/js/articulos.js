(function(){
    const titleArticulos = [...document.querySelectorAll('.arti_title')];
    console.log(titleArticulos)

    titleArticulos.forEach(respuesta =>{
        respuesta.addEventListener('click', ()=>{
            let height = 0;
            let parrafo = respuesta.nextElementSibling;
            let addPading = respuesta.parentElement.parentElement;


            addPading.classList.toggle('articulos_padding--add');
            respuesta.children[0].classList.toggle('arti_arrow--rotate');


            if(parrafo.clientHeight === 0){
                height = parrafo.scrollHeight;
            }

            parrafo.style.height = `${height}px`
        });

    });

})();