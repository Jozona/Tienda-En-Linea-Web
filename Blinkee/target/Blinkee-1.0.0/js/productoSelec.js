var paramstr = window.location.search.substr(1);


$(document).ready(function(){
    
         $.ajax({
          data:{idProducto:paramstr},
         type: "GET",
         dataType: "json",
         url: "GetProductoSelec"
     }).done(function(data){
        console.log(data);
        document.getElementById("nombreProd").textContent = data.productosS.NombrePro;
        document.getElementById("precioProd").textContent = "$" + data.productosS.Precio;
        document.getElementById("descripcionProd").textContent = data.productosS.Descripcion;
         document.getElementById("categoriaProd").textContent = data.productosS.Categoria;
       document.getElementById("imgProd1").src = data.productosS.Imagen;
     }).fail(function(jqXHR, textEstado){
         console.log("La solicitud regreso con un error: " + textEstado);
     });
     
});