var paramstr = window.location.search.substr(1);
$(document).ready(function(){
        document.getElementById("tituloCat").textContent = paramstr;
    
         $.ajax({
          data:{catProducto: paramstr},
         type: "GET",
         dataType: "json",
         url: "GetProductoCat"
     }).done(function(data){
         console.log(data);
         for(let i=0; data.productosC.length; i++){
             var src='';
             
             src='<div class="card"><div class="imgBx"><a href="./producto-pag.html?'+ data.productosC[i].idProductos +'" idProducto="'+ data.productosC[i].idProductos +'" onclick=traerProducto(this)><img src="'+ data.productosC[i].Imagen +'" alt=""></a><ul class="acciones"><li><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Agregar a carrito</span> </li><a href="./producto-pag.html?'+ data.productosC[i].idProductos +'"" idProducto="'+ data.productosC[i].idProductos +'"><li><i class="fa fa-eye" aria-hidden="true"></i><span>Ver detalles</span></li></a></ul></div><div class="content"><div class="productName"><a href="./producto-pag.html?'+ data.productosC[i].idProductos +'""><h3>'+ data.productosC[i].NombrePro +'</h3></a></div><div class="precio_card"> <h2>$  '+ data.productosC[i].Precio +'</h2><div class="rating">';
             
             for(let j=1; j<=5; j++){
                
                 if(j<=data.productosC[i].Valoracion) {                   
                     src += '<i class="fa fa-star" aria-hidden="true"></i>';
                }else{
                    src+='<i class="far fa-star"></i>';
                }
             }
             src+='</div> </div></div></div>';
             
             $("#productosCard").append(src);
         }     
     }).fail(function(jqXHR, textEstado){
         console.log("La solicitud regreso con un error: " + textEstado);
     });
     

});

