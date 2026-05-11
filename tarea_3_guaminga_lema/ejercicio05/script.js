let imagenes = document.querySelectorAll(".galeria img");

imagenes.forEach(function(imagen){

    imagen.addEventListener("click", function(){

        alert("Imagen seleccionada");

    });

});