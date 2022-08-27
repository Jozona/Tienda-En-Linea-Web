

$(document).ready(function(){
    
         $.ajax({
         type: "GET",
         dataType: "json",
         url: "GetProductoRandom"
     }).done(function(data){
         console.log(data);
         
         for(let i=0; data.productos.length; i++){
             var src='';
             
             src='<div class="card"><div class="imgBx"><a href="./producto-pag.html?'+ data.productos[i].idProductos +'" idProducto="'+ data.productos[i].idProductos +'" onclick=traerProducto(this)><img src="'+ data.productos[i].Imagen +'" alt=""></a><ul class="acciones"><li><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Agregar a carrito</span> </li><a href="./producto-pag.html?'+ data.productos[i].idProductos +'"" idProducto="'+ data.productos[i].idProductos +'"><li><i class="fa fa-eye" aria-hidden="true"></i><span>Ver detalles</span></li></a></ul></div><div class="content"><div class="productName"><a href="./producto-pag.html?'+ data.productos[i].idProductos +'""><h3>'+ data.productos[i].NombrePro +'</h3></a></div><div class="precio_card"> <h2>$  '+ data.productos[i].Precio +'</h2><div class="rating">';
             
             for(let j=1; j<=5; j++){
                
                 if(j<=data.productos[i].Valoracion) {                   
                     src += '<i class="fa fa-star" aria-hidden="true"></i>';
                }else{
                    src+='<i class="far fa-star"></i>';
                }
             }
             src+='</div> </div></div></div>';
             
             $("#productos").append(src);
         }     
     }).fail(function(jqXHR, textEstado){
         console.log("La solicitud regreso con un error: " + textEstado);
     });
     

    $.ajax({
         type: "GET",
         dataType: "json",
         url: "GetProductoVistas"
     }).done(function(data){
         console.log(data);
         for(let i=0; data.productosV.length; i++){
             var src='';
             
             src='<div class="swiper-slide card"><div class="card-content"><div class="image"><a href="producto-pag.html?'+ data.productosV[i].idProductos +'" idProducto="'+ data.productosV[i].idProductos +'" onclick=traerProducto(this)><img src="'+ data.productosV[i].Imagen +'" alt=""></a></div><div class="media-icons"> </div><div class="name-profession"><a href="producto-pag.html?'+ data.productosV[i].idProductos +'"><span class="name" style="color: black;">'+ data.productosV[i].NombrePro +'</span></a><span style="font-weight: 600;" class="profession">$  '+ data.productosV[i].Precio +'</span></div><div class="rating">';
             
             for(let j=1; j<=5; j++){
                
                 if(j<=data.productosV[i].Valoracion) {  
                     src += '<i class="fas fa-star"></i>';
                }else{
                    src+='<i class="far fa-star"></i>';
                }
             }
             src+='</div><div class="button"><button class="aboutMe">Comprar <i class="fas fa-shopping-cart"></i></button><a href="producto-pag.html?'+ data.productosV[i].idProductos +'"><button class="hireMe">Información <i class="fa-solid fa-circle-info"></i></button></a></div></div></div>';
         
         $("#cards").append(src);          
         } 
     }).fail(function(jqXHR, textEstado){
         console.log("La solicitud regreso con un error: " + textEstado);
     });
    
});

